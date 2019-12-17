{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="footer-before">
		{hook h='displayFooterANLiveEditor'}
		
		{if $page.page_name == 'index' || $page.page_name == 'category' || $page.page_name == 'prices-drop' || $page.page_name == 'new-products' || $page.page_name == 'best-sales' || $page.page_name == 'contact' || $page.page_name == 'cart'}  
					{block name='hook_footer_before'}
						{hook h='displayFooterBefore'}
					{/block}
    {/if}  
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
    </div>
  </div>
	<div class="footer-after">
      <div class="container">
				{block name='hook_footer_after'}
				    {hook h='displayFooterAfter'}
				{/block}
			</div>
    </div>
	<div class="copyright-container">
	  <div class="container">
		<div class="row">
		{if Module::getInstanceByName('an_theme')->getParam('copyright_showcopyright') == 1}
		  <div class="col-md-4 col-sm-12">
			<p class="">
			  {block name='copyright_link'}
				<a class="_blank" href="http://www.prestashop.com" target="_blank">
				  {l s='%copyright% %year% - Ecommerce software by %prestashop%' sprintf=['%prestashop%' => 'PrestaShop™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
				</a>
			  {/block}
			</p>
		  </div>
			{/if}
			<div class="col-md-4 col-sm-12 copyright-container-center">
					{hook h='displayCopyrightContainerCenter'}
			</div>
		  <div class="col-md-4 col-sm-12">
			{hook h='displayCopyrightContainer'}
		  </div>
		</div>
	  </div>
	</div>
</div>
