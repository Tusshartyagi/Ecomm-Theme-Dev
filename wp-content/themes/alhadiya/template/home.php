<?php

/**
 * Template Name: Home Page Template
 *
 * Template for displaying products in a grid layout with quantity and mini-cart update.
 *
 * @package YourTheme
 */

get_header(); // Include header.php
?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section class="container breadcumb-area desktop-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
  <div class="container">
    <div class="row" style="align-items:left;">
      <div class="col-lg-5 col-12 px-5 mx-5">
        <div class="breadcumb p-0 mx-auto" style="color:#fff;text-align:center!Important;">
          <h1 class="pb-2 m-0" style="text-align:left;color:white!important"><?php echo esc_html(get_field('title')); ?></h1>
          <p class="py-3 w-lg-50" style="color:white!important"><?php echo esc_html(get_field('description')); ?></p>
          <button class="py-3 d-flex" style="color:white!important"><a href="<?php echo esc_html(get_field('url')); ?>">View Our Range</a></button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="breadcumb-area mobile-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');margin-top:0px;background-position: center;background-size: cover;background-repeat: no-repeat;">
  <div class="container pt-md-5">
    <div class="row py-5" style="align-items:left;">
      <div class="col-xl-12 px-0">
        <div class="breadcumb px-0" style="color:#fff;text-align:center!Important;">
          <h1 class="pb-2 m-0" style="text-align:center;color:white!important"><?php echo esc_html(get_field('title')); ?></h1>
          <p class="py-2 mx-auto text-center" style="text-align:center;color:white!important"><?php echo esc_html(get_field('description')); ?></p>
          <button class="py-2" style="color:white!important"><a href="<?php echo esc_html(get_field('url')); ?>">View Our Range</a></button>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container py-5 my-lg-5">
  <div class="row management-area pb-5 pt-5" style="background-image: url('<?php echo esc_url(get_field('image')); ?>');background-size: contain;background-position: top;background-attachment: local;">
    <div class="col-md-12">
      <div class="container" style="z-index: 1;position: relative;">
        <div class="row mobile-view" style="column-gap:20px; row-gap:50px;flex-wrap:nowrap">
          <div class="col-lg-12 d-flex pb-3">
            <div class="new p-lg-5" style="color:white;">
              <h2 class="yellow"><?php echo esc_html(get_field('main_title')); ?></h2>
              <p class=" white mx-auto m-0"><?php echo esc_html(get_field('main_description')); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container pb-5">
  <div class="row">
    <div class="col-lg-4">
      <hr style="border: 2px solid black; color:black">
    </div>
    <div class="col-lg-4">
      <h1 class="text-align-center heading-contact"><?php echo esc_html(get_field('product')); ?></h1>
    </div>
    <div class="col-lg-4">
      <hr style="border: 2px solid black; color:black">
    </div>
  </div>
</div>
<div id="primary" class="container pb-4">
  <div class="product-grid">
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 4,
    );

    $products = new WP_Query($args);

    if ($products->have_posts()) :
      while ($products->have_posts()) :
        $products->the_post();
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
      wp_reset_postdata();
    else :
      echo '<p>No products found</p>';
    endif;
    ?>
  </div>
</div>

<div class="container text-align-center">
  <button class="yellow-button" style="color:white!important"><a href="<?php echo esc_html(get_field('shop')); ?>">Shop All</a></button>
</div>

<div class="container py-5">
  <div class="row verify-area pb-5 pt-5">
    <div class="col-md-12">
      <div class="container" style="z-index: 1;position: relative;">
        <div class="row mobile-view" style="column-gap:20px; row-gap:50px;flex-wrap:nowrap">
          <div class="col-lg-12 d-flex pb-3">
            <div class="data w-100 mx-auto" style="color:white;">
              <h2 class="text-align-center blue pb-3"><?php echo esc_html(get_field('giving')); ?></h2>
              <div class="row py-3 pb-4">
                <div class="col-lg-4 px-4">
                  <div class="data-1">
                    <img src="<?php echo esc_url(get_field('why_us')['image']); ?>" class="px-5 py-2 mx-auto" />
                    <h4 class="text-align-center py-1"><?php echo esc_html(get_field('why_us')['title']); ?></h4>
                    <p class="text-align-center"><?php echo esc_html(get_field('why_us')['description']); ?></p>
                  </div>
                </div>
                <div class="col-lg-4 px-4">
                  <div class="data-1">
                    <img src="<?php echo esc_url(get_field('why_us_1')['image']); ?>" class="px-5 py-2 mx-auto" />
                    <h4 class="text-align-center py-1"><?php echo esc_html(get_field('why_us_1')['title']); ?></h4>
                    <p class="text-align-center"><?php echo esc_html(get_field('why_us_1')['description']); ?></p>
                  </div>
                </div>
                <div class="col-lg-4 px-4">
                  <div class="data-1">
                    <img src="<?php echo esc_url(get_field('why_us_2')['image']); ?>" class="px-5 py-2 mx-auto" />
                    <h4 class="text-align-center py-1"><?php echo esc_html(get_field('why_us_2')['title']); ?></h4>
                    <p class="text-align-center"><?php echo esc_html(get_field('why_us_2')['description']); ?></p>
                  </div>
                </div>
              </div>
              <div class="container text-align-center">
                <button class="blue-button" style="color:white!important"><a href="<?php echo esc_html(get_field('more')); ?>">Read More</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mb-5">
  <div class="row management-area pb-5 pt-5" style="background-image: url('<?php echo esc_url(get_field('image_1')); ?>');background-size: cover;background-position: top;background-attachment: local;">
    <div class="col-md-12">
      <div class="container" style="z-index: 1;position: relative;">
        <div class="row mobile-view" style="flex-wrap:nowrap">
          <div class="col-lg-12 d-flex pb-3">
            <div class="new p-lg-5" style="color:white;">
              <p class="yellow"><?php echo esc_html(get_field('service_title')); ?></>
              <p class=" white mx-auto"><?php echo esc_html(get_field('service_description')); ?></p>
              <button class="transparent-button mt-4"><a href="<?php echo esc_html(get_field('shop')); ?>">Contact us</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container pb-4">
  <div class="row">
    <div class="col-lg-5">
      <hr style="border: 2px solid black; color:black">
    </div>
    <div class="col-lg-2">
      <h1 class="text-align-center heading-contact"><?php echo esc_html(get_field('brand')); ?></h1>
    </div>
    <div class="col-lg-5">
      <hr style="border: 2px solid black; color:black">
    </div>
  </div>
</div>
<div class="container pb-5">
  <div class="brand-container px-lg-5 mx-auto align-items-center">
    <?php
    // Query to fetch posts from Industries custom post type
    $args = array(
      'post_type' => 'Brand',
      'posts_per_page' => -1,
      'order' => 'ASC',
    );
    $industries_query = new WP_Query($args);

    if ($industries_query->have_posts()) :
      while ($industries_query->have_posts()) : $industries_query->the_post();
    ?>
        <div class="platform">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('medium', ['class' => 'my-3 px-3 mx-auto']);
          }
          ?>
        </div>
    <?php
      endwhile;
      wp_reset_postdata(); // Reset the query
    else :
      // If no posts found
      echo '<p>No industries found.</p>';
    endif;
    ?>
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
get_footer(); // Include footer.php
?>