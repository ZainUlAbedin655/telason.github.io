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

{extends file=$layout}



{block name='content'}

  <section id="main">



    {block name='product_list_header'}

      <h2 class="h2">{$listing.label}</h2>

    {/block}



    <section id="products" class="wolf-products-list.tpl">

      {if $listing.products|count}



        <div id="">

          {block name='product_list_top'}

            {include file='catalog/_partials/products-top.tpl' listing=$listing}

          {/block}

        </div>



        {block name='product_list_active_filters'}

         

            {$listing.rendered_active_filters nofilter}

          

        {/block}



        <div id="">

          {block name='product_list'}

            {include file='catalog/_partials/products.tpl' listing=$listing}

          {/block}

        </div>



        <div id="js-product-list-bottom">

          {block name='product_list_bottom'}

            {include file='catalog/_partials/products-bottom.tpl' listing=$listing}

          {/block}

        </div>



      {else}
          <div id="category-description" class="text-muted" style="color: #000000;">The product category you have selected is no currently available for purchase online. This product category is available for purchase directly, but requires a Telason Sales Engineer to assist with identifying the correct part number for the connector designator interface, as there are many options and variables. Please provide your details including the connector part number and manufacturer below and a Telason Sales Engineer will contact you directly.
          </div>

         {hook h ='myNewCoolHook'}


        {include file='errors/not-found.tpl'}



      {/if}

    </section>



  </section>

{/block}

