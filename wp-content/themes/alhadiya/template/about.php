<?php

/**
 * Template Name: About Page Template
 *
 * Template for displaying products in a grid layout with quantity and mini-cart update.
 *
 * @package YourTheme
 */

get_header(); // Include header.php
?>

<div class="container pt-5 mt-5 mb-3 pb-3">
    <div class="row">
        <div class="col-lg-4 col-12">
            <h1 class="lead pb-3"><?php echo esc_html(get_field('title')); ?></h1>
            <p class="pb-2"><?php echo esc_html(get_field('description')); ?></p>
            <p class="pb-2"><?php echo esc_html(get_field('description_1')); ?></p>
            <p class="pb-2"><?php echo esc_html(get_field('description_2')); ?></p>
        </div>
        <div class="col-lg-8 col-12 px-lg-5">
            <img src="<?php echo esc_url(get_field('image')); ?>" />
        </div>
    </div>
</div>
<div class="container py-3 w-lg-75 mx-auto">
    <div class="row">
        <div class="col-lg-3 col-6 p-2">
            <div class="counter">
                <img src="<?php echo esc_url(get_field('counter')['image']); ?>" class="px-5 py-2 mx-auto" />
                <h4 class="text-align-center py-1"><?php echo esc_html(get_field('counter')['title']); ?></h4>
                <p class="text-align-center"><?php echo esc_html(get_field('counter')['description']); ?></p>
            </div>
        </div>
        <div class="col-lg-3 col-6 p-2">
            <div class="counter actives">
                <img src="<?php echo esc_url(get_field('counter_1')['image']); ?>" class="px-5 py-2 mx-auto" />
                <h4 class="text-align-center py-1"><?php echo esc_html(get_field('counter_1')['title']); ?></h4>
                <p class="text-align-center"><?php echo esc_html(get_field('counter_1')['description']); ?></p>
            </div>
        </div>
        <div class="col-lg-3 col-6 p-2">
            <div class="counter">
                <img src="<?php echo esc_url(get_field('counter_2')['image']); ?>" class="px-5 py-2 mx-auto" />
                <h4 class="text-align-center py-1"><?php echo esc_html(get_field('counter_2')['title']); ?></h4>
                <p class="text-align-center"><?php echo esc_html(get_field('counter_2')['description']); ?></p>
            </div>
        </div>
        <div class="col-lg-3 col-6 p-2">
            <div class="counter">
                <img src="<?php echo esc_url(get_field('counter_3')['image']); ?>" class="px-5 py-2 mx-auto" />
                <h4 class="text-align-center py-1"><?php echo esc_html(get_field('counter_3')['title']); ?></h4>
                <p class="text-align-center"><?php echo esc_html(get_field('counter_3')['description']); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container px-lg-5 px-4 py-5">
    <div class="row management-area pb-5 pt-5" style="background-image: url('<?php echo esc_url(get_field('background')); ?>');">
        <div class="col-md-12">
            <div class="container" style="z-index: 1;position: relative;">
                <div class="row mobile-view" style="column-gap:20px; row-gap:50px;flex-wrap:nowrap">
                    <div class="col-lg-12 d-flex pb-3">
                        <div class="data mx-auto p-lg-5" style="color:white;">
                            <h2 class="text-align-center white pb-3"><?php echo esc_html(get_field('firm_title')); ?></h2>
                            <p class="text-align-center white w-lg-75 mx-auto"><?php echo esc_html(get_field('firm_description')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-3 px-5 w-75 mx-auto">
    <div class="row">
        <div class="col-lg-4 px-2">
            <div class="data">
                <img src="<?php echo esc_url(get_field('why_us')['image']); ?>" class="px-5 py-2 mx-auto" />
                <h4 class="text-align-center py-1"><?php echo esc_html(get_field('why_us')['title']); ?></h4>
                <p class="text-align-center"><?php echo esc_html(get_field('why_us')['description']); ?></p>
            </div>
        </div>
        <div class="col-lg-4 px-2">
            <div class="data">
                <img src="<?php echo esc_url(get_field('why_us_1')['image']); ?>" class="px-5 py-2 mx-auto" />
                <h4 class="text-align-center py-1"><?php echo esc_html(get_field('why_us_1')['title']); ?></h4>
                <p class="text-align-center"><?php echo esc_html(get_field('why_us_1')['description']); ?></p>
            </div>
        </div>
        <div class="col-lg-4 px-2">
            <div class="data">
                <img src="<?php echo esc_url(get_field('why_us_2')['image']); ?>" class="px-5 py-2 mx-auto" />
                <h4 class="text-align-center py-1"><?php echo esc_html(get_field('why_us_2')['title']); ?></h4>
                <p class="text-align-center"><?php echo esc_html(get_field('why_us_2')['description']); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container px-lg-5 px-4 py-5">
    <div class="row verify-area pb-5 pt-5">
        <div class="col-md-12">
            <div class="container" style="z-index: 1;position: relative;">
                <div class="row mobile-view" style="column-gap:20px; row-gap:50px;flex-wrap:nowrap">
                    <div class="col-lg-12 d-flex pb-3">
                        <div class="data w-100 mx-auto" style="color:white;">
                            <h2 class="text-align-center blue pb-3"><?php echo esc_html(get_field('verify_title')); ?></h2>
                            <div class="row py-3">
                                <div class="col-lg-4 p-lg-5 px-4 py-5">
                                    <div class="data">
                                        <img src="<?php echo esc_url(get_field('verify')['image']); ?>" class="px-5 pb-3 py-2 mx-auto" />
                                        <div class="text-align-center">
                                            <button class="text-align-center"><a href="<?php echo esc_url(get_field('verify')['file']); ?>"><?php echo esc_html(get_field('verify')['title']); ?></a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-5">
                                    <div class="data">
                                        <img src="<?php echo esc_url(get_field('verify_1')['image']); ?>" class="px-5 py-2 mx-auto" />
                                        <div class="text-align-center">
                                            <button class="text-align-center"><a href="<?php echo esc_url(get_field('verify_1')['file']); ?>"><?php echo esc_html(get_field('verify_1')['title']); ?></a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-5">
                                    <div class="data">
                                        <img src="<?php echo esc_url(get_field('verify_2')['image']); ?>" class="px-5 py-2 mx-auto" />
                                        <div class="text-align-center">
                                            <button class="text-align-center"><a href="<?php echo esc_url(get_field('verify_2')['file']); ?>"><?php echo esc_html(get_field('verify_2')['title']); ?></a></button>
                                        </div>
                                    </div>
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
get_footer(); // Include footer.php
?>