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
{extends file='parent:catalog/listing/product-list.tpl'}

{block name='product_list_header'}
    <div class="block-category card card-block hidden-sm-down">
	    <div class="header-category-bottom {if $category.name == 'Circular Backshell Interface' || $category.name == 'Termination Bands' || $category.name == 'Rectangular Backshell Interface' || $category.name == 'Banding Strap Termination' || $category.name == 'Spring Clip Termination' || $category.name == 'Braid Tail Sock Terminated' } header-category-image-side {else} header-category-image-top {/if}">
	    	<div id="category-description" class="{if isset($smarty.get.id)}{if $smarty.get.id eq 1} full-category-description {/if}{/if} text-muted" style="color: #000000;">
	    		<h1 class="h1">
	    			{if isset($smarty.get.id)}
			    		{if $smarty.get.id eq 1} 
							Price Protection
						{elseif $smarty.get.id eq 5}
							Can’t find what you need?
						{else} 
					        {$category.name}
					    {/if} 
					{else} 
						{$category.name}
					{/if} 
			    </h1>
			    {if isset($smarty.get.id)}
					{if $smarty.get.id eq 1} 
						We value your hard work in designing in parts onto your programs, and will support your business with discounted price protection on our full range of products.
						Register your program with us and we will give you the confidence and assurance you need through our price protection guarantee, ensuring your quoted prices are the most competitive for the program. 
						<h2 class="h2" style="color: #0A80BE;">How does it work?</h2>
						At TELASON we guarantee that, once you have registered the program details and your company with our sales team, we will not offer any competitor a better price for the same product on the same program. You are guaranteed to have the best TELASON prices.
						Your price protection guarantee will be valid for the life of the quotation and further to procurement and ordering, ensuring your margins are secured.</br>
						</br>
						Complete the form below to register your program and one of our team will be in contact to provide your discounted price.
					{elseif $smarty.get.id eq 5}
						Telason holds over 500 line items in inventory, and has over 2000 backshell combinations to choose from. Chances are, if you cannot find what you need we will have it, or be able manufacture if for you quickly. So send us a message or call us and let one of our experienced team help you find a solution.<br>
						Complete the form below including the backshell description or part number you need and we will contact you within 24 hrs.
					{else} 
						{if $category.description}
					        {$category.description nofilter}
					    {/if}
					{/if} 
				{else} 
					{if $category.description}
					    {$category.description nofilter}
					{/if}
				{/if}
			</div>
			{if isset($smarty.get.id)}
				 {if $smarty.get.id eq 1 || $smarty.get.id eq 5} 
					
			      {else}
			        <!--div class="category-cover {if $category.name == 'Circular Backshell Interface' || $category.name == 'Rectangular Backshell Interface' || $category.name == 'Banding Strap Termination' || $category.name == 'Spring Clip Termination' || $category.name == 'Braid Tail Sock Terminated' } sub-image-height {/if}">
			        </div-->
			        <div class="category-cover-img">	
			          <img src="{$category.image.large.url}" alt="{$category.image.legend}"s>
			        </div>
			    {/if}
		    {else} 
			     <div class="category-cover-img">	
			         <img src="{$category.image.large.url}" alt="{$category.image.legend}"s>
			     </div>
			{/if}
		</div>
	</div>
	{if isset($category.id)}
		{if $category.id == 30 || $category.id == 33}
	  		{hook h ='myNewCoolHook'}
	    {/if}
    {/if}
	<div id="subcategories">
		<h3 class="subcategory-heading">{l s='Subcategories'}<i class="material-icons float-xs-right"></i></h3>
		<ul class="clearfix row">
			{foreach from=$subcategories item=subcategory}
			<li class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
				<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}" title="{$subcategory.name|escape:'html':'UTF-8'}" class="img"></a>
					<a class="subcategory-name" href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}">{$subcategory.name|escape:'html':'UTF-8'}</a>
			</li>
			{/foreach}
		</ul>
	</div>
{/block}