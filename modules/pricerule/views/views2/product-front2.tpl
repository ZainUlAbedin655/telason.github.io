{if $combinations|@count gt 0 }

<section class="part-number product-front-tpl product-2 ">
    
  <div style="font-weight:bold;">Part Number</div>
  
  <div class="box-container" >
  <div class="box" style="width: 100%;">
    <input type="text" readonly="" name="reference" value="{$product_reference}" class="part-number-input">
    {for $attributeGroups=0 to count($combinations)-1}
     <input type="text" readonly="" name="partnumber[{$attributeGroups}]" class="partnumber-input" value="">
    {/for}
  </div> 
  </div>
</section> 

{/if}
{if $product.attachments}
 <div  class="panel-group" id="accordion" style="margin-top: 8px;">
  <div class="panel panel-default">
    <div class="panel-heading datasheets">
      <h3 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <div>Technical Datasheets</div>
        </a>
      </h3>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body" style="padding: 2px 10px;">
        <div class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Global'}</div>
         {foreach from=$product.attachments item=attachment}
              <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}"><i class="fa fa-file-pdf-o" style="font-size:18px; color:red"></i>{$attachment.name}</a>  |
         {/foreach}
      </div>
    </div>
  </div>
</div>
{/if}   

<a class="btn btn-primary price-request" style="width:100%; margin-top:16px; font-size:15px; font-weight:600;" href="https://www.telason.com/329-need-pricing-and-availability">Pricing Request</a>


<script type="text/javascript">
  /*if(typeof createPartNumber != undefined){*/
    createPartNumber();
  /*}*/
  if(typeof $ != 'undefined'){
    if($('#product-availability').length > 0 && $('section.part-number').length > 0){
      var availability = $('#product-availability').html();
      $('#product-availability').remove();
      $('section.part-number').append('<div id="product-availability">'+availability+'</div>');
    }
  }
</script>

</div><!--product-additional-info-->
</div><!--product-actions-->
</div><!--product-variants-container-->
</div><!--product-page-col-1-inner-3-->

<div class="col-md-12 description-product-details-col">
   {if $product.description}
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">

        <div class="panel-heading" style="background-color: #f1f1f1;">
          <h3 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              <h3>Description</h3>
            </a>
          </h3>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            {block name='product_description'}
              <div class="product-description" style="padding-left: 10px;">{$product.description nofilter}
              </div>
            {/block}
          </div>
        </div>
      </div>
    </div>
    {/if}
    
    
    
    
    {block name='product_tabs'}
   <div class="panelg">
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #f1f1f1;">
          <h3 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
              <h3>Product Details</h3>
            </a>
          </h3>
        </div>
        <div id="collapseThree" class="panel-collapse collapse in">
          <div class="panel-body">
              {block name='product_details'}
               {block name='product_reference'}
                {if isset($product_manufacturer->id)}
                  <div class="product-manufacturer" style="padding-left: 10px;">
                    {if isset($manufacturer_image_url)}
                      <a href="{$product_brand_url}">
                        <img src="{$manufacturer_image_url}" class="img img-thumbnail manufacturer-logo" alt="{$product_manufacturer->name}">
                      </a>
                    {else}
                      <label >{l s='Brand' d='Shop.Theme.Catalog'}</label>
                      <span>
                        <a href="{$product_brand_url}">{$product_manufacturer->name}</a>
                      </span>
                    {/if}
                  </div>
                {/if}
                {if isset($product.reference_to_display)}
                  <div class="product-reference" style="padding-left: 10px;">
                    <label >{l s='Reference' d='Shop.Theme.Catalog'} </label>
                    <span itemprop="sku">{$product.reference_to_display}</span>
                  </div>
                {/if}
              {/block}

              {block name='product_quantities'}
                {if $product.show_quantities}
                  <div class="product-quantities" style="padding-left: 10px;">
                    <label>{l s='In stock' d='Shop.Theme.Catalog'}</label>
                    <span data-stock="{$product.quantity}" data-allow-oosp="{$product.allow_oosp}">{$product.quantity} {$product.quantity_label}</span>
                  </div>
                {/if}
              {/block}

              {block name='product_availability_date'}
                {if $product.availability_date}
                  <div class="product-availability-date" style="padding-left: 10px;">
                    <label>{l s='Availability date:' d='Shop.Theme.Catalog'} </label>
                    <span>{$product.availability_date}</span>
                  </div>
                {/if}
              {/block}

              {block name='product_out_of_stock'}
                <div class="product-out-of-stock" style="padding-left: 10px;">
                  {hook h='actionProductOutOfStock' product=$product}
                </div>
              {/block}

              {block name='product_features'}
                {if $product.grouped_features}
                  <section class="product-features" style="padding-left: 10px;">
                    <p class="h6">{l s='Data sheet' d='Shop.Theme.Catalog'}</p>
                    <dl class="data-sheet">
                      {foreach from=$product.grouped_features item=feature}
                        <dt class="name">{$feature.name}</dt>
                        <dd class="value">{$feature.value|escape:'htmlall'|nl2br nofilter}</dd>
                      {/foreach}
                    </dl>
                  </section>
                {/if}
              {/block}

              {* if product have specific references, a table will be added to product details section *}
              {block name='product_specific_references'}
                {if isset($product.specific_references)}
                  <section class="product-features" style="padding-left: 10px;">
                    <p class="h6">{l s='Specific References' d='Shop.Theme.Catalog'}</p>
                      <dl class="data-sheet">
                        {foreach from=$product.specific_references item=reference key=key}
                          <dt class="name">{$key}</dt>
                          <dd class="value">{$reference}</dd>
                        {/foreach}
                      </dl>
                  </section>
                {/if}
              {/block}

              {block name='product_condition'}
                {if $product.condition}
                  <div class="product-condition" style="padding-left: 10px;">
                    <label class="label">{l s='Condition' d='Shop.Theme.Catalog'} </label>
                    <link itemprop="itemCondition" href="{$product.condition.schema_url}"/>
                    <span>{$product.condition.label}</span>
                  </div>
                {/if}
              {/block}
            {/block}
          </div>
        </div>
      </div>
    </div>
   </div>
    {/block}
    
