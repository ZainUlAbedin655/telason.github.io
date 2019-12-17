<!-- Block currencies module -->
<script type="text/javascript" src="{$module_dir}blockcurrencies.js"></script>
<div id="currencies_block_top" style="float: right;">
	<form id="setCurrency" action="{$request_uri}" method="post">
    {if $currenciesAsDropDown}
     {if $beforeCurrencies AND $labelEnabled}
        <p  style="text-align:left;display:{if $showInSameLine}block {else}inline-block {/if}">
            {l s='Currency' mod='blockcurrencies'}
        </p>
        {/if}
    <select onchange="setCurrency(this.value)" style="display:inline-block">
            {foreach from=$currencies key=k item=f_currency}
                <option value="{$f_currency.id_currency}" {if isset($id_currency_cookie)}{if $id_currency_cookie == $f_currency.id_currency} selected{/if}{/if}>
                    
                    {$f_currency.name}
                    
                    <span style="float: right;">{$f_currency.sign}</span>
                </option>
            {/foreach}
            </select> 
    {else}
		<ul>
        {if $labelEnabled AND $beforeCurrencies}
        <li style="display:block; padding-top: 4px;">{l s='Currency' mod='blockcurrencies'}</li>
        {if $showInSameLine}<br />{/if}
        {/if}
			{foreach from=$currencies key=k item=f_currency}
				<li {if isset($id_currency_cookie)}{if $id_currency_cookie == $f_currency.id_currency}class="selected"{/if}{/if} style="padding-top: 4px;">
                    <a href="javascript:setCurrency({$f_currency.id_currency});" title="{$f_currency.name}">
                    <img src="../../img/l/{$f_currency.id_currency}.jpg" alt="">
                    <span style="float: right;">{$f_currency.sign}</span>
                    </a>
					<!-- <a href="javascript:setCurrency({$f_currency.id_currency});" title="{$f_currency.name}">{$f_currency.sign}</a> -->
				</li>
			{/foreach}
		</ul>
   {/if}
    <input type="hidden" name="id_currency" id="id_currency" value=""/>
    <input type="hidden" name="SubmitCurrency" value="" />
    {if $labelEnabled AND !$beforeCurrencies}
        <p style="text-align:left;display:{if $showInSameLine}block {else}inline-block {/if}">
            {l s='Currency' mod='blockcurrencies'} : {$blockcurrencies_sign}
        </p>
	{/if}   
	</form>
</div>
<!-- /Block currencies module -->
<div class="contact-us">
    <p class="contact-us-p">Contact Us</p>
    <p class="contact-us-p" style="font-weight: bold;">UK +44 1213 680279</p>
    <p class="contact-us-p" style="font-weight: bold;">US +1 858 284 4388</p>
    <p class="contact-us-p" style="font-weight: bold;"><a href="mailto:sales@telason.com">sales@telason.com</a></p>
</div>
