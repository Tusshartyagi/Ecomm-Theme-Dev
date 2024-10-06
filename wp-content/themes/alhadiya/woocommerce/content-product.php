<?php
/**
 * The template for displaying product content within loops.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>

<div <?php wc_product_class( 'col-md-4 px-lg-0 px-2 py-lg-2 py-4 pb-2', $product ); ?>>
    <div class="product-item">
        <div class="product-inner">
            <div class="product-thumbnail">
                <div class="thumbnail-border product-info">
                    <div class="img link quick-view-btn px-4" data-toggle="modal" data-target="#productModal<?php echo $product->get_id(); ?>" data-product-id="<?php echo $product->get_id(); ?>">
                        <?php echo woocommerce_get_product_thumbnail(); ?>
                    </div>
                    <h5 class="pt-2 px-2 mobile-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </div>
            </div>
            <div class="add-products-button w-100 px-2 pb-2">
                <?php woocommerce_template_single_add_to_cart(); ?>
            </div>
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
                                    <?php woocommerce_template_single_add_to_cart(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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