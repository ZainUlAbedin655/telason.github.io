
$(document).ready(function () {
	if($('#product-details .product-out-of-stock').siblings().length == 0){
		$('.tabs li a[aria-controls="product-details"]').css('display','none');
		$('.tabs li a[aria-controls="product-details"]').parent().siblings().first().children("a").addClass("active");
	}

	// $('.js-product-images-modal').removeClass("in").removeAttr("aria-hidden");
	// $(".modal-backdrop").remove();
	// if($(".modal-dialog .js-modal-thumb").width()){
	// 	$(".close-slider").css("max-width",$(".modal-dialog .js-modal-thumb").width());
	// }
	
	// function productzoomslider () {
	// 	$('#owl-carousel-slider').each(function(i, val) {
	// 		var anhbhl_id = '#'+$(this).attr('id');
	// 		$(anhbhl_id).owlCarouselAnTB({
	// 			items: 1,
	// 			loop: true,
	// 			nav: true,
	// 			autoplay: false,
	// 			navText: ['<i class="material-icons">&#xE5C5;</i>','<i class="material-icons">&#xE5C5;</i>'],
	// 		});
	// 	});	
	// 	$('.modal-dialog').on("click",function(h){
	// 		var target = $(h.target);
	// 		if(target.closest("img").length != 0 || target.closest(".owl-nav i").length != 0){
	// 				return;
	// 		}
	// 		else{
	// 			$('.js-product-images-modal').add(".modal-backdrop").fadeOut("fast");
	// 			$('.js-product-images-modal').removeClass("in").attr("aria-hidden","true");
	// 			$('body').removeClass("modal-open");
	// 			$('#product').removeAttr("style");
	// 		}
	// 	});
	// }

	// productzoomslider();

	//  $(document).ajaxSuccess(function() {
	//     productzoomslider();
	//  });
});
