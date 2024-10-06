<?php
get_header();
?>
<div id="primary" class="container mt-5">
    <main id="main" class="site-main">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-6">
                    <div class="product-gallery d-flex">
                        <?php
                        global $product;

                        // Fetch the product object
                        $product = wc_get_product(get_the_ID());

                        if ($product) {
                            // Displaying gallery images
                            echo '<div class="gallery-images">';
                            $attachment_ids = $product->get_gallery_image_ids();

                            if ($attachment_ids && !empty($attachment_ids)) {
                                foreach ($attachment_ids as $attachment_id) {
                                    echo '<div class="gallery-image">';
                                    echo wp_get_attachment_image($attachment_id, 'thumbnail', false, array('class' => 'gallery-thumbnail', 'data-large-image' => wp_get_attachment_url($attachment_id)));
                                    echo '</div>';
                                }
                            }
                            echo '</div>';

                            // Main product image
                            echo '<div class="main-product-image">';
                            echo wp_get_attachment_image($product->get_image_id(), 'large', false, array('id' => 'main-image', 'class' => 'zoom', 'data-zoom-image' => wp_get_attachment_url($product->get_image_id())));
                            echo '</div>';
                        } else {
                            echo '<p>No product found or invalid product.</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-details">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                $product = wc_get_product(get_the_ID()); // Fetch the product object

                                if (is_a($product, 'WC_Product')) :
                        ?>
                                    <h1 class="product-title pb-2"><?php echo $product->get_name(); ?></h1>
                                    <p><strong>SKU:</strong> <?php echo $product->get_sku(); ?></p>

                                    <?php
                                    // Display product attributes if they exist
                                    $attributes = $product->get_attributes();

                                    if ($attributes) {
                                        foreach ($attributes as $attribute) {
                                            $attribute_name = $attribute->get_name();
                                            $attribute_label = wc_attribute_label($attribute_name);
                                            $attribute_terms = $attribute->get_terms();

                                            if ($attribute_terms) {
                                                $options = array_map(function ($term) {
                                                    return $term->name;
                                                }, $attribute_terms);

                                                $options_html = implode(', ', $options);
                                                echo '<p><strong>' . esc_html($attribute_label) . ':</strong> ' . wp_kses_post($options_html) . '</p>';
                                            }
                                        }
                                    }


                                    ?>

                                    <div class="quantity pb-3">
                                        <label for="quantity">Quantity:</label>
                                    </div>

                                    <div class="add-products w-100">
                                        <?php
                                        woocommerce_template_single_add_to_cart();
                                        ?>
                                    </div>
                    </div>
                </div>
                <?php
                                    // Display product description with read more functionality
                                    $description = $product->get_description();
                                    if (!empty($description)) {
                                        // Truncate description to 100 words
                                        $trimmed_description = wp_trim_words($description, 100, '...');

                                        echo '<div class="pt-5 pb-3 px-3 product-description">';
                                        echo '<h2>About this item</h2>';
                                        echo '<hr>';
                                        echo '<p class="truncated-description">' . wp_kses_post($trimmed_description) . '<a href="#" class="read-more-link">Read More</a></p>';
                                        echo '<p class="full-description d-none">' . wp_kses_post($description) . '</p>';
                                        echo '</div>';
                                    }
                ?>

            <?php endif; ?>
    <?php } // end while
                        } // end if 
    ?>
            </div>

            <div class="row pb-5">
                <div class="col-md-12">
                    <div class="related-products">
                        <h2>Related Products</h2>
                        <div class="product-grid">
                            <?php
                            global $post;

                            // Get related products
                            $related_products = wc_get_related_products($post->ID, 4); // Adjust number of related products here
                            if (!empty($related_products)) {
                                foreach ($related_products as $related_product_id) {
                                    $related_product = wc_get_product($related_product_id);
                                    if (is_a($related_product, 'WC_Product')) {
                            ?>
                                        <div class="product-item">
                                            <div class="product-inner">
                                                <div class="product-thumbnail">
                                                    <div class="thumbnail-border product-info pb-3">
                                                        <div class="img link quick-view-btn px-4" data-toggle="modal" data-target="#productModal<?php echo $product->get_id(); ?>" data-product-id="<?php echo $product->get_id(); ?>">
                                                            <?php echo $related_product->get_image(); ?>
                                                        </div>
                                                        <h5 class="mobile-text"><a href=" <?php echo esc_url(get_permalink($related_product_id)); ?>"><?php echo esc_html($related_product->get_name()); ?></a></h5>
                                                    </div>
                                                </div>
                                                <div class="add-products-button w-100 px-1 pb-2">
                                                    <?php
                                                    woocommerce_template_single_add_to_cart();
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
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
                                    }
                                }
                            } else {
                                echo '<p>No related products found</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<script>
    (function($) {
        $(document).ready(function() {
            $('.read-more-link').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                var $truncatedDescription = $this.closest('.product-description').find('.truncated-description');
                var $fullDescription = $this.closest('.product-description').find('.full-description');

                if ($fullDescription.hasClass('d-none')) {
                    $truncatedDescription.addClass('d-none');
                    $fullDescription.removeClass('d-none');
                    $this.text('Read Less');
                } else {
                    $truncatedDescription.removeClass('d-none');
                    $fullDescription.addClass('d-none');
                    $this.text('Read More');
                }
            });
        });
    })(jQuery);
    jQuery(document).ready(function($) {
        $('.quick-view-btn').on('click', function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            $('#productModal' + productId).modal('show');
        });
    });
</script>

<?php
get_footer();
?>