<?php

/**
 * Enqueue parent and child theme styles.
 */

function alhadiya_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
    wp_enqueue_script('custom-product-gallery', get_stylesheet_directory_uri() . '/assets/js/custom-product-gallery.js', array('jquery'), null, true);
    wp_enqueue_script('live-search', get_stylesheet_directory_uri() . '/assets/js/live-search.js', array('jquery'), null, true);

    // Pass AJAX URL to script
    wp_localize_script('live-search', 'liveSearchParams', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'alhadiya_enqueue_styles');
function enqueue_elevate_zoom() {
    wp_enqueue_script('elevate-zoom', 'https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js', array('jquery'), '3.0.8', true);
}
add_action('wp_enqueue_scripts', 'enqueue_elevate_zoom');



/**
 * Add viewport meta tag.
 */
add_action('wp_head', 'add_viewport_meta_tag', 1);
function add_viewport_meta_tag()
{
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}

/**
 * Filter search results to include price.
 */
add_filter('asl_results', 'asl_display_price_w_currency', 10, 1);
function asl_display_price_w_currency($results)
{
    foreach ($results as $k => &$r) {
        if (isset($r->post_type) && in_array($r->post_type, array('product', 'product_variation'))) {
            $p = wc_get_product($r->id);
            $r->title .= ' - ' . $p->get_price_html();
        }
    }
    return $results;
}

/**
 * Move WooCommerce orders menu item.
 */
add_action('admin_menu', function () {
    if (current_user_can('manage_woocommerce')) {
        remove_submenu_page('woocommerce', 'edit.php?post_type=shop_order');
        add_menu_page(__('Orders', 'woocommerce'), __('Orders', 'woocommerce'), 'manage_woocommerce', 'edit.php?post_type=shop_order', '', 'dashicons-cart', 30);
    }
}, 999);

/*
*Ajax search by redpishi.com
*https://redpishi.com/wordpress-tutorials/live-ajax-search-in-wordpress/
*/
function asearch_func($atts) {
    $atts = shortcode_atts(array(
        'source' => 'product',
        'image' => 'true'
    ), $atts, 'asearch');

    static $asearch_first_call = 1;
    $source = $atts["source"];
    $image = $atts["image"];

    $sForm = '<div class="search_bar">
        <form class="asearch" id="asearch' . $asearch_first_call . '" action="/" method="get" autocomplete="off">
            <input type="text" name="s" placeholder="Search ..." id="keyword' . $asearch_first_call . '" class="input_search" onkeyup="searchFetch(this)">
            <button type="button" id="mybtn">🔍</button>
        </form>
        <div class="search_result" id="datafetch' . $asearch_first_call . '" style="display: none;">
            <ul><li>Please wait..</li></ul>
        </div>
    </div>';

    if ($asearch_first_call == 1) {
        $asearch_first_call++;
        return "{$sForm}<script src='" . get_stylesheet_directory_uri() . "/live-search.js'></script>";
    } else {
        $asearch_first_call++;
        return "{$sForm}";
    }
}
add_shortcode('asearch', 'asearch_func');




add_action('wp_ajax_asearch', 'asearch');
add_action('wp_ajax_nopriv_asearch', 'asearch');

function asearch() {
    $the_query = new WP_Query(array(
        'posts_per_page' => 10,
        's' => esc_attr($_POST['s']),
        'post_type' => explode(",", esc_attr($_POST['source']))
    ));

    if ($the_query->have_posts()) {
        echo '<ul>';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            ?>
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <li><?php the_title(); ?></li>
                <?php
                if (trim(esc_attr($_POST['image'])) == "true") {
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                    if ($image) {
                ?><img src="<?php echo esc_url($image[0]); ?>" style="height: 60px; padding: 0 5px;">
                <?php
                    }
                }
            ?></a>
            <?php
        }
        echo '</ul>';
        wp_reset_postdata();
    } else {
        echo '<ul><a href="#"><li>Sorry, nothing found</li></a></ul>';
    }
    die();
}