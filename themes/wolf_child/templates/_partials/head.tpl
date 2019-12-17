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

{block name='head_charset'}

<meta charset="utf-8">

{/block}

{block name='head_ie_compatibility'}

<meta http-equiv="x-ua-compatible" content="ie=edge">

{/block}



{block name='head_seo'}

  <title>{block name='head_seo_title'}{$page.meta.title}{/block}</title>

  <meta name="description" content="{block name='head_seo_description'}{$page.meta.description}{/block}">

  <meta name="keywords" content="{block name='head_seo_keywords'}{$page.meta.keywords}{/block}">

  {if $page.meta.robots !== 'index'}

    <meta name="robots" content="{$page.meta.robots}">

  {/if}

  {if $page.canonical}

    <link rel="canonical" href="{$page.canonical}">

  {/if}

{/block}



{block name='head_viewport'}

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="HhRmZQZ_NmAM1jjFOLwYWSese1PYezltoBaR9G0VO7s" />
<meta name="google-site-verification" content="4UN1ajgBnUmUHg8pJvtVVD8AvZUKyniXe3Tn8q0QOSU" />
<meta name="msvalidate.01" content="0748985CE7BF724E909229C69CD694B3" />
{literal}
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PBD7HK8');</script>
<!-- End Google Tag Manager -->
{/literal}
{/block}



{block name='head_icons'}

<link rel="icon" type="image/vnd.microsoft.icon" href="{$shop.favicon}?{$shop.favicon_update_time}">

<link rel="shortcut icon" type="image/x-icon" href="{$shop.favicon}?{$shop.favicon_update_time}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
{/block}

<!-- Template added -->



<link href="https://fonts.googleapis.com/css?family=Share:400,700" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">



{block name='stylesheets'}

  {include file="_partials/stylesheets.tpl" stylesheets=$stylesheets}

{/block}



{block name='javascript_head'}

  {include file="_partials/javascript.tpl" javascript=$javascript.head vars=$js_custom_vars}

{/block}



{block name='hook_header'}

  {$HOOK_HEADER nofilter}

{/block}



{block name='hook_extra'}{/block}

{if !empty($product.name)}


<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "{$product.name|escape:'html':'UTF-8'}",
  "description": "{$product.description_short|strip_tags|escape:'html':'UTF-8'}",
  "url" : "{$link->getProductLink($product)}",
  "sku" : "{$product.reference}",
  "image": "{$product.cover.large.url|replace:'-large_default':''}",
  {if $product.reference}"mpn": "{$product.id|escape:'html':'UTF-8'}",{/if}
    {if empty($combinations)}
    "offers": {
        "@type": "Offer",
        "priceCurrency": "{$currency.iso_code|escape:'html':'UTF-8'}",
        "name": "{$product.name|escape:'html':'UTF-8'}",
        "price": "",
        "priceValidUntil" : "01-01-2022",
        "image": "{$product.cover.large.url|replace:'-large_default':''}",
        {if $product.ean13}
        "gtin13": "{$product.ean13|escape:'html':'UTF-8'}",
        {else if $product.upc}
        "gtin13": "0{$product.upc|escape:'html':'UTF-8'}",
        {/if}
        "sku": "{$product.reference}",
        "availability":{if $product.quantity > 0} "http://schema.org/InStock"{else} "http://schema.org/OutOfStock"{/if},
        "seller": {
            "@type": "Organization",
            "name": "{$shop.name|escape:'html':'UTF-8'}"
        }
    }
    {else}
    "offers": [
      {foreach key=id_product_combination item=combination from=$combinations}
        {
        "@type": "Offer",
        "name": "{$product.name|escape:'html':'UTF-8'} - {$combination.reference}",
        "priceCurrency": "{$currency.iso_code|escape:'html':'UTF-8'}",
        "price": "{Product::getPriceStatic($product.id, true, $id_product_combination)|round:'2'}",
        "priceValidUntil" : "01-01-2022",
        "image": "{$product.cover.large.url|replace:'-large_default':''}",
        "sku": "{$combination.reference}",
        "availability": {if $combination.quantity > 0}"http://schema.org/InStock"{else}"http://schema.org/OutOfStock"{/if},
        "url" : "{$link->getProductLink($combination)}",
        "seller": {
            "@type": "Organization",
            "name": "{$shop.name|escape:'html':'UTF-8'}"}
        } {if !$combination@last},{/if}          
     {/foreach}
    ]
    {/if}
}
</script>
{/if}