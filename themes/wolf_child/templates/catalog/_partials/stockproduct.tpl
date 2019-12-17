{**
 * 2007-2018 PrestaShop
 * NOTICE OF LICENSE
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<!--<div class="card card-default" style="overflow: hidden;">
<div style="color:#0080c1;" class=" card-header font-weight-bold text-center">Available In Stock <span style="color:#0080c1;" class="ml-5">&#10003;&#9989;&#10060;</span></div>
<div class="card-text"> Stocked product is available for immediate delivery or manufacture to order is 5 weeks from order confirmation</div>
</div>-->

<div class="card card-default grow" style="overflow: hidden; border:1px solid #ddd;">
<div style="background-color:#0A80BE; color:white; " class=" card-header    text-center">

            <span class="availability-list">Available In Stock</span>&nbsp<span style="color:White; font-size:33px; font-weight:700;" class="ml-5">&#10003;</span>

</div>
<div class="card-text">Stocked product is available for immediate delivery or manufacture to order is 5 weeks from order confirmation</div>

</div>



                   
<!--  {if $product.quantity > 0}
            <span class="availability-list">Available In Stock</span>&nbsp<span style="color:White; font-size:25px;" class="ml-5">&#10003;</span>
            {else}
            <span class="availability-list">Not Available In Stock</span>&nbsp<span style="color:White; font-size:25px;" class="ml-5">&#10006;</span>
     {/if}-->




{literal}
<style type="text/css">

.card-text {
    padding: 0.5em;
  
    font-size:15px;
    
}

.availability-list{
    font-size:18px;
    font-weight:600;
    
}

.grow{
    padding-bottom:5px;
    margin-bottom:5px;
}


/*.grow { transition: all .5s ease-in-out; }
.grow:hover { transform: scale(1.1); }*/

</style>
{/literal}



