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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $status == 'success'}
	<p>{l s='Your order on %s is complete.' sprintf=[$shop_name] d='Modules.Ipaytotalpayment.Shop'}
		<br /><br />{l s='An email has been sent to you with this information.' d='Modules.Ipaytotalpayment.Shop'}
		<br /><br /><strong>{l s='Your order will be sent as soon as we receive your payment.' d='Modules.Ipaytotalpayment.Shop'}</strong>
		<br /><br />{l s='For any questions or for further information, please contact our' d='Modules.Ipaytotalpayment.Shop'} <a href="{$link->getPageLink('contact', true)|escape:'html'}">{l s='customer service department.' d='Modules.Ipaytotalpayment.Shop'}</a>.
	</p>
{else}
	<p class="warning">
		{l s='We have noticed that there is a problem with your order. If you think this is an error, you can contact our' d='Modules.Ipaytotalpayment.Shop'}
		<a href="{$link->getPageLink('contact', true)|escape:'html'}">{l s='customer service department.' d='Modules.Ipaytotalpayment.Shop'}</a>.
	</p>
{/if}