</div>
  <!-- description-product-details-col -->

</div><!--product-page-col-1-->

<div class="col-md-3 product-page-col-2">
  <div class="product-actions">
    <div class="product-additional-info-2">
<section class="product-discountss product-front-tpl">
  <table class="table-product-discountss">
    <thead>
      <tr>
        <th>Quantity</th>
        <th>Price</th>
        <th class="hide hidden">Product price</th>
        <th class="hide hidden">Rule price</th>
        <th class="hide hidden">Price rule</th>
        <th>Delivery</th>
      </tr>
    </thead>
    <tbody>
    {if $price_rule|@count gt 0 }
      {if $price_rule != ''}
        {foreach from=$price_rule item="value" name='value'}
        <tr>
          <td>{$value.min_quantity}+</td>
          <td>
            {$currency['sign']}
            {if $value.discount_type == 'percentage' }
              {$product_price-(($value.rule_price*$currencyMultipler)*$product_price/100)|string_format:"%.2f"}
            {else}
             {$product_price-($value.rule_price*$currencyMultipler)|string_format:"%.2f"}
            {/if}
          </td>
          <td class="hide hidden">{$product_price}</td>
          <td class="hide hidden">{($value.rule_price*$currencyMultipler)}</td>
          <td class="hide hidden">{$value|@print_r}</td>
          <td>{$value.delivery_time}</td>
        </tr>
        {/foreach}
      {/if}
    {/if}
    </tbody>
  </table>
</section>
{literal}
<style type="text/css">
.product-variants>.product-variants-item select {
    max-width: 100%;
}
.product-discounts{
  display: none !important;
}
.product-discountss{
  margin-top: 15px !important;
}
.table-product-discountss {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.table-product-discountss td, #customers th {
  border: 1px solid #ddd;
  padding: 10px;
}
.table-product-discountss tr:nth-child(even){
  background-color: #f2f2f2;
}
.table-product-discountss tr:hover {
  background-color: #ddd;
}
.table-product-discountss th {
  padding: 10px;
  text-align: left;
  background-color: #0080c1;
  color: white;
}
section.part-number {}

section.part-number .box {
  display: inline-block;
  margin: 5px 3px 5px 0px;
}
.product-additional-info .social-sharing {
  display: none;
}
#product-availability {
    /*margin: 10px 10px 0;*/
    /*position: absolute;*/
    /*width: 300px;*/
    /*left: -70px;*/
    float: right;
    margin-top: -30px;
}
.product-actions .control-label{
  width: 70px;
}
.box-container {}



section.part-number .box input {
    display: block;
    width: 70px;
    width: 34px;
    padding: 5px;
    border: 2px solid #444444;
    font-weight: bold;
}
section.part-number .box:first-child input {
    width: 130px;
    width: 18%;
    max-width: 60px;
    text-align: center;
}

body#product form#add-to-cart-or-refresh {
    display: grid;
}
body#product .product-actions .product-additional-info {
    order: 2;
}
body#product .product-actions .product-add-to-cart {
    order: 3;
}

body#product form .product-quantity{
  display: inline-block;width: 70%;
}
body#product .product-actions form .control-label {
    float: left;
    display: inline-block;
    width: 80px;
    vertical-align: top;
    margin-top: 7px;
}
body#product form .product-quantity .qty {
    float: none;
    display: inline-block;
    margin: 0px;
    vertical-align: top;
}
body#product form .product-quantity .add {
    float: right;
    display: inline-block;
    margin: 0px;
    vertical-align: top;
    position: relative;
}
body#product .product-variants>.product-variants-item:last-child {
    width: 100%;
    display: block;
}

body#product .product-variants>.product-variants-item {
    display: inline-block;
    /*width: 45%;*/
    margin: 10px 0px;
}

body#product .product-variants>.product-variants-item:last-child span {
    width: 100%;
}   

/*new styling*/


.displayProductAdditionalInfo2 .panel-group{
    display:none;
   
}

.displayProductAdditionalInfo2 .price-request{
    display:none;
}



.product-additional-info .part-number{
    display:none;
    
}

.product-additional-info2 .description-product-details-col {
    display:none;
}


.displayProductAdditionalInfo2 .description-product-details-col {
    display:none;
}

.panel-group1{
    display:none;
}



.product-additional-info-2{
    display:none;
}

.description-product-details-col{

}

.class {
    display:none;
}

.panelg.panel-group{
    display:none;
}

/*.description-product-details-col{
    height:500px;
    width:100%;
    position:relative;
    top:100%;
    overflow:hidden;
}*/

/*.description-product-details-col:nth-child(3n+3){
    display:none;
}*/
.description-product-details-col:nth-child(-n+3) {
    display:none;
}




</style>
{/literal}