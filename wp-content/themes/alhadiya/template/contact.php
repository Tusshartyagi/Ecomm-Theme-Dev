<?php

/**
 * Template Name: Contact Page Template
 *
 * Template for displaying products in a grid layout with quantity and mini-cart update.
 *
 * @package YourTheme
 */

get_header(); // Include header.php
?>
<div class="section-area container py-5 mt-5 px-5">
    <div class="row px-0">
        <div class="col-lg-7 col-12 px-3">
            <h3 class="text-align-center py-5">Ways to Reach us</h3>
            <div class="row pb-lg-4">
                <div class="col-lg-4 col-12">
                    <h6 class="pb-1"><?php echo esc_html(get_field('title')); ?></h6>
                    <p class="mb-1"><?php echo esc_html(get_field('description_1')); ?></p>
                    <p><?php echo esc_html(get_field('description_2')); ?></p>
                </div>
                <div class="col-lg-4 col-12 px-lg-0">
                    <h6 class="pb-1"><?php echo esc_html(get_field('title_1')); ?></h6>
                    <p><?php echo esc_html(get_field('description_4')); ?></p>
                </div>
                <div class="col-lg-4 col-12 px-lg-0">
                    <h6 class="pb-1"><?php echo esc_html(get_field('title_2')); ?></h6>
                    <p><?php echo esc_html(get_field('description_5')); ?><br>
                        <?php echo esc_html(get_field('description_6')); ?></br>
                        <?php echo esc_html(get_field('description_7')); ?>
                    </p>
                </div>
            </div>
            <hr style="border: 2px solid white; color:white ; opacity:1">
            <div class="section-area container px-0 pb-4 px-lg-5 pt-5">
                <div class="row">
                    <h3 class="text-align-center pb-5"><?php echo esc_html(get_field('location')); ?></h3>
                    <div class="col-lg-6 px-lg-5">
                        <h6 class="pb-3"><?php echo esc_html(get_field('warehouse_title')); ?></h6>
                        <p><?php echo esc_html(get_field('warehouse_description')); ?><br>
                            <?php echo esc_html(get_field('warehouse_description_1')); ?><br>
                            <?php echo esc_html(get_field('warehouse_description_2')); ?><br>
                            <?php echo esc_html(get_field('warehouse_description_3')); ?></p>
                    </div>
                    <div class="col-lg-6 px-lg-5">
                        <h6 class="pb-3"><?php echo esc_html(get_field('warehouse_title_1')); ?></h6>
                        <p><?php echo esc_html(get_field('warehouse_description_4')); ?><br>
                            <?php echo esc_html(get_field('warehouse_description_5')); ?><br>
                            <?php echo esc_html(get_field('warehouse_description_6')); ?><br>
                            <?php echo esc_html(get_field('warehouse_description_7')); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form col-lg-5 col-12 px-4">
            <?php
            echo do_shortcode(
                '[contact-form-7 id="1830c11" title="Contact form 1"]'
            );
            ?>
        </div>
    </div>

</div>
<div class="container py-5 mb-5">
    <div class="row">
        <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.1268917227194!2d54.5098288!3d24.376888800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e412872791803%3A0x2fef507d40962465!2sAl%20Hadiyya%20Mechanical%20Equipment%20Trading!5e0!3m2!1sen!2sin!4v1720615764416!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<?php
get_footer(); // Include footer.php
?>