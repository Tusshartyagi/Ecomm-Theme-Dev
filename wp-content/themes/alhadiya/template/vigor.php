<?php

/**
 * Template Name: Vigor Page Template
 *
 * Template for displaying products in a grid layout with quantity and mini-cart update.
 *
 * @package YourTheme
 */


get_header('shop');

// Get the queried object and sanitize it
$queried_object = get_queried_object();
$category_slug = '';
if (isset($queried_object->slug)) {
    $category_slug = sanitize_title($queried_object->slug);
}
?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-5">
            <hr style="border: 2px solid black; color:black">
        </div>
        <div class="col-lg-2">
            <h1 class="text-align-center heading-contact" style="font-size:30px"><?php woocommerce_page_title(); ?></h1>
        </div>
        <div class="col-lg-5">
            <hr style="border: 2px solid black; color:black">
        </div>
    </div>
</div>

<div id="primary" class="container pb-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="product-grid">
                    <?php
                    // Initialize $args variable
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 9, // Number of products per page
                        'paged'          => max(1, get_query_var('paged')),
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'pa_brand',
                                'field' => 'name',
                                'terms'    => 'vigor',
                            )
                        )
                    );

                    // Run WP_Query with the arguments
                    $products_query = new WP_Query($args);

                    // Check if there are any products found
                    if ($products_query->have_posts()) :
                        // Loop through the products
                        while ($products_query->have_posts()) :
                            $products_query->the_post();
                            global $product;
                    ?>
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumbnail">
                                        <div class="thumbnail-border product-info">
                                            <div class="img link quick-view-btn" data-toggle="modal" data-target="#productModal<?php echo $product->get_id(); ?>" data-product-id="<?php echo $product->get_id(); ?>">
                                                <?php echo woocommerce_get_product_thumbnail(); ?>
                                            </div>
                                            <h5 class="pt-2 px-2 mobile-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        </div>
                                    </div>
                                    <div class="add-products-button w-100 px-2 pb-2">
                                        <?php
                                        woocommerce_template_single_add_to_cart();
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Quick View -->
                            <div class="modal fade" id="productModal<?php echo $product->get_id(); ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?php echo $product->get_id(); ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="productModalLabel<?php echo $product->get_id(); ?>">Product Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-thumbnail">
                                                            <div class="img">
                                                                <?php echo woocommerce_get_product_thumbnail(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-details">
                                                            <h2><?php the_title(); ?></h2>
                                                            <p><strong>SKU:</strong> <?php echo $product->get_sku(); ?></p>
                                                            <label>Quantity:</label>
                                                            <div class="add-products-button w-100">
                                                                <?php
                                                                woocommerce_template_single_add_to_cart();
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;

                        // Display pagination
                        echo '<div class="col-12">';
                        echo paginate_links(array(
                            'total'   => $products_query->max_num_pages,
                            'current' => max(1, get_query_var('paged')),
                        ));
                        echo '</div>';

                        // Reset post data
                        wp_reset_postdata();
                    else :
                        // No products found message
                        echo '<p>No products found</p>';
                    endif;
                    ?>
                </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        $('.quick-view-btn').on('click', function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            $('#productModal' + productId).modal('show');
        });
    });
</script>
<?php
get_footer('shop');
?>