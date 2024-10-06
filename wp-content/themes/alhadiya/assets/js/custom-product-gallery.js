jQuery(document).ready(function($) {
    // Function to initialize zoom
    function initializeZoom() {
        var windowWidth = $(window).width();
        if (windowWidth > 768) { // Assuming 768px as the breakpoint for mobile devices
            $('#main-image').elevateZoom({
                zoomType: "lens",
                lensShape: "round",
                lensSize: 100,
                scrollZoom: true
            });
        }
    }

    // Initialize zoom on page load
    initializeZoom();

    // Reinitialize zoom on window resize
    $(window).resize(function() {
        $('.zoomContainer').remove();
        $('#main-image').removeData('elevateZoom');
        initializeZoom();
    });

    // Handle gallery image click
    $('.gallery-thumbnail').on('click', function() {
        var largeImageUrl = $(this).attr('data-large-image');
        var currentImageUrl = $('#main-image').attr('src');

        // Update main image source
        $('#main-image').attr('src', largeImageUrl);
        $('#main-image').data('zoom-image', largeImageUrl);

        // Reinitialize zoom if not on mobile
        if ($(window).width() > 768) {
            $('.zoomContainer').remove();
            $('#main-image').removeData('elevateZoom');
            $('#main-image').elevateZoom({
                zoomType: "lens",
                lensShape: "round",
                lensSize: 200,
                scrollZoom: true
            });
        }

        // Update the first gallery image to be the previous main image
        $('.gallery-thumbnail').first().attr('data-large-image', currentImageUrl);
        $('.gallery-thumbnail').first().find('img').attr('src', currentImageUrl);

        return false;
    });
});
