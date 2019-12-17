{if version_compare($smarty.const._PS_VERSION_, '1.7.0.0', '<')}
    {foreach from=$an_staticblock->products item="product"}
        {include file='$tpl_dir./product-list.tpl' product=$product}
    {/foreach}
{else}



<h2 class="product_banner_block-title">{$an_staticblock->title|escape:'htmlall':'UTF-8'}</h2>
<div class="product_block_and_banner">
	<section class="featured-products clearfix">
		<div class="products">
		{foreach from=$an_staticblock->products item="product" name='foo'}
		{if $smarty.foreach.foo.iteration <= 4}
			{$image_limit = Module::getInstanceByName('an_theme')->getParam('segmentedviewsettinds_imagelimit')}

			{block name='product_miniature_item'}   {* $product.images|@debug_print_var nofilter *}
			<article class="product-miniature js-product-miniature
			{if Module::isEnabled('an_theme') and  Module::getInstanceByName('an_theme')->getParam('product_productImageChange') == 'hover-slider'}
			product-miniature-hover-slider
			{/if}
			" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
				<div class="thumbnail-container ">
					<div class="thumbnail-container-image " style="min-height: 250px; min-height: {$product.cover.bySize.home_default_small.height}px;">
					{block name='product_thumbnail'}	
					{if Module::isEnabled('an_theme')}
						{if Module::getInstanceByName('an_theme')->getParam('product_productImageChange') == 'standart'}
						<a href="{$product.url}" class="thumbnail product-thumbnail">
						<img
							src = "{$product.cover.bySize.home_default_small.url}"
							alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
							data-full-size-image-url = "{$product.cover.large.url}"
							> 
						</a>
						{elseif Module::getInstanceByName('an_theme')->getParam('product_productImageChange') == 'hover'}
						<a href="{$product.url}" class="thumbnail product-thumbnail">
						{foreach from=$product.images item=image name=foo}
							<img
								class="img_hover_change {if $image.id_image == $product.cover.id_image} cover {/if} {if $smarty.foreach.foo.total == 1 } only_one {/if}"
								data-full-size-image-url="{$image.bySize.large_default.url}"
								src="{$image.bySize.home_default_small.url}"
								alt="{$image.legend}"
							>
						{/foreach}
						</a>
						{elseif Module::getInstanceByName('an_theme')->getParam('product_productImageChange') == 'slider'}
						<div class="slider_product-wrapper">
							<a href="{$product.url}" class="thumbnail product-thumbnail">
							<img
							class="slider_product cover"
							src = "{$product.cover.bySize.home_default_small.url}"
							alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
							data-full-size-image-url = "{$product.cover.large.url}"
							> 
							</a>
							{foreach from=$product.images item=image}
							{if $image.id_image != $product.cover.id_image}
							<a href="{$product.url}" class="thumbnail product-thumbnail">
								<img
								class="slider_product not_cover"
								data-full-size-image-url="{$image.bySize.large_default.url}"
								src="{$image.bySize.home_default_small.url}"
								alt="{$image.legend}"
								>
							</a>
							{/if}
							{/foreach}
						</div>
						{elseif Module::getInstanceByName('an_theme')->getParam('product_productImageChange') == 'hover-slider'}
							<a href="{$product.url}" class="thumbnail product-thumbnail hover_slider">
								<ul {if $product.images|@count == 1} class="only_one_item"{/if}>
									<li class="cover-item">
										<div class="hover-slider-img">
											<img
												class="hover-slider-image"
												src = "{$product.cover.bySize.home_default_small.url}"
												alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
												data-full-size-image-url = "{$product.cover.large.url}"
											>
										</div>
									</li>
									{$image_limit_other = $image_limit}
									{foreach from=$product.images item=image name=hoverslider}
										{if $smarty.foreach.hoverslider.iteration == $image_limit and $image.id_image == $product.cover.id_image }
											{$image_limit_other = $image_limit-1}
										{elseif $smarty.foreach.hoverslider.iteration > $image_limit and $image.id_image == $product.cover.id_image }
											{$image_limit_other = $image_limit-1}
										{/if}
									{/foreach}
									{foreach from=$product.images item=image name=hoverslider}
										{if $image.id_image != $product.cover.id_image and $smarty.foreach.hoverslider.iteration <= $image_limit_other}
											<li class="no-cover-item">
												<div class="hover-slider-img">
													{if Module::getInstanceByName('an_theme')->getParam('segmentedviewsettinds_textonlastimg') == 1}
														{if $smarty.foreach.hoverslider.iteration == $image_limit_other and ($product.images|@count-$image_limit)>0}
															<div class="more-images">
																{$product.images|@count-$image_limit}
																{if ($product.images|@count-$image_limit) == 1}
																	{l s='more image' d='Shop.Theme.Actions'}
																{else}
																	{l s='more images' d='Shop.Theme.Actions'}
																{/if}
															</div>
														{/if}
													{/if}
													<img
														class="hover-slider-image"
														data-full-size-image-url="{$image.bySize.large_default.url}"
														src="{$image.bySize.home_default_small.url}"
														alt="{$image.legend}"
													>
												</div>
											</li>
										{/if}
									{/foreach}
								</ul>
							</a>
						{/if}
					{else}
					<a href="{$product.url}" class="thumbnail product-thumbnail">
						<img
						src = "{$product.cover.bySize.home_default_small.url}"
						alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
						data-full-size-image-url = "{$product.cover.large.url}"
						> 
					</a>
					{/if}    
					{/block}
					</div>
						{if Module::isEnabled('an_theme') and Module::getInstanceByName('an_theme')->getParam('global_showquickview') == 1}
							{block name='quick_view'}
								<a class="quick-view" href="#" data-link-action="quickview">
									<i class="material-icons search">loupe</i>
								</a>
							{/block}
						{/if}
				<div class="product-description">
			
					{block name='product_name'}
					<h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h3>
					{/block}
					{if Module::isEnabled('an_theme') and Module::getInstanceByName('an_theme')->getParam('product_shortdescription') == 1}
					{$max_length = Module::getInstanceByName('an_theme')->getParam('product_shortdescriptionlength')}
						{block name='product_description_short'}
							<p class="an_short_description" id="an_short_description_{$product.id}">
								{$product.description_short|strip_tags:'UTF-8'|truncate:$max_length:'...'}
							</p>
						{/block}
					{/if}
					{block name='product_price_and_shipping'}
					{if $product.show_price}
						<div class="product-price-and-shipping">
						{if $product.has_discount}
							{hook h='displayProductPriceBlock' product=$product type="old_price"}
							<span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
							<span class="regular-price">{$product.regular_price}</span>
						{/if}
			
						{hook h='displayProductPriceBlock' product=$product type="before_price"}
			
						<span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
						<span itemprop="price" class="price">{$product.price}</span>
			
						{hook h='displayProductPriceBlock' product=$product type='unit_price'}
			
						{hook h='displayProductPriceBlock' product=$product type='weight'}
							{if isset($product.product_attribute_minimal_quantity)}
								{$min_quantity = $product.product_attribute_minimal_quantity}
							{else}
								{$min_quantity = $product.minimal_quantity}
							{/if}
							{if Module::isEnabled('an_theme')}
								{if Module::getInstanceByName('an_theme')->getParam('product_addtocart') == 'button' or Module::getInstanceByName('an_theme')->getParam('product_addtocart') == 'qtyandbutton' }
									<div class="atc_div">
									{if Module::getInstanceByName('an_theme')->getParam('product_addtocart') == 'qtyandbutton'}
										<input name="qty" type="number" min="{$min_quantity}" max="{$product.quantity}" class="form-control atc_qty" value="{$min_quantity}"/>
									{/if}
										<button class="add_to_cart btn btn-primary btn-sm {if $product.availability == 'unavailable'}disabled{/if}  " onclick="mypresta_productListCart.add({literal}$(this){/literal});">
											{l s='Add to cart' d='Shop.Theme.Actions'}
										</button>
									</div>
								{/if}
							{/if}
						</div>
					{/if}
			
					{/block}
			
					{block name='product_reviews'}
					{hook h='displayProductListReviews' product=$product}
					{/block}
				</div>
			
				{block name='product_flags'}
				<a href="{$product.url}">
					<ul class="product-flags">
					{foreach from=$product.flags item=flag}
						<li class="product-flag {$flag.type}">{$flag.label}</li>
					{/foreach}
					{if $product.has_discount}
						{if $product.discount_type === 'percentage'}
						<li class="product-flag discount-percentage">{$product.discount_percentage}</li>
						{else}
							<li class="product-flag discount-percentage">
								{l s='- %amount%' d='Shop.Theme.Catalog' sprintf=['%amount%' => $product.discount_to_display]}
							</li>
						{/if}
					{/if}
					</ul>
				</a>
				{/block}
				</div>
			</article>
			{/block}
		{/if}
		{/foreach}
		</div>
    </section>
    <div class="banner-block">
    	<img src="{$an_staticblock->getImageLink()}" alt="">		
    </div>
</div>
{/if}