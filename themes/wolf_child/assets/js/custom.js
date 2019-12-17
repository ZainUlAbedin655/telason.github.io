// Template Start
$(document).ready(function() {
    bindGrid();
  
    // ---------------- home page blog slider setting ----------------------
    var psblog = $("#blog-carousel");
    if(typeof psblog.owlCarousel != 'undefined'){
        psblog.owlCarousel({
            items: 3, //10 items above 1000px browser width
            itemsDesktop: [1299, 3],
            itemsDesktopSmall: [991, 2],
            itemsTablet: [479, 1],
            itemsMobile: [319, 1],
            pagination: false
        });
    }
    // Custom Navigation Events
    $(".blog_next").click(function() {
        psblog.trigger('owl.next');
    })
    $(".blog_prev").click(function() {
        psblog.trigger('owl.prev');
    });
    // ---------------- start more menu setting ----------------------
    if (jQuery(window).width() >= 1300) {
        var max_elem = 6;
        var items = $('.menu ul#top-menu > li');
        var surplus = items.slice(max_elem, items.length);
        surplus.wrapAll('<li class="category more_menu" id="more_menu"><div id="top_moremenu" class="popover sub-menu js-sub-menu collapse"><ul class="top-menu more_sub_menu">');
        $('.menu ul#top-menu .more_menu').prepend('<a href="#" class="dropdown-item" data-depth="0"><span class="float-xs-right hidden-md-up"><span data-target="#top_moremenu" data-toggle="collapse" class="navbar-toggler collapse-icons"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></span></span>More</a>');
        $('.menu ul#top-menu .more_menu').mouseover(function() {
                $(this).children('div').css('display', 'block');
            })
            .mouseout(function() {
                $(this).children('div').css('display', 'none');
            });
    } else if ((jQuery(window).width() >= 992) && (jQuery(window).width() <= 1299)) {
        var max_elem = 5;
        var items = $('.menu ul#top-menu > li');
        var surplus = items.slice(max_elem, items.length);
        surplus.wrapAll('<li class="category more_menu" id="more_menu"><div id="top_moremenu" class="popover sub-menu js-sub-menu collapse"><ul class="top-menu more_sub_menu">');
        $('.menu ul#top-menu .more_menu').prepend('<a href="#" class="dropdown-item" data-depth="0"><span class="float-xs-right hidden-md-up"><span data-target="#top_moremenu" data-toggle="collapse" class="navbar-toggler collapse-icons"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></span></span>More</a>');
        $('.menu ul#top-menu .more_menu').mouseover(function() {
                $(this).children('div').css('display', 'block');
            })
            .mouseout(function() {
                $(this).children('div').css('display', 'none');
            });
    }
    // ---------------- end more menu setting ----------------------
    /* ---------------- start more menu setting ---------------------- */
    var max_elem = 10;
    var items = $('.header-top .vertical-menu ul#top-vertical-menu[data-depth="0"] > li');
    var surplus = items.slice(max_elem, items.length);
    surplus.wrapAll('<li class="category more_menu" id="more_menu"><div id="top_moremenu" class="popover sub-menu js-sub-menu collapse"><ul class="top-menu more_sub_menu">');
    $('.header-top .vertical-menu ul#top-vertical-menu .more_menu').prepend('<a href="#" class="dropdown-item" data-depth="0"><span class="float-xs-right hidden-md-up"><span data-target="#top_moremenu" data-toggle="collapse" class="navbar-toggler collapse-icons"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></span></span>More Menu</a>');
    $('.header-top .vertical-menu ul#top-vertical-menu .more_menu').mouseover(function() {
            $(this).children('div').css('display', 'block');
        })
        .mouseout(function() {
            $(this).children('div').css('display', 'none');
        });
    /* ---------------- end more menu setting ----------------------	*/
});
$(".products-section-title").wrap("<div class='title-wrapper'></div>");
$(".all-product-link").wrap("<div class='product-more'></div>");
$('.search_button').click(function(event) {
    $(this).toggleClass('active');
    event.stopPropagation();
    $(".searchtoggle").slideToggle("fast");
    $(".ui-autocomplete-input").focus();
});
$('.header-top .vertical-menu .top-vertical-menu').css('display', 'none');
$('.header-top .vertical-menu .block-title').click(function(event) {
    $('.header-top .vertical-menu .top-vertical-menu').toggleClass('active');
    event.stopPropagation();
    $('.header-top .vertical-menu .top-vertical-menu').slideToggle("medium");
});
$(".searchtoggle").on("click", function(event) {
    event.stopPropagation();
});
$('.pst_userinfotitle').click(function(event) {
    $(this).toggleClass('active');
    event.stopPropagation();
    $(".user-info").slideToggle("fast");
});
$(".user-info").on("click", function(event) {
    event.stopPropagation();
});
// Add/Remove acttive class on menu active in responsive  
$('#menu-icon').on('click', function() {
    $(this).toggleClass('active');
});
// Loading image before flex slider load
$(window).load(function() {
    $(".loadingdiv").removeClass("spinner");
});
// Flex slider load
$(window).load(function() {
    if ($('.flexslider').length > 0) {
        $('.flexslider').flexslider({
            slideshowSpeed: $('.flexslider').data('interval'),
            pauseOnHover: $('.flexslider').data('pause'),
            animation: "fade"
        });
    }
});
// Scroll page bottom to top
$(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
        $('.top_button').fadeIn(500);
    } else {
        $('.top_button').fadeOut(500);
    }
});
$('.top_button').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 800);
});
/*======  Carousel Slider For Feature Product ==== */
var pstfeature = $("#pstfeature-carousel");
if(typeof pstfeature.owlCarousel != 'undefined'){
    pstfeature.owlCarousel({
        items: 4, //10 items above 1000px browser width	
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false,
        autoplay: true
    });
}
// Custom Navigation Events
$(".pstfeature_next").click(function() {
    pstfeature.trigger('owl.next');
})
$(".pstfeature_prev").click(function() {
    pstfeature.trigger('owl.prev');
});
/*======  Carousel Slider For New Product ==== */
var pstnewproduct = $("#pstnewproduct-carousel");
if(typeof pstnewproduct.owlCarousel != 'undefined'){
    pstnewproduct.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false
    });
}
// Custom Navigation Events
$(".pstnewproduct_next").click(function() {
    pstnewproduct.trigger('owl.next');
})
$(".pstnewproduct_prev").click(function() {
    pstnewproduct.trigger('owl.prev');
});
/*======  Carousel Slider For Bestseller Product ==== */
var pstbestseller = $("#pstbestseller-carousel");
if(typeof pstbestseller.owlCarousel != 'undefined'){
    pstbestseller.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false
    });
}
// Custom Navigation Events
$(".pstbestseller_next").click(function() {
    pstbestseller.trigger('owl.next');
})
$(".pstbestseller_prev").click(function() {
    pstbestseller.trigger('owl.prev');
});
/*======  Carousel Slider For Special Product ==== */
var pstspecial = $("#pstspecial-carousel");
if(typeof pstspecial.owlCarousel != 'undefined'){
    pstspecial.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false
    });
}
// Custom Navigation Events
$(".pstspecial_next").click(function() {
    pstspecial.trigger('owl.next');
})
$(".pstspecial_prev").click(function() {
    pstspecial.trigger('owl.prev');
});
/*======  Carousel Slider For Accessories Product ==== */
var pstaccessories = $("#pstaccessories-carousel");
if(typeof pstaccessories.owlCarousel != 'undefined'){
    pstaccessories.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false
    });
}
// Custom Navigation Events
$(".pstaccessories_next").click(function() {
    pstaccessories.trigger('owl.next');
})
$(".pstaccessories_prev").click(function() {
    pstaccessories.trigger('owl.prev');
});
/*======  Carousel Slider For Category Product ==== */
var pstproductscategory = $("#pstproductscategory-carousel");
if(typeof pstproductscategory.owlCarousel != 'undefined'){
    pstproductscategory.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false
    });
}
// Custom Navigation Events
$(".pstproductscategory_next").click(function() {
    pstproductscategory.trigger('owl.next');
})
$(".pstproductscategory_prev").click(function() {
    pstproductscategory.trigger('owl.prev');
});
/*======  Carousel Slider For Viewed Product ==== */
var pstviewed = $("#pstviewed-carousel");
if(typeof pstviewed.owlCarousel != 'undefined'){
    pstviewed.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false
    });
}
// Custom Navigation Events
$(".pstviewed_next").click(function() {
    pstviewed.trigger('owl.next');
})
$(".pstviewed_prev").click(function() {
    pstviewed.trigger('owl.prev');
});
/*======  Carousel Slider For Crosssell Product ==== */
var pstcrosssell = $("#pstcrosssell-carousel");
if(typeof pstcrosssell.owlCarousel != 'undefined'){
    pstcrosssell.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false
    });
}
// Custom Navigation Events
$(".pstcrosssell_next").click(function() {
    pstcrosssell.trigger('owl.next');
})
$(".pstcrosssell_prev").click(function() {
    pstcrosssell.trigger('owl.prev');
});
/*======  Carousel Slider For Manufacture ==== */
var pstbrand = $("#pstbrand-carousel");
if(typeof pstbrand.owlCarousel != 'undefined'){
    pstbrand.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1299, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
        pagination: false
    });
}
// Custom Navigation Events
$(".pstbrand_next").click(function() {
    pstbrand.trigger('owl.next');
})
$(".pstbrand_prev").click(function() {
    pstbrand.trigger('owl.prev');
});
var psttestimonial = $("#psttestimonial-carousel");
if(typeof psttestimonial.owlCarousel != 'undefined'){
    psttestimonial.owlCarousel({
        autoPlay: true,
        singleItem: true,
        pagination: true,
        navigation: false
    });
}
function bindGrid() {
    var view = 'list';
    if(typeof $.totalStorage != 'undefined'){
        view = $.totalStorage("display");
    }
    if (view && view == 'grid')
        display(view);
    else
        $('.display').find('li#grid').addClass('selected');
    $(document).on('click', '#grid', function(e) {
        e.preventDefault();
        display('grid');
    });
    $(document).on('click', '#list', function(e) {
        e.preventDefault();
        display('list');
    });
}
function display(view) {
    if (view == 'list') {
        $('#products ul.product_list').removeClass('grid').addClass('list');
        $('#products .product_list > li').removeClass('col-xs-12 col-sm-6 col-md-6 col-lg-4').addClass('col-xs-12');
        $('#products .product_list > li').each(function(index, element) {
            var html = '';
            html = '<div class="product-miniature js-product-miniature" data-id-product="' + $(element).find('.product-miniature').data('id-product') + '" data-id-product-attribute="' + $(element).find('.product-miniature').data('id-product-attribute') + '" itemscope itemtype="http://schema.org/Product"><div class="row">';
            html += '<div class="thumbnail-container col-xs-4 col-xs-5 col-md-4">' + $(element).find('.thumbnail-container').html() + '</div>';
            html += '<div class="product-description center-block col-xs-4 col-xs-7 col-md-8">';
            html += '<h3 class="h3 product-title" itemprop="name">' + $(element).find('h3').html() + '</h3>';
            var price = $(element).find('.product-price-and-shipping').html(); // check : catalog mode is enabled
            if (price != null) {
                html += '<div class="product-price-and-shipping">' + price + '</div>';
            }
            html += '<div class="product-detail">' + $(element).find('.product-detail').html() + '</div>';
            var colorList = $(element).find('.highlighted-informations').html();
            if (colorList != null) {
                html += '<div class="highlighted-informations">' + colorList + '</div>';
            }
            html += '</div>';
            html += '</div></div>';
            $(element).html(html);
        });
        $('.display').find('li#list').addClass('selected');
        $('.display').find('li#grid').removeAttr('class');
        if(typeof $.totalStorage != 'undefined'){
            $.totalStorage('display', 'list');
        }
    } else {
        $('#products ul.product_list').removeClass('list').addClass('grid');
        $('#products .product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-md-6 col-lg-4');
        $('#products .product_list > li').each(function(index, element) {
            var html = '';
            html += '<div class="product-miniature js-product-miniature" data-id-product="' + $(element).find('.product-miniature').data('id-product') + '" data-id-product-attribute="' + $(element).find('.product-miniature').data('id-product-attribute') + '" itemscope itemtype="http://schema.org/Product">';
            html += '<div class="thumbnail-container">' + $(element).find('.thumbnail-container').html() + '</div>';
            html += '<div class="product-description">';
            html += '<h3 class="h3 product-title" itemprop="name">' + $(element).find('h3').html() + '</h3>';
            var price = $(element).find('.product-price-and-shipping').html(); // check : catalog mode is enabled
            if (price != null) {
                html += '<div class="product-price-and-shipping">' + price + '</div>';
            }
            html += '<div class="product-detail">' + $(element).find('.product-detail').html() + '</div>';
            var colorList = $(element).find('.highlighted-informations').html();
            if (colorList != null) {
                html += '<div class="highlighted-informations">' + colorList + '</div>';
            }
            html += '</div>';
            html += '</div>';
            $(element).html(html);
        });
        $('.display').find('li#grid').addClass('selected');
        $('.display').find('li#list').removeAttr('class');
        if(typeof $.totalStorage != 'undefined'){
            $.totalStorage('display', 'grid');
        }
    }
}
function responsivecolumn() {
    if ($(document).width() <= 991) {
        // ---------------- Fixed header responsive ----------------------
        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > 0) {
                $('.header-nav').addClass('fixed');
            } else {
                $('.header-nav').removeClass('fixed');
            }
        });
    }
    if ($(document).width() <= 991) {
        $('.container #columns_inner #left-column').appendTo('.container #columns_inner');
    } else if ($(document).width() >= 992) {
        $('.container #columns_inner #left-column').prependTo('.container #columns_inner');
    }
}
$(document).ready(function() {
    responsivecolumn();
});
$(window).resize(function() {
    responsivecolumn();
});
// JS for fixed the header
function HeadFixTop() {
    var num = 141;
    if ($(document).width() >= 992) {
        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > num) {
                $('.nav-bar').addClass('fixed');
            } else {
                $('.nav-bar').removeClass('fixed');
            }
        });
    } else {
        $('.nav-bar').removeClass('fixed');
    }
}
$(document).ready(function() {
    "use strict";
    HeadFixTop();
    $("#top-menu .sub-menu li:has(ul)").parent().parent().parent().addClass("mega");
    $("#top-vertical-menu li:has(ul)").parent().parent().addClass("mega");
});
$(window).resize(function() {
    "use strict";
    HeadFixTop()
});
$(document).on('mouseover', '.sub-menu ul[data-depth="3"] >li > a', function(e){
     
    $(this).parents('.sub-menu ul[data-depth="3"]').find('a').removeClass('active');
    $(this).addClass('active');
    console.log();
});
// ---------------- inview animation js ----------------------
$(document).ready(function () {
	if ($('body').is('#index')) {
		jQuery(window).scroll(function () {
			hb_animated_contents();
		});
		jQuery(window).load(function () {
			hb_animated_contents();
		});
		function hb_animated_contents() {
			jQuery(".hb-animate-element:in-viewport").each(function (i) {
				var $this = jQuery(this);
				if (!$this.hasClass('hb-in-viewport')) {
					setTimeout(function () {
						$this.addClass('hb-in-viewport');
					}, 150 * i);
				}
			});
		}
	} else {}
});



/* main menu link changed MATERIALS AND FINISH CODES and CONNECTOR CODE  */
$(document).ready(function () {
    $("#category-34 .dropdown-item").prop('href','https://www.telason.com/img/c/34-0_thumb.jpg');
    $("#category-30 .dropdown-item").prop('href','https://www.telason.com/img/c/30-0_thumb.jpg');
});