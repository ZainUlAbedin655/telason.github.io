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


<div class="block_newsletter-wrapper">
<div class="block_newsletter col-lg-12 col-md-12 col-sm-12 hb-animate-element bottom-to-top ">
  <div class="row">  	
    <div class="col-md-12 col-xs-12 col-lg-12 newsletter-title">
		<!--<span class="pst-newsletter-icon"></span>-->
		<div class="newsletter-details">
			<span class="title">{l s='Newsletter' d='Shop.Theme.Global'}</span>
			{if $conditions}
			<span class="newsletter-desc">{$conditions}</span>
			{/if}
		</div>
	</div>
    <div class="col-md-12 col-xs-12 col-lg-12 newsletter-block">
      <form action="{$urls.pages.index}#footer" method="post">
        <div class="row">
          <div class="col-xs-12">
		  <div class="block_newsletter_inner">                       
              <input
                name="email"
                type="text"
                value="{$value}"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
              >          
			<input
              class="btn btn-primary float-xs-right hidden-lg-down"
              name="submitNewsletter"
              type="submit"
              value="{l s='Subscribe' d='Shop.Theme.Global'}"
            >
            <input
              class="btn btn-primary float-xs-right hidden-xl-up"
              name="submitNewsletter"
              type="submit"
              value="{l s='OK' d='Shop.Theme.Global'}"
            >
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
			</div>
          </div>
          <div class="col-xs-12">
             
              {if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                  {$msg}
                </p>
              {/if}
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>