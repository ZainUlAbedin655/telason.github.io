{**

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



<div id="blockaboutus" class="col-lg-4 col-md-12 block links">

<div class="title clearfix hidden-md-up" data-target="#block-aboutus" data-toggle="collapse">

		  <span class="h3">{l s='About Us' d='pst_blockaboutus'}</span>

		  <span class="float-xs-right">

			  <span class="navbar-toggler collapse-icons">

				<i class="material-icons add">&#xE313;</i>

				<i class="material-icons remove">&#xE316;</i>

			  </span>

		  </span>

		</div>

<div id="block-aboutus" class="collapse">

{if $pstblockaboutusinfos.text != ""}

		{$pstblockaboutusinfos.text nofilter}

	{else}		

		<div class="header_logo hidden-md-down" id="_desktop_logo">

				<a href="{$urls.base_url}">

				<img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}" style="margin-left: 25%";>

				</a>

		</div>

		<span class="block-details">A Specialist Manufacturer Of Backshell Adaptors And Accessories.
Having a sole focus on Backshells and Accessories, TELASON defines itself by having a selective product group with a dedicated manufacturing resource that is not distracted by other connector lines or components. We only make Backshells!
</span>

	{/if}

	{hook h='displayPstSocialfollow'}

</div>

</div>

