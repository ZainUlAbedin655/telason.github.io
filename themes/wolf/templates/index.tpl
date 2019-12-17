{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}

    {block name='page_content_container'}
      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}
        
		<!-- Template start -->			
			<section class="pst-hometabcontent hb-animate-element top-to-bottom ">
			
				<div class="container">
				
				<div class="tabs">
					<h2 class="h1 products-section-title text-uppercase">{l s='Our Products' d='Shop.Theme.Global'}
						<span class="title-desc">{l s='contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 AC, making it over 2000 years old.' d='Shop.Theme.Global'}</span>
					</h2>
					<ul id="home-page-tabs" class="nav nav-tabs clearfix">
						<li class="nav-item">
							<a data-toggle="tab" href="#featureProduct" class="nav-link active" data-text="{l s='Featured products' d='Shop.Theme.Global'}">
								<span>{l s='Featured products' d='Shop.Theme.Global'}</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#newProduct" class="nav-link" data-text="{l s='New Arrivals' d='Shop.Theme.Global'}">
								<span>{l s='New Arrivals' d='Shop.Theme.Global'}</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#bestseller" class="nav-link" data-text="{l s='Best Sellers' d='Shop.Theme.Global'}">
								<span>{l s='Best Sellers' d='Shop.Theme.Global'}</span>
							</a>
						</li>
						
					</ul>
				  
					<div class="tab-content">
						<div id="featureProduct" class="tm_productinner tab-pane active">	
							{hook h='displayPstFeature'}
						</div>
						<div id="newProduct" class="tm_productinner tab-pane">
							{hook h='displayPstNew'}
						</div>
						<div id="bestseller" class="tm_productinner tab-pane">
							{hook h='displayPstBestseller'}
						</div>
					
					</div>					
				</div>				
			    </div>
			</section>

		<!-- Template end -->
		
		{block name='page_content'}
          {block name='hook_home'}
          {$HOOK_HOME nofilter}
        {/block}
        {/block}
      </section>
    {/block}
	
	
