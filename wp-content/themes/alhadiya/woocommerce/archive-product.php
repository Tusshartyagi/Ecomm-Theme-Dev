<?php

defined('ABSPATH') || exit;

get_header('shop');

$queried_object = get_queried_object();
$category_slug = '';
if (isset($queried_object->slug)) {
    $category_slug = sanitize_title($queried_object->slug);
}
?>
<style>
    /* Style for the dropdown button */
    #product_name{
        padding:12px;
        border-radius: 10px;
    }
    .dropbtn {
        background-color: transparent;
        color: black;
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        width: 100%;
        text-align: left;
    }

    .dropbtn:hover {
        background-color: transparent;
        color: black;
    }

    /* Style the dropdown container */
    .dropdown {
        position: relative;
        display: inline-block;
        width: 100%;
        border: 1px solid #d9d9d9;
        border-radius: 10px;
        margin-top: 10px;
    }

    /* Style the dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f6f6f6;
        min-width: 100%;
        border: 1px solid #ddd;
        z-index: 1;
        max-height: 200px; /* Adjust height as needed */
        overflow-y: auto; /* Enable scroll if content exceeds max-height */
    }

    /* Style the search input inside the dropdown */
    #category_search, #brand_search {
        box-sizing: border-box;
        background-color: #fff;
        border: none;
        padding: 12px;
        width: 100%;
        font-size: 16px;
        border-bottom: 1px solid #ddd;
    }

    /* Style the dropdown items */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Style the dropdown items on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown content */
    .show {
        display: block;
    }
</style>
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
        <div class="col-lg-3">
        <form id="filter-form" method="get" class="mb-4">
    <div class="mb-3">
        <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Search by Product Name" value="<?php echo isset($_GET['product_name']) ? esc_attr($_GET['product_name']) : ''; ?>">
    </div>

    <div class="mb-3">
        <label><strong>Categories</strong></label>
        <div class="dropdown">
            <button type="button" onclick="toggleDropdown('category')" class="dropbtn">Select Category</button>
            <div id="categoryDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="category_search" onkeyup="filterFunction('category')">
                <?php
                $categories = get_terms('product_cat');
                if (!empty($categories) && !is_wp_error($categories)) {
                    foreach ($categories as $category) {
                        echo '<a href="#" data-value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a>';
                    }
                }
                ?>
            </div>
        </div>
        <input type="hidden" name="product_cat" id="product_cat_value" value="<?php echo isset($_GET['product_cat']) ? esc_attr($_GET['product_cat']) : ''; ?>">
    </div>

    <div class="mb-3">
        <label><strong>Brands</strong></label>
        <div class="dropdown">
            <button type="button" onclick="toggleDropdown('brand')" class="dropbtn">Select Brand</button>
            <div id="brandDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="brand_search" onkeyup="filterFunction('brand')">
                <?php
                $brands = get_terms('pa_brand'); // Assuming 'pa_brand' is the taxonomy for brands
                if (!empty($brands) && !is_wp_error($brands)) {
                    foreach ($brands as $brand) {
                        echo '<a href="#" data-value="' . esc_attr($brand->slug) . '">' . esc_html($brand->name) . '</a>';
                    }
                }
                ?>
            </div>
        </div>
        <input type="hidden" name="product_brand" id="product_brand_value" value="<?php echo isset($_GET['product_brand']) ? esc_attr($_GET['product_brand']) : ''; ?>">
    </div>

    <div>
        <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
    </div>
</form>

        </div>

        <div class="col-lg-9">
            <div class="products-grid">
                <div class="row">
                    <?php
                    // Initialize $args variable
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 9, // Number of products per page
                        'paged'          => max(1, get_query_var('paged')),
                    );

                    // Handle product name search
                    if (!empty($_GET['product_name'])) {
                        $args['s'] = sanitize_text_field($_GET['product_name']);
                    }

                    // Initialize tax query array
                    $tax_query = array();

                    // Handle product category filter
                    if (!empty($_GET['product_cat'])) {
                        $product_cats = array(sanitize_text_field($_GET['product_cat']));

                        $tax_query[] = array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => $product_cats,
                            'operator' => 'IN',
                        );
                    }

                    // Handle product brand filter
                    if (!empty($_GET['product_brand'])) {
                        $brand_slugs = array(sanitize_text_field($_GET['product_brand']));
                        $tax_query[] = array(
                            'taxonomy' => 'pa_brand',
                            'field'    => 'slug',
                            'terms'    => $brand_slugs,
                            'operator' => 'IN',
                        );
                    }

                    // If we are on a category archive page, add the category filter to the query
                    if ($category_slug) {
                        $tax_query[] = array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => $category_slug,
                        );
                    }

                    // Add tax query to main query args if it is not empty
                    if (!empty($tax_query)) {
                        $args['tax_query'] = $tax_query;
                    }

                    // Run WP_Query with the arguments
                    $products_query = new WP_Query($args);

                    // Check if there are any products found
                    if ($products_query->have_posts()) :
                        // Loop through the products
                        while ($products_query->have_posts()) :
                            $products_query->the_post();
                            global $product;
                            wc_get_template_part('content', 'product');
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
</div>

<script>
    function toggleDropdown(type) {
        const dropdownId = type === 'category' ? 'categoryDropdown' : 'brandDropdown';
        document.getElementById(dropdownId).classList.toggle("show");
    }

    function filterFunction(type) {
        const inputId = type === 'category' ? 'category_search' : 'brand_search';
        const dropdownId = type === 'category' ? 'categoryDropdown' : 'brandDropdown';
        const input = document.getElementById(inputId);
        const filter = input.value.toUpperCase();
        const dropdown = document.getElementById(dropdownId);
        const items = dropdown.getElementsByTagName("a");
        for (let i = 0; i < items.length; i++) {
            const text = items[i].textContent || items[i].innerText;
            if (text.toUpperCase().indexOf(filter) > -1) {
                items[i].style.display = "";
            } else {
                items[i].style.display = "none";
            }
        }
    }

    function updateButtonText() {
        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get('product_cat');
        const brand = urlParams.get('product_brand');

        if (category) {
            const categoryBtn = document.querySelector('button[onclick="toggleDropdown(\'category\')"]');
            const categoryName = document.querySelector(`#categoryDropdown a[data-value="${category}"]`);
            if (categoryBtn && categoryName) {
                categoryBtn.innerText = categoryName.textContent || categoryName.innerText;
            }
        } else {
            const categoryBtn = document.querySelector('button[onclick="toggleDropdown(\'category\')"]');
            categoryBtn.innerText = 'Select Category';
        }

        if (brand) {
            const brandBtn = document.querySelector('button[onclick="toggleDropdown(\'brand\')"]');
            const brandName = document.querySelector(`#brandDropdown a[data-value="${brand}"]`);
            if (brandBtn && brandName) {
                brandBtn.innerText = brandName.textContent || brandName.innerText;
            }
        } else {
            const brandBtn = document.querySelector('button[onclick="toggleDropdown(\'brand\')"]');
            brandBtn.innerText = 'Select Brand';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        updateButtonText();

        document.querySelectorAll('#categoryDropdown a, #brandDropdown a').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const selectedValue = this.getAttribute('data-value');
                const selectedText = this.textContent || this.innerText;

                if (this.closest('#categoryDropdown')) {
                    document.getElementById('product_cat_value').value = selectedValue;
                    document.querySelector('button[onclick="toggleDropdown(\'category\')"]').innerText = selectedText;
                } else {
                    document.getElementById('product_brand_value').value = selectedValue;
                    document.querySelector('button[onclick="toggleDropdown(\'brand\')"]').innerText = selectedText;
                }

                document.getElementById('filter-form').submit();
            });
        });

        // Close the dropdown if clicked outside
        window.addEventListener('click', function(event) {
            const categoryDropdown = document.getElementById("categoryDropdown");
            const brandDropdown = document.getElementById("brandDropdown");
            if (!event.target.matches('.dropbtn') && !categoryDropdown.contains(event.target) && !brandDropdown.contains(event.target)) {
                const dropdowns = document.getElementsByClassName("dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        });
    });
</script>


<?php
get_footer('shop');
?>
