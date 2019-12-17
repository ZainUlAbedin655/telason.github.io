{**
  * 2007-2017 PrestaShop
  *
  * NOTICE OF LICENSE
  *
  * This source file is subject to the Academic Free License (AFL 3.0)
  * that is bundled with this package in the file LICENSE.txt.
  * It is also available through the world-wide-web at this URL:
  * http://opensource.org/licenses/afl-3.0.php
  * If you did not receive a copy of the license and are unable to
  * obtain it through the world-wide-web, please send an email
  * to license@prestashop.com so we can send you a copy immediately.
  *
  * DISCLAIMER
  *
  * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
  * versions in the future. If you wish to customize PrestaShop for your
  * needs please refer to http://www.prestashop.com for more information.
  *
  *  @author    Anvanto <anvantoco@gmail.com>
  *  @copyright 2016-2017 Anvanto
  *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
  *}
  
  
  html {
    font-size: {$global_basicfontsize};
  }
  body {
    font-size: {$global_basicfontsize};
    line-height: normal;
    background: {$global_bodyBackground};
    {$global_themeFont};
    font weight: 400;
  }
  
  body,
  p {
    color: {$global_basicfontcolor};
  }
  
  p {
    font-size: {$global_pfontsize};
    line-height: 22px;
  }
  
  h1,
  h2,
  h3,
  h4,
  h5,
  h6{
      line-height: normal;
  }
  .h1,
  .h2,
  .h3,
  .h4,
  h1,
  h2,
  h3,
  h4 {
    {$h1h6_themeFontH}
  }
  
  .h1,
  h1 {
    font-size: {$h1h6_h1FontSize};
    line-height: 46px;
  }
  .h2,
  h2 {
    font-size: {$h1h6_h2FontSize};
    line-height: 34px;
  }
  .h3,
  .h4,
  h3,
  h4 {
    font-size: {$h1h6_h3h4FontSize};
    line-height: 22px;
  }
  .h5,
  h5 {
    font-size: {$h1h6_h5FontSize};
    font weight: 400;
    line-height: 22px;
  }
  .h6,
  h6 {
    font-size: {$h1h6_h6FontSize};
    font weight: 400;
    line-height: 22px;
  }
  
  .h1,
  .h2,
  .h3 {
    color: {$h1h6_h1h5Color};
    font weight: 700;
  }
  
  {* color: #2fb5d2; color: #208094;  *}
  a,
  .text-primary,
  .pagination .current a
   {
    color: {$global_link};
  }
  
  a:focus,
  a:hover,
  .btn-link:focus,
  .btn-link:hover,
  .page-link:focus,
  .page-link:hover,
  a.text-primary:focus,
  a.text-primary:hover {
    color: {$global_linkHover};
  }
  
  a.bg-primary:focus,
  a.bg-primary:hover {
    background-color: {$global_linkHover}!important
  }
  .btn-primary {
    background-color: {$buttons_backgroundButton};
    color: {$buttons_colorButton};
    border-radius: {$buttons_ButtonBorderRadius};
  }
  {if $buttons_borderwidthButton != '0px'}
  .btn-primary{
    border: {$buttons_borderwidthButton} solid {$buttons_bordercolorButton}
  }
  .btn-primary:hover,
  .btn-primary:focus{
    border: {$buttons_borderwidthButton} solid {$buttons_colorHoverBorder}
  }
  {/if}
  .btn-primary.focus,
  .btn-primary:focus,
  .btn-primary:hover {
      background-color: {$buttons_backgroundHoverButton};
      color: {$buttons_colorButtonHover};
  }
  .tag-primary[href]:focus,
  .tag-primary[href]:hover {
      background-color: {$global_linkHover}
  }
  .quickview .modal-content{
    background: {$global_quickviewbackground};
  }
  .thumbnail-container,
  .thumbnail-container .product-description{
    background: {$product_backgroundMiniature};
  }
  #product .tabs{
    background: {$product_backgroundTabs};
  }
  
  {*   Header Link color    *}
  
  #header .header-nav a,
  #_desktop_language_selector .dropdown .expand-more,
  #_desktop_currency_selector .dropdown .expand-more {
    color: {$header_headerlink};
  }
  #header .anav-top a {
    color: {$topmenu_menuLinkColor};
  }
  #header .anav-top a:hover {
    color: {$topmenu_menuLinkColorHover};
  }
  #header a:hover,
  #header a:focus,
  #_desktop_language_selector:hover .expand-more,
  #_desktop_currency_selector:hover .expand-more {
    color: {$header_headerlinkHover};
  }
  
  {*   Footer Link color   *}
  
  .footer-container a,
  .block-contact{
    color: {$footer_footerlink};
  }
  .footer-container a:hover,
  .footer-container a:focus{
    color: {$footer_footerlinkHover};
  }
  .links h3.h3,
  #block_myaccount_infos h3 a,
  .links h4.block-contact-title,
  .links>h3 {
    color: {$footer_footertitels};
  }
  
  {*   Catalog    *}
  
  {if $categoryPage_backgroundleftcolumn != ''}
    .page-category #left-column{
      background: {$categoryPage_backgroundleftcolumn};
    }
  {/if}
  
  .page-category #left-column{
    padding: {$categoryPage_leftcolumnpadding}
  }
  
  {if $categorydescription_backgrounddescription != ''}
  .block-category{
     background: {$categorydescription_backgrounddescription};
  }
  {/if}
  .block-category{
     padding: {$categorydescription_paddingdescription};
  }
  
  {*   Shopping cart    *}
  
  {if $shoppingCart_backgroundsc != ''}
  .card.cart-container{
    background: {$shoppingCart_backgroundsc};
  }
  {/if}
  
  .card.cart-container{
    padding: {$shoppingCart_paddingsc};
  }
  
  {if $shoppingCart_backgroundsc2 != ''}
  .card.cart-summary,
  .card.js-cart{
    background: {$shoppingCart_backgroundsc2};
  }
  {/if}
  
  .card.cart-summary,
  .card.js-cart{
    padding: {$shoppingCart_paddingsc2};
  }
  
  {if $orderpage_backgroundorder != ''}
  .checkout-step{
    background: {$orderpage_backgroundorder};
  }
  {/if}
  
  .checkout-step{
    padding: {$orderpage_paddingorder};
  }
  .cart-preview .cart-title h4{
    font-size: {$shoppingCart_fontsizegsc};
  }
  .cart-preview .cart-title,
  .cart-preview .cart-bottom{
    background: {$shoppingCart_backgroundsc};
  }
  .sb-open .sb-menu-right{
    background: {$shoppingCart_backgroun2dsc};
  }
  {*   Other pages    *}
  
  {if $otherpage_background != ''}
  .page-customer-account #content-wrapper,
  .contact-form,
  .page-cms #content-wrapper,
  #contact #left-column{
    background: {$otherpage_background};
  }
  {/if}
  
  .page-customer-account #content-wrapper,
  .contact-form,
  .page-cms #content-wrapper,
  #contact #left-column{
    padding: {$otherpage_paddinginternalpage};
  }
  
  {*     Product     *}
  .hover_slider ul li::after{
      background: {$segmentedviewsettinds_linecolor};
  }
  .hover_slider:not(:hover) li:first-child::after,
  .hover_slider ul li:hover::after{
      background: {$segmentedviewsettinds_activelinecolor};
  }
  .hover_slider .more-images{
      color: {$segmentedviewsettinds_textcolorsh};
  }
  
  {***********************************
  
  Basic color
  
  #2fb5d2;
  
  ***********************************}
  .page-list .current a{
    background: {$global_basicColor} !important;
  }
  .pagination a:not(.previous):not(.next):hover {
    background: {$global_basicColor} !important;
  }
  .anthemeblocks-homeslider .owl-dots .owl-dot.active span,
  .anthemeblocks-homeslider .owl-dots .owl-dot:hover span {
    background: {$global_basicColor} !important;
  }
  
  .form-control:focus,
  .input-group.focus {
      outline: none;
  }
  
  .bootstrap-touchspin .group-span-filestyle .btn-touchspin,
  .group-span-filestyle .bootstrap-touchspin .btn-touchspin,
  .group-span-filestyle .btn-default {
    background:  {$global_basicColor};
  }
  
  .custom-radio input[type=radio]:checked+span { 
    background-color: {$global_basicColor};
  }
  body#checkout section.checkout-step .address-item.selected {
    border: 1px solid {$global_basicColor};
  }
  
  .products-sort-order .select-list:hover {
    background: {$global_basicColor};
  }
  
  .tabs .nav-tabs .nav-link.active {
      color: {$global_basicColor};
  }
  .tabs .nav-tabs .nav-link.active,
  .tabs .nav-tabs .nav-link:hover {
      border: none;
  }
  
  #product-modal .modal-content .modal-body .product-images img:hover {
    border: 3px solid {$global_basicColor};
  }
  
  .product-images>li.thumb-container>.thumb.selected,
  .product-images>li.thumb-container>.thumb:hover {
    border: 1px solid {$global_basicColor};
  }
  li.product-flag {
    background:  {$global_basicColor};
  }
  .product-flags .product-flag.online-only {
    background:  {$product_backgroundOnlineOnly};
    color: {$product_colorOnlineOnly}
  }
  .product-flags .product-flag.on-sale {
    background:  {$product_backgroundOnSale};
    color: {$product_colorOnSale}
  }
  .product-flags .product-flag.new,
  .product-flags .product-flag.pack{
    background:  {$product_backgroundNew};
    color: {$product_colorNew}
  }
  .product-flags .product-flag.discount-percentage,
  .product-discount .discount.discount-percentage,
  .modal-body .discount-percentage {
    background:  {$product_backgroundSale};
    color: {$product_colorSale}
  }
  .page-my-account #content .links a:hover i,
  #header .top-menu a[data-depth="0"]:hover,
  .search-widget form button[type=submit] .search:hover,
  #products .highlighted-informations .quick-view:hover,
  .featured-products .highlighted-informations .quick-view:hover,
  .product-accessories .highlighted-informations .quick-view:hover,
  .product-miniature .highlighted-informations .quick-view:hover,
  .block-categories .collapse-icons .add:hover,
  .block-categories .collapse-icons .remove:hover,
  .block-categories .arrows .arrow-down:hover,
  .block-categories .arrows .arrow-right:hover,
  .cart-grid-body a.label:hover,
  .product-price,
  #blockcart-modal .product-name {
    color: {$global_basicColor};
  }
  
  .block_newsletter form input[type=text]:focus {
    outline: none;
  }
  .block_newsletter form input[type=text]:focus+button .search {
    color: {$global_basicColor};
  }
  .block_newsletter form button[type=submit] .search:hover {
    color: {$global_basicColor};
  }
  .block_newsletter form input[type=text]:focus {
   border: none;
  }
  .account-list a:hover {
    color: {$global_basicColor};
  }
  .block-social li:hover,
  .social-sharing li:hover {
    background-color: {$global_basicColor};
  }
  
  #header .header-nav .blockcart a:hover {
    color: {$global_basicColor};
  }
  @media (max-width: 767px) {
    #header .header-nav .user-info .logged {
      color: {$global_basicColor};
    }
  }
  .btn-primary.disabled.focus,
  .btn-primary.disabled:focus,
  .btn-primary.disabled:hover,
  .btn-primary:disabled.focus,
  .btn-primary:disabled:focus,
  .btn-primary:disabled:hover {
      background-color: {$global_basicColor};
  }
  .btn-outline-primary {
      color: {$global_basicColor};
      border-color: {$global_basicColor};
  }
  .btn-outline-primary.active,
  .btn-outline-primary.focus,
  .btn-outline-primary:active,
  .btn-outline-primary:focus,
  .btn-outline-primary:hover,
  .open>.btn-outline-primary.dropdown-toggle {
      background-color: {$global_basicColor};
      border-color: {$global_basicColor};
  }
  .btn-link {
    color: {$global_basicColor};
  }
  .dropdown-item.active,
  .dropdown-item.active:focus,
  .dropdown-item.active:hover {
    background-color: {$global_basicColor};
  }
  .nav-pills .nav-item.open .nav-link,
  .nav-pills .nav-item.open .nav-link:focus,
  .nav-pills .nav-item.open .nav-link:hover,
  .nav-pills .nav-link.active,
  .nav-pills .nav-link.active:focus,
  .nav-pills .nav-link.active:hover {
    background-color: {$global_basicColor};
  }
  .card-primary {
    background-color: {$global_basicColor};
    border-color: {$global_basicColor};
  }
  
  .card-outline-primary {
    border-color: {$global_basicColor};
  }
  .page-item.active .page-link,
  .page-item.active .page-link:focus,
  .page-item.active .page-link:hover {
    background-color: {$global_basicColor};
    border-color: {$global_basicColor};
  }
  .tag-primary {
    background-color: {$global_basicColor};
  }
  .page-link {
    color: {$global_basicColor};
  }
  .bg-primary {
      background-color: {$global_basicColor}!important
  }
  .text-primary {
      color: {$global_basicColor}!important;
  }
  
  
  
  {***********************************
  
  Product
  
  ***********************************}
  #products .product-title a,
  .featured-products .product-title a,
  .product-accessories .product-title a,
  .product-miniature .product-title a,
  .product-information-dropdown h5 a,
  .product-desc a,
  .product-name a {
    color: {$product_titleCatalogColor};
    font-size: {$product_titleCatalogFontSize};
  }
  
  .page-product h1 {
    font-size: {$product_titleFontSize};
  }
  
  #products .product-price-and-shipping,
  .featured-products .product-price-and-shipping,
  .product-accessories .product-price-and-shipping,
  .product-miniature .product-price-and-shipping,
  .product-price-and-shipping .product-price,
  .new-price,
  .price,
  .cart-preview .product-infos .product-price{
    color: {$product_priceColor};
    font-size: {$product_priceFontSize};
  }
  .current-price {
    color: {$product_priceColor};
  }
  .featured-products .regular-price,
  .product-accessories .regular-price,
  .product-miniature .regular-price,
  span.old-price,
  .regular-price {
   color: {$product_oldPriceColor};
   font-size: {$product_oldPriceFontSize};
  }
  #products .regular-price {
    color: {$product_oldPriceColor};
  }
  .product-discount {
   color: {$product_oldPriceColor};
  }
  
  {if $product_borderImageCatalog > 0}
  .thumbnail-container-image {
   {if $product_borderImageColorCatalog != ''}
   border: {$product_borderImageCatalog}px solid {$product_borderImageColorCatalog};
   {else}
   border: {$product_borderImageCatalog}px solid transparent; 
   {/if}
  }
  {/if}
  
  
  
  
  
  
  
  {*
  
  HEADER STYLES
  
  *}
  
  {if $header_navBackground != ''}
  .header-nav {
    background: {$header_navBackground}; 
  }
  {/if}
  .header-nav {
    font-size: {$header_fontSizeNav};  
  }
  {if $header_headerBackground != ''}
  #header {
    background: {$header_headerBackground}; 
  }
  {/if}
  
  
  {*
  
  TOP HORIZONTAL MENU
  
  *}
  {if $topmenu_background != ''}
  #_desktop_top_menu,
  #amegamenu{
    background: {$topmenu_background}; 
  }
  {/if}
  #_desktop_top_menu,
  #amegamenu{
    font-size: {$topmenu_fontSize};  
  }
  
  {if $topmenu_stickyMenu == '1'}
  /* fixed-menu */
    .fixed-menu {
      z-index: 9;
    background: rgba(0,0,0,0.4);
      padding-top: 0px!important;
      position: fixed !important;
      top: 0;
      left: 0;
    width: 100%;
    }
    #top-menu {
      margin-bottom: 0px !important;
    position: relative;
    }
  {/if}
  
  
  {if $wrapper_breadcrumbBackground != ''}
  .breadcrumb-wrapper{
    background-color: {$wrapper_breadcrumbBackground};
  }
  {/if}
  {if $newslet_background != ''}
  .block_newsletter {
    background: {$newslet_background};
  }
  {/if}
  {if $footer_footerBackground != ''}
  .footer-container {
    background: {$footer_footerBackground};
  }
  {/if}
  {if $copyright_copyrightBackground != ''}
  .copyright-container {
    background: {$copyright_copyrightBackground};
  }
  {/if}
  
  
  
  
  
  {* HOME SLIDER *}
  .anthemeblocks-homeslider-desc h2 {
    color: {$homeSlider_titleColor};
    font-size: {$homeSlider_TitleFontSize};
    {$homeSlider_sliderFont}
  }
  
  .anthemeblocks-homeslider-desc,
  .anthemeblocks-homeslider-desc p {
    color: {$homeSlider_descriptionColor};
    font-size: {$homeSlider_descriptionFontSize};
  }
  
  
  
  
  {*  Page load progress bar  *}
  {if $pageLoadProgressBar_status == '1'}
  
  #nprogress {
    pointer-events: none;
  }
  
  #nprogress .bar {
    background: {$pageLoadProgressBar_color};
  
    position: fixed;
    z-index: 1031;
    top: 0;
    left: 0;
  
    width: 100%;
    height: 2px;
  }
  
  /* Fancy blur effect */
  #nprogress .peg {
    display: block;
    position: absolute;
    right: 0px;
    width: 100px;
    height: 100%;
    box-shadow: 0 0 10px {$pageLoadProgressBar_color}, 0 0 5px {$pageLoadProgressBar_color};
    opacity: 1.0;
  
    -webkit-transform: rotate(3deg) translate(0px, -4px);
        -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
  }
  
  /* Remove these to get rid of the spinner */
  #nprogress .spinner {
    display: block;
    position: fixed;
    z-index: 1031;
    top: 15px;
    right: 15px;
  }
  
  #nprogress .spinner-icon {
    width: 18px;
    height: 18px;
    box-sizing: border-box;
  
    border: solid 2px transparent;
    border-top-color: {$pageLoadProgressBar_color};
    border-left-color: {$pageLoadProgressBar_color};
    border-radius: 50%;
  
    -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite;
  }
  
  .nprogress-custom-parent {
    overflow: hidden;
    position: relative;
  }
  
  .nprogress-custom-parent #nprogress .spinner,
  .nprogress-custom-parent #nprogress .bar {
    position: absolute;
  }
  
  @-webkit-keyframes nprogress-spinner {
    0%   { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  @keyframes nprogress-spinner {
    0%   { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  {/if}
  
  
  .ui-widget {
    font-family: inherit !important;
  }
  
  
  .block-social li {
    background-color: {$header_headerlink};
  }
  .block-social li:hover {
    background-color: {$header_headerlinkHover};
  }
  #_desktop_language_selector .dropdown-menu .dropdown-item:hover,
  #_desktop_currency_selector .dropdown-menu .dropdown-item:hover {
    color: {$header_headerlinkHover};
  }
  #products .thumbnail-container:hover,
  .featured-products .thumbnail-container:hover,
  .product-accessories .thumbnail-container:hover,
  .product-miniature .thumbnail-container:hover {
      border-color: {$global_linkHover};
  }
  .product-miniature .thumbnail-container .quick-view:hover {
    color: {$global_linkHover};
  }
  .copyright-container-center .block-social li a:hover,
  .copyright-container-center .block-social li a:hover span {
    color: {$global_basicColor};
  }
  .custom-checkbox input[type=checkbox]+span .checkbox-checked {
    background-color: {$global_basicColor};
  }
  .scroll-box-arrows i:hover {
    background-color: {$global_basicColor};
  }