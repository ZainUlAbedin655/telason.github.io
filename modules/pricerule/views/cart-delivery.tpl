<span>Delivery Time: {$delivery_time}</span>
{if  $combinations|@count gt 0} 
{if $urls.current_url == $urls.pages.pdf_invoice}
<br />
<label>Part Number: 
{$product->reference}

{foreach from=$combinations item="value"}
{assign var=part value=$value[0]['attribute_name']|substr:0:2}
-{$part}
{/foreach}
</label>
{/if}
{/if}
