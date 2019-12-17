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
<div class="video_frame">
    <div class="video_inner">
    {if $type == 'youtube'}
    <div class="video-preview">
        <iframe type="text/html" id="test1"  class="videoYoutubePlayer" frameborder="0" src="{$video|escape:'htmlall':'UTF-8'}?enablejsapi=1&version=3&html5=1&showinfo={$apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_INFO']|intval}&autoplay={$apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_ALLOW_AUTOPLAY']|intval}&mute={$apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_ALLOW_AUTOPLAY']|intval}&disablekb={$apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_DISABLE_KEYBOARD_CONTROL']|intval}&controls={$apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_ALLOW_CONTROLS']|intval}{if $apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_VIDEO_ANNOTATION'] == 0}&iv_load_policy=3{/if}"
        {if $apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_FULL_SCREEN'] == 1}  webkitAllowFullScreen mozallowfullscreen allowFullScreen{/if}
        ></iframe>
    </div>
    {elseif $type == 'vimeo'}
    <div class="video-preview">
        <iframe class="videoVimeoPlayer" src="{$video|escape:'htmlall':'UTF-8'}?muted={$apv_configuration['ANPRODUCTVIDEOS_VIMEO_ALLOW_AUTOPLAY']|intval}&autoplay={$apv_configuration['ANPRODUCTVIDEOS_VIMEO_ALLOW_AUTOPLAY']|intval}&loop={$apv_configuration['ANPRODUCTVIDEOS_VIMEO_LOOP']|intval}&byline={$apv_configuration['ANPRODUCTVIDEOS_VIMEO_BYLINE']|intval}&title={$apv_configuration['ANPRODUCTVIDEOS_VIMEO_TITLE']|intval}" width="100%" height="auto" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
    {elseif $type == 'internal'}
    <video width="100%" id="video_item_{$id|intval}" class="video-js vjs-default-skin" {if $cover}poster="{$cover|escape:'htmlall':'UTF-8'}"{/if}>
        <source src="{$video|escape:'quotes':'UTF-8'}" type="video/{$format|escape:'htmlall':'UTF-8'}" />
            <p class="vjs-no-js">{l s='To view this video please enable JavaScript, and consider upgrading to a web browser that' mod='anproductvideos'} <a href="http://videojs.com/html5-video-support/" target="_blank">{l s='supports HTML5 video' mod='anproductvideos'}</a></p>
    </video>

    <script type="text/javascript">
        videojs("video_item_{$id|intval}", {
            "autoplay": {if ($apv_configuration['ANPRODUCTVIDEOS_CUSTOM_AUTOPLAY'] == 1)}true{else}false{/if},
            "preload": {if ($apv_configuration['ANPRODUCTVIDEOS_CUSTOM_PRELOAD'] == 1)}true{else}false{/if},
            "controls": 1,
            "loop": {if ($apv_configuration['ANPRODUCTVIDEOS_CUSTOM_LOOP'] == 1)}true{else}false{/if}
        }, function() {
            var player = this;
            $(window).resize(function () {
                var item = $(".video_inner:visible");
                if (item.length) {
                    player.width(item.width());
                }
            });
        }).on("play", function () {
            $(window).trigger("resize");
        });
    </script>
    {/if}
    </div>
	{if ($title!='' OR $description!='')}
	<div class="video_frame-descr">
		{if ($title!='')}<h3>{$title|escape:'htmlall':'UTF-8'}</h3>{/if}
		{if ($description!='')}<p>{$description nofilter}</p>{/if}
	</div>
	{/if}
</div>