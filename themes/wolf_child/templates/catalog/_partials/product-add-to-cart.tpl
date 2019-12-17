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
<div class="product-add-to-cart">
  {if !$configuration.is_catalog}
    <span class="control-label">{l s='Quantity' d='Shop.Theme.Global'}</span>

    {block name='product_quantity'}
      <div class="product-quantity">
        <div class="qty">
          <input
            type="text"
            name="qty"
            id="quantity_wanted"
            value="{$product.quantity_wanted}"
            class="input-group"
            min="{$product.minimal_quantity}"
            aria-label="{l s='Quantity' d='Shop.Theme.Global'}"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            {if !$product.add_to_cart_url}
              disabled
            {/if}>
            <i class="material-icons shopping-cart">&#xE547;</i>
            {l s='Add to cart' d='Shop.Theme.Global'}
          </button>
          {block name='product_availability'}
            <span id="product-availability">
              {if $product.show_availability && $product.availability_message}
                {if $product.availability == 'available'}
                  <i class="material-icons product-available">&#xE5CA;</i>
                {elseif $product.availability == 'last_remaining_items'}
                  <i class="material-icons product-last-items">&#xE002;</i>
                {else}
                  <i class="material-icons product-unavailable">&#xE14B;</i>
                {/if}
                {$product.availability_message}
              {/if}
            </span>
          {/block}
        </div>
      </div>
      
    {/block}
    <div class="credit-card-icons-container">
      <div class="credit-card-box credit-visa-box">
        <img src="/themes/wolf_child/assets/img/credit-card-visa.png" alt="visa card" class="credit-card-icons-image">
      </div>
      <div class="credit-card-box credit-master-box">
        <img src="/themes/wolf_child/assets/img/credit-card-master.png" alt="master card" class="credit-card-icons-image">
      </div>
      <div class="credit-card-box box-credit-account" style="padding-top: 8px; width: 34%;">
        <a href="#">Account</a>
      </div>
    </div>
    <!-- <label class="price-label">Price Protection</label> 
    <div class="price" style="max-width: 330px">
      <div class="price-protection">
          <img src="/themes/wolf_child/assets/img/lock.png" class="price-image">
         <div class="price-box">
           <label class="price-label">NEED PRICE PROTECTION ?</label>
         <p >Lock in program specific pricing and protect your design-in and margins. To register 
          <a href="http://telason.com/30-free-sample/?id=1" style="color: #0080c1">CLICK HERE</a></p>
         </div>
      </div>
      <div class="col-md-12" style="float: left;">
       {block name='service_block'}
            {if isset($listing)}
              {include file='module:pst_serviceblock/views/templates/hook/pst_serviceblock.tpl' listing=$listing}
            {/if}
        {/block}
     </div>
    </div> --> 
    
    
    {block name='product_minimal_quantity'}
      <p class="product-minimal-quantity">
        {if $product.minimal_quantity > 1}
          {l
          s='The minimum purchase order quantity for the product is %quantity%.'
          d='Shop.Theme.Global'
          sprintf=['%quantity%' => $product.minimal_quantity]
          }
        {/if}
      </p>
    {/block}
  {/if}
</div>
