{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    Apply Novation (Artem Zwinger)
*  @copyright 2016-2017 Apply Novation
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}
<input type="hidden" name="action" value="redirection">
<div class="form-group">
  <label class="control-label col-lg-2" for="name_{$default_language|intval}">
    <span class="label-tooltip" data-toggle="tooltip" title="{l s='Enter link to video(Youtube, Vimeo) here. Invalid characters <>;=#{}' mod='anproductvideos'}">{l s='YouTube/Vimeo Link' mod='anproductvideos'}</span>
  </label>
  <div class="col-sm-9">
    <div class="input-group col-sm-9" style="padding-right:2px;">
      <input id="anproductvideos_video" type="text" name="anproductvideos_video_link" class="form-control updateCurrentLink" />
      {*<span class="input-group-addon"><a href="filemanager/dialog.php?type=3&amp;field_id=anproductvideos_video" data-input-name="anproductvideos_video" type="button" class="video-btn"><span class="icon-file"></span></a></span>*}
    </div>
  </div>
</div>
{*<div class="form-group">*}
  {*<label class="control-label col-lg-2" for="name_{$default_language|intval}">*}
    {*<span class="label-tooltip" data-toggle="tooltip" title="{l s='Add cover image (local video only). Invalid characters <>;=#{}' mod='anproductvideos'}">{l s='Cover image' mod='anproductvideos'}</span>*}
  {*</label>*}
  {*<div class="col-lg-5">*}
    {*<div class="input-group">*}
      {*<input id="anproductvideos_cover" type="text" name="anproductvideos_video_anproductvideos_cover_image" class="form-control updateCurrentImage" />*}
      {*<span class="input-group-addon"><a href="filemanager/dialog.php?type=1&amp;field_id=anproductvideos_cover" data-input-name="anproductvideos_cover" type="button" class="video-btn"><span class="icon-file"></span></a></span>*}
    {*</div>*}
    {*<p>{l s='Not available using a video from YouTube or Vimeo' mod='anproductvideos'}</p>*}
  {*</div>*}
{*</div>*}
<div class="form-group">
  <label class="control-label col-lg-2" for="name_{$default_language|intval}">
    <span class="label-tooltip" data-toggle="tooltip" title="{l s='Enter heading to video. Invalid characters <>;=#{}' mod='anproductvideos'}">
      {l s='Heading' mod='anproductvideos'}
    </span>
  </label>
  <div class="col-sm-9">
    {foreach from=$languages item=language}
      {if $languages|count > 1}
      <div class="translatable-field row lang-{$language.id_lang|intval}">
        <div class="col-sm-9">
      {/if}
          <div class="input-group" style="width: 100%">
            <input type="text" id="anproductvideos_title_{$language.id_lang|intval}" class="form-control updateCurrentLink" name="anproductvideos_title_{$language.id_lang|intval}" onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" onblur="updateLinkRewrite();">
          </div>
      {if $languages|count > 1}
        </div>
        <div class="col-lg-2">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            {$language.iso_code|escape:'htmlall':'UTF-8'}
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            {foreach from=$languages item=language}
                <li><a href="javascript:tabs_manager.allow_hide_other_languages = false;hideOtherLanguageCustom({$language.id_lang|intval}, 1);">{$language.name|escape:'htmlall':'UTF-8'}</a></li>
            {/foreach}
          </ul>
        </div>
      </div>
      {/if}
    {/foreach}
  </div>
</div>
<div class="form-group">
  <label class="control-label col-lg-2" for="anproductvideos_description_{$default_language|intval}">
    <span class="label-tooltip" data-toggle="tooltip" title="{l s='Videos description.' mod='anproductvideos'}">
      {l s='Description' mod='anproductvideos'}
    </span>
  </label>
  <div class="col-lg-9">
    {foreach from=$languages item=language}
      {if $languages|count > 1}
      <div class="translatable-field row lang-{$language.id_lang|intval}">
        <div class="col-lg-9">
      {/if}
          <textarea id="anproductvideos_description_{$language.id_lang|intval}" name="anproductvideos_description_{$language.id_lang|intval}" class="autoload_rte_anproductvideos textarea-autosize"></textarea>
          <span class="counter" data-max="none"></span>
      {if $languages|count > 1}
        </div>
        <div class="col-lg-2">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            {$language.iso_code|escape:'htmlall':'UTF-8'}
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            {foreach from=$languages item=language}
            <li><a href="javascript:tabs_manager.allow_hide_other_languages = false;hideOtherLanguageCustom({$language.id_lang|intval}, 1);">{$language.name|escape:'htmlall':'UTF-8'}</a></li>
            {/foreach}
          </ul>
        </div>
      </div>
      {/if}
    {/foreach}
</div>
</div>