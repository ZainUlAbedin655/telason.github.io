{*
* 2007-2018 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block links module -->
<div id="links_block_footer" class="block links col-md-12 col-lg-4">
<h2 class="h1 products-section-title hidden-md-down">
				<span class="title">{l s='Our product' mod='pst_footerlink'}</span>
			</h2>	
<div class="title clearfix hidden-md-up" data-target="#pst_footerlink" data-toggle="collapse">
		  <span class="h3">{l s='Our product' mod='pst_footerlink'}</span>
		  <span class="float-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			  </span>
		  </span>
		</div>
<div id="links_block_footer" class="">
	
	<ul id="pst_footerlink" class="block_content collapse">
	{foreach from=$pst_footerlink_links item=pst_footerlink_link}
		{if isset($pst_footerlink_link.$lang)} 
			<li>
				<a href="{$pst_footerlink_link.url}" title="{$pst_footerlink_link.$lang}" {if $pst_footerlink_link.newWindow} onclick="window.open(this.href);return false;"{/if}>{$pst_footerlink_link.$lang}</a></li>
		{/if}
	{/foreach}
	</ul>
</div>
</div>

<!-- /Block links module -->
