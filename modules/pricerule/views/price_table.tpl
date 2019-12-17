<section class="product-discountss  price_table-tpl" data-currency_id="{$currency_id}">
  <table class="table-product-discountss hello-rehman">
    <thead>
      <tr>
        <th>Quantity</th>
        <th>Price</th>
        <th>Delivery</th>
      </tr>
    </thead>
    <tbody>
      {if $price_rule|@count gt 0 }
        {if $price_rule != ''}
          {foreach from=$price_rule item="value" name='value'}
            <tr>
              <td>{$value.min_quantity}+</td>
              <td data-rule-price="{($value.rule_price*$currencyMultipler)}" data-product_price="{$product_price}">
                {$currency['sign']}
                {if $value.discount_type =='percentage'}
                  {$product_price-(($value.rule_price*$currencyMultipler)*$product_price/100)|string_format:"%.2f"}
                {else}
                  {$product_price-($value.rule_price*$currencyMultipler)|string_format:"%.2f"}
                {/if}
              </td>
              <td>{$value.delivery_time}</td>
            </tr>
          {/foreach}
        {/if}
      {/if}
    </tbody>
  </table>
</section>