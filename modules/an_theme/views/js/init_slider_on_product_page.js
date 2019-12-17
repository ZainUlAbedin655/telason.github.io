
$(document).ready(function(){
  $('#js-product-block-slider-product-page').add(".featured-products.mt-3 .products").each(function(i, val) {
    $(this).addClass("owl-carousel");
     var anhproductSlider_id;
    if(!$(this).attr('id')){
      anhproductSlider_id = $(this);
    }
    else{
      anhproductSlider_id = '#' + $(this).attr('id');
    }
    $(anhproductSlider_id).owlCarouselAnTB({
      loop: false,
      nav: true,
      dots: true,
      navText: ['<i class="material-icons">&#xE314;</i>','<i class="material-icons">&#xE315;</i>'],
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        600: {
          items: 2
        },
        850: {
          items: 3
        },
        1200: {
          items: 4
        }
      }
    });
  });
});
