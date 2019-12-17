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
    <li class="container-fluid video_item col-sm-12" id="video_item_{$id|intval}_{$id_lang|intval}_{$id_lang|intval}_{$id_lang|intval}">
		<div class="row-fluid" >
			<div class="col-md-6 col-sm-12 video_frame">
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
							<iframe src="{$video|escape:'htmlall':'UTF-8'}" class="video_iframe" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
				{/if}
                {*{if $type == 'internal'}*}
                {*<video id="example_video_{$id|intval}_{$id_lang|intval}" class="video-js vjs-default-skin" controls preload="none" {if $cover}poster="{$cover|escape:'htmlall':'UTF-8'}"{/if} data-setup="{}">*}
					{*<source src="{$video|escape:'htmlall':'UTF-8'}" type="video/{$format|escape:'htmlall':'UTF-8'}" />*}
					{*<p class="vjs-no-js">{l s='To view this video please enable JavaScript, and consider upgrading to a web browser that' mod='anproductvideos'} <a href="http://videojs.com/html5-video-support/" target="_blank">{l s='supports HTML5 video' mod='anproductvideos'}</a></p>*}
                {*</video>*}
                {*<script type="text/javascript">*}
                    {*videojs("example_video_{$id|intval}_{$id_lang|intval}_{$id_lang|intval}").ready(function() {*}
                        {*var player = this;*}

                        {*$(window).resize(function () {*}
                            {*(function (_player) {*}
                                {*var item = $("video[id^='"+_player.id_+"']").closest(".video_frame:visible");*}

                                {*if (item.length) {*}
                                    {*_player.width(item.width());*}
                                {*}*}
                            {*})(player);*}
                        {*});*}
                    {*}).on("play", function () {*}
                        {*$(window).trigger("resize");*}
                    {*});*}
                {*</script>*}
				{*{/if}*}
			</div>
			<div class="col-md-6 col-sm-12 video_form video_edit_form">
				<div class="form-group">
					<input type="text" id="anproductvideos_video_title_{$id|intval}_{$id_lang|intval}" name="anproductvideos_video_title_{$id|intval}_{$id_lang|intval}" class="form-control" value="{$title|escape:'htmlall':'UTF-8'}">
				</div>
				<div class="textarea_wrapper" style="padding:calc(56.25% - 49px) 0 0 0;position:relative;">
					<div class="form-group mce-textarea" style="overflow:auto; position:absolute;top:0;left:0;width:100%;height:100%;">
						<textarea id="anproductvideos_video_description_{$id|intval}_{$id_lang|intval}" class="autoload_rte" name="anproductvideos_video_description_{$id|intval}_{$id_lang|intval}" autocomplete="off">{$description|escape:'htmlall':'UTF-8'}</textarea>
					</div>
				</div>
			</div>
		</div>
        <div class="clearfix"></div>
		<div class="row-fluid col-sm-12">
			<div class="pull-left move_handler_button">
				<div class="btn btn-default"><i class="material-icons">flip_to_front</i> {l s='Move' mod='anproductvideos'}</div>
			</div>
			<div class="pull-right video_btndelete">
				<button type="button" onclick="deleteVideo(this, videos[{$id_lang|intval}].videos[video_position[{$id_lang|intval}][{$id|intval}]])" data-toggle="action" data-value="delete" class="btn btn-danger"><i class="material-icons">delete_forever</i> {l s='Remove video' mod='anproductvideos'}</button>
			</div>
			<div class="pull-right video_btnsave">
				<button type="button" onclick="updateVideo(this, videos[{$id_lang|intval}].videos[video_position[{$id_lang|intval}][{$id|intval}]])" class="btn btn-success"><i class="material-icons">done</i> {l s='Update title and description' mod='anproductvideos'}</button>
			</div>
		</div>
    </li>