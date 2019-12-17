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
<div class="product-variants wolf-child-product-variants" style="overflow:hidden;  ">
    
    {foreach from=$groups key=id_attribute_group item=group}
    
    
    
    
    
    
    
    <div class="nine card panel-title " style="background-color:#f1f1f1;line-height:2em; padding-left:5px; margin-bottom:3px; margin-top:3px;">Part Number Selector</div>
    
     
     
     
     
        <div class="clearfix product-variants-item  {if $group.name == 'Shell Size'}col-md-6 nopaddingl halfdropdown{/if}{if $group.name == 'Cable Entry'}col-md-6 nopaddingr halfdropdown{/if}" >
          
          <span style="width:150px; font-weight:normal;" class="control-label">{$group.name}</span>
            {if $group.group_type == 'select'}
              <select class="form-control edge" id="group_{$id_attribute_group}" data-product-attribute="{$id_attribute_group}" name="group[{$id_attribute_group}]" style="width: 100%;">
                    {foreach from=$group.attributes key=id_attribute item=group_attribute}
                      <option value="{$id_attribute}" data-key="{$id_attribute}" title="{$group_attribute.name}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name}</option>
                    {/foreach}
              </select>
            {elseif $group.group_type == 'color'}
                  <ul id="group_{$id_attribute_group}">
                    {foreach from=$group.attributes key=id_attribute item=group_attribute}
                      <li class="float-xs-left input-container">
                        <label>
                          <input class="input-color edge" type="radio" data-product-attribute="{$id_attribute_group}" name="group[{$id_attribute_group}]" value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
                          <span
                            {if $group_attribute.html_color_code}class="color" style="background-color: {$group_attribute.html_color_code}" {/if}
                            {if $group_attribute.texture}class="color texture" style="background-image: url({$group_attribute.texture})" {/if}
                          ><span class="sr-only">{$group_attribute.name}</span></span>
                        </label>
                      </li>
                    {/foreach}
                  </ul>
            {elseif $group.group_type == 'radio'}
                  <ul id="group_{$id_attribute_group}">
                    {foreach from=$group.attributes key=id_attribute item=group_attribute}
                      <li class="input-container float-xs-left">
                        <label>
                          <input class="input-radio edge" type="radio" data-product-attribute="{$id_attribute_group}" name="group[{$id_attribute_group}]" value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
                          <span class="radio-label">{$group_attribute.name}</span>
                        </label>
                      </li>
                    {/foreach}
                  </ul>
            {/if}
        </div>
                      

    {/foreach}


</div>


{literal}
<style type="text/css">

.nine:nth-child(1n+2) {
    display:none;
}



</style>
{/literal}

