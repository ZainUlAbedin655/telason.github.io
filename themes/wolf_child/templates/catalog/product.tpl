{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 

 
 
{extends file=$layout}
{block name='head_seo' prepend}
  <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
  <meta property="og:type" content="product">
  <meta property="og:url" content="{$urls.current_url}">
  <meta property="og:title" content="{$page.meta.title}">
  <meta property="og:site_name" content="{$shop.name}">
  <meta property="og:description" content="{$page.meta.description}">
  <meta property="og:image" content="{$product.cover.large.url}">
  <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
  <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
  <meta property="product:price:amount" content="{$product.price_amount}">
  <meta property="product:price:currency" content="{$currency.iso_code}">
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}
{block name='content' }

  <section id="main" itemscope itemtype>
    <meta itemprop="url" content="{preg_replace('/#.*/', '', $product.url)}">
    <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
    <div class="row product-page-row">
      <div class="col-md-9 product-page-col-1">  
        <div class="col-md-12 product-page-col-1-inner-1">  
          <h1 class="h1 productpage_title" style="text-align: right;" itemprop="name">{block name='page_title'}{$product.name}{/block}</h1>  
        </div>
        <div class="col-md-8 product-page-col-1-inner-2">    
        {block name='page_content_container'}
          <section class="page-content" id="content">
            <div class="product-leftside">
			       {block name='page_content'}
              {block name='product_flags'}
                <ul class="product-flags">
                  {foreach from=$product.flags item=flag}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                  {/foreach}
                </ul>
              {/block}

              {block name='product_cover_tumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}
            {/block}
			     </div>
        </section>
      {/block}
      </div>
      <div class="col-md-4 product-page-col-1-inner-3">
        {block name='page_header_container'}
          {block name='page_header'}
          {if $product.id === 93}
          {hook h = 'myNewCoolHooks'}
          {/if}
        <!--     {hook h ='myNewCoolHook'} -->
          {/block}
        {/block}
        {block name='product_description_short'}
          <div id="product-description-short-{$product.id}" itemprop="description" style="margin-top: 15px;}">
              {$product.description_short nofilter}</div>
        {/block}
        {assign var='displayDeliveryTime' value={hook h='displayDeliveryTime'} }
        {if empty($displayDeliveryTime)} 
        
        
        
        
          <!--{block name='product_prices'}
            {include file='catalog/_partials/product-prices.tpl'}
          {/block} -->
        {/if}
        
        
        
        <!--{block name='product_variants'}-->
        <div class="product-variants-container">
        <!--  {include file='catalog/_partials/product-variants.tpl'}
        {/block} -->
        
        
        
        
        

        <div class="product-actions">
              {block name='product_buy'}
                  <input type="hidden" name="token" value="{$static_token}">
                  <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
                  {block name='product_pack'}
                    {if $packItems}
                      <section class="product-pack">
                        <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Global'}</h3>
                        {foreach from=$packItems item="product_pack"}
                          {block name='product_miniature'}
                            {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                          {/block}
                        {/foreach}
                    </section>
                    {/if}
                  {/block}

                  {block name='product_discounts'}
                    {include file='catalog/_partials/product-discounts.tpl'}
                  {/block}
                  
             
               
                
                  
            
                    {block name='product_additional_info'}
                
   
                  {include file='catalog/_partials/product-additional-info.tpl'}
                  
                <!-- {block name='product_miniature_item'}
                    {if $product.quantity > 0}
                     <span class="availability-list">In Stock</span>
                    {else} 
                    <span class="availability-list">not In Stock</span>
                    {/if}
                  {/block}-->
                  
                    <div class="displayProductAdditionalInfo2">
                    
                            {block name='StockProduct'}
                           
                             {include file='catalog/_partials/stockproduct.tpl'}
                            {/block}
                           
                            
                          {block name='product_variants'}
                            <div class="product-variants-container">
                             {include file='catalog/_partials/product-variants.tpl'}
                            {/block}
                   
                    {hook h='displayProductAdditionalInfo2' product=$product}
                      
                    </div>
        <!--     {hook h ='displayProductAdditionalInfo2'} -->
       
                  {/block}
                  
                
               
                        
                   
                  {block name='product_refresh'}
                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Global'}">
                    
                  {/block}
                  
                  
                  
          
              <!--  {block name='product_add_to_cart'}
                    {include file='catalog/_partials/product-add-to-cart.tpl'}
                  {/block}
                  
                  
              
                  
                  
                  
                  
                  <!-- <div class="product-information">
                    {if $product.is_customizable && count($product.customizations.fields)}
                      {block name='product_customization'}
                        {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
                      {/block}
                    {/if}
                    {block name='hook_display_reassurance'}
                      {hook h='displayReassurance'}
                    {/block}
                  </div> -->
              {/block}
             
               
              
          
          
           
                    
          
        
          
          
        </div> 
      </div>
    </div>
    <div class="col-md-12">
     
    </div>
     
    </form>
	
    {block name='product_accessories'}
      {if $accessories}
        {assign var='sliderFor' value=4} <!-- Define Number of product for SLIDER -->
		{assign var='productCount' value=count($accessories)}
		
		<section class="product-accessories clearfix">
          <h3 class="h3 products-section-title text-uppercase">
		  {l s='You might also like' d='Shop.Theme.Global'}
		  </h3>
         <div class="products"> 
		 	{if $productCount >= $sliderFor}
			 <div class="product-carousel">
				<ul id="pstaccessories-carousel" class="pstaccessories-carousel pst-carousel product_list">
			{else}
				<ul id="pstaccessories-grid" class="pstaccessories-grid grid row gridcount product_list">
			{/if}
			{foreach from=$accessories item="product_accessory"}
              {block name='product_miniature'}
                <li class="{if $productCount >= $sliderFor}item{else}product_item col-xs-12 col-sm-6 col-md-3 col-lg-3{/if}">
				{include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory}
				</li>
              {/block}
            {/foreach}
			</ul>
			
			{if $productCount >= $sliderFor}
				<div class="customNavigation">
					<a class="btn prev pstaccessories_prev">&nbsp;</a>
					<a class="btn next pstaccessories_next">&nbsp;</a>
				</div>
			{/if}
			{if $productCount >= $sliderFor}
	  </div>
	  {/if}
          </div>
        </section>
      {/if}
    {/block}

    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
  </section>
{/block}

