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
<script type="text/javascript">
	video_position[{$id_lang|intval}][{$id|intval}] = videos[{$id_lang|intval}].push(new Video({$id|intval}, {$id_product|intval}, {$id_shop|intval}, {$id_lang|intval}, "{$video|escape:'htmlall':'UTF-8'}", "{$type|escape:'htmlall':'UTF-8'}", "{$cover|escape:'htmlall':'UTF-8'}", "{$title|escape:'htmlall':'UTF-8'}", "{$description|escape:'htmlall':'UTF-8'}", {$sort_order|intval})) - 1;
</script>
<li class="container-fluid video_item" id="video_item_{$id|intval}_{$id_lang|intval}_{$id_lang|intval}">
	<form action="" id="update_video_{$id|intval}_{$id_lang|intval}" method="POST">
		<div class="row-fluid" style="display: table">
			<div class="col-md-6 video_frame">
				{if $type == 'youtube'}
				<div class="video-preview">
					<div class="video_container">
						<iframe type="text/html" class="video_iframe" frameborder="0" src="{$video|escape:'htmlall':'UTF-8'}?enablejsapi=1&version=3&html5=1&showinfo=0&autoplay=0&controls=0"></iframe>
					</div>
				</div>
                {/if}
                {if $type == 'vimeo'}
                <div class="video-preview">
					<div class="video_container">
                		<iframe class="video_iframe" src="{$video|escape:'htmlall':'UTF-8'}"  frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				{/if}
                {if $type == 'internal'}
                <video id="example_video_{$id|intval}_{$id_lang|intval}" class="video-js vjs-default-skin" controls preload="none" {if $cover}poster="{$cover|escape:'htmlall':'UTF-8'}"{/if} data-setup="{}">
					<source src="{$video|escape:'htmlall':'UTF-8'}" type="video/{$format|escape:'htmlall':'UTF-8'}" />
					<p class="vjs-no-js">{l s='To view this video please enable JavaScript, and consider upgrading to a web browser that' mod='anproductvideos'} <a href="http://videojs.com/html5-video-support/" target="_blank">{l s='supports HTML5 video' mod='anproductvideos'}</a></p>
                </video>
                <script type="text/javascript">
					videojs("example_video_{$id|intval}_{$id_lang|intval}").ready(function() {
                        var player = this;

                        $(window).resize(function () {
                            (function (_player) {
                                var item = $("video[id^='"+_player.id_+"']").closest(".video_frame:visible");

                                if (item.length) {
                                    _player.width(item.width());
                                }
                            })(player);
                        });
                    }).on("play", function () {
                        $(window).trigger("resize");
                    });
                </script>
				{/if}
			</div>
			<div class="col-md-6 video_form video_edit_form">
				<div class="form-group">
					<div class="video_edit_field {if $languages|count <= 1} width-100 {/if}">
						<input type="text" id="anproductvideos_video_title_{$id|intval}_{$id_lang|intval}" name="anproductvideos_video_title_{$id|intval}_{$id_lang|intval}" value="{$title|escape:'htmlall':'UTF-8'}">
					</div>
					{if $languages|count > 1}
					<div class="buttons_translate">
						<button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown" tabindex="-1">
							{$languages[$id_lang].iso_code|escape:'htmlall':'UTF-8'}<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							{foreach from=$languages item=language}
								<li><a href="javascript:tabs_manager.allow_hide_other_languages = false;hideOtherLanguageCustom({$language.id_lang|intval}, 1);">{$language.name|escape:'htmlall':'UTF-8'}</a></li>
							{/foreach}
						</ul>
					</div>
					{/if}
				</div>
				<div class="form-group">
					<div class="textarea_wrapper video_edit_field {if $languages|count <= 1} width-100 {/if}">
						<div class="textarea_container" >
							<div  class="video_iframe">
								<textarea id="anproductvideos_video_description_{$id|intval}_{$id_lang|intval}" class="autoload_rte_anproductvideos" name="anproductvideos_video_description_{$id|intval}_{$id_lang|intval}" autocomplete="off">{$description|escape:'htmlall':'UTF-8'}</textarea>
							</div>
						</div>
					</div>
					{if $languages|count > 1}
						<div class="buttons_translate">
							<button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown" tabindex="-1">
								{$languages[$id_lang].iso_code|escape:'htmlall':'UTF-8'}<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								{foreach from=$languages item=language}
									<li><a href="javascript:tabs_manager.allow_hide_other_languages = false;hideOtherLanguageCustom({$language.id_lang|intval}, 1);">{$language.name|escape:'htmlall':'UTF-8'}</a></li>
								{/foreach}
							</ul>
						</div>
					{/if}
				</div>
			</div>
		</div>
        <div class="clearfix"></div>
		<div class="row-fluid col-sm-12">
			<div class="pull-left move_handler_button">
				<div class="btn btn-default"><i class="icon-move"></i> {l s='Move' mod='anproductvideos'}</div>
			</div>
			<div class="pull-right video_btndelete">
				<button type="button" onclick="deleteVideo(this, videos[{$id_lang|intval}].videos[video_position[{$id_lang|intval}][{$id|intval}]])" data-toggle="action" data-value="delete" class="btn btn-danger"><i class="icon-trash"></i> {l s='Remove video' mod='anproductvideos'}</button>
			</div>
			<div class="pull-right video_btnsave">
				<button type="button" onclick="updateVideo(this, videos[{$id_lang|intval}].videos[video_position[{$id_lang|intval}][{$id|intval}]])" class="btn btn-success"><i class="icon-save"></i> {l s='Update title and description' mod='anproductvideos'}</button>
			</div>
		</div>
	</form>
    <script type="text/javascript">
        $("#update_video_{$id|intval}_{$id_lang|intval}").validate();
    </script>
</li>