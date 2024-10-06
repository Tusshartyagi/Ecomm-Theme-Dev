jQuery(document).ready(function($) {
    $('.quick-view-btn').on('click', function(e) {
      e.preventDefault();
      var productId = $(this).data('product-id');
      $('#productModal' + productId).modal('show');
    });
  });