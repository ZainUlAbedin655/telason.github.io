{if $price_rule|@count gt 0 }
<section class="product-discountss product-front-tpl-theme-cchild">
      <p class="h6 product-discounts-title">Volume discounts</p>
      <table class="table-product-discountss">
        <thead>
        <tr>
          <th>Quantity</th>
          <th>Price</th>
          <th>Delivery Time</th>
        </tr>
        </thead>
        <tbody>
          {if $price_rule != ''}
          {foreach from=$price_rule item=value}
          <tr>
            <td>{$value->min_quantity}+</td>
            <td>{if $value->discount_type =='percentage'}{$product_price-($value->rule_price*$product_price/100)}{else}{$product_price-$value->rule_price}{/if}</td>
            <td>{$value->delivery_time}</td>
          </tr>
          {/foreach}
          {/if}  
      </tbody>
      </table>
  </section>
  {/if}
  {literal}
  <style type="text/css">
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
  padding: 8px;
}
.table-product-discountss tr:nth-child(even){
  background-color: #f2f2f2;
}
.table-product-discountss tr:hover {
  background-color: #ddd;
}
.table-product-discountss th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0080c1;
  color: white;
}
  </style>
  {/literal}