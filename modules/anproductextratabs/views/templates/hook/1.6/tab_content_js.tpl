{*
* 2007-2015 PrestaShop
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
*  @author    Anvanto (anvantoco@gmail.com)
*  @copyright 2007-2018  http://anvanto.com
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

{foreach from=$tabs item=tab_content}
<section class="page-product-box">
    <h3 class="page-product-heading">{$tab_content->title|escape:'htmlall':'UTF-8'}</h3>
    <div class="rte" id="anpt_tab_content_{$tab_content->id|intval}">
        <script type='text/javascript'>
        (function ($) {
            var element = $('<p></p>').append($("{$tab_content->content|escape:'javascript':'UTF-8' nofilter}").clone());
            jQuery('#anpt_tab_content_{$tab_content->id|intval}').html(element);
        })(jQuery);
        </script>
    </div>
</section> 
{/foreach}

<div id="an_bootstraptabs" data-type="{$display_type|escape:'html':'UTF-8'}" class="panel">
    <div class="row indent">
            {if $display_type neq 'simple_tabs'}
                <div class="col-xs-12">
            {/if}
            {if $display_type == 'simple_tabs'}
            <div class="col-sm-12">
            {/if}
            <ul class="nav nav-tabs"></ul>
            {if $display_type neq 'simple_tabs'}
                </div><div class="col-xs-12">
            {/if}
            <div class="tab-content clearfix"></div>
            {if $display_type == 'simple_tabs'}
            </div>
            {/if}
            {if $display_type neq 'simple_tabs'}</div>{/if}
    </div>
</div>