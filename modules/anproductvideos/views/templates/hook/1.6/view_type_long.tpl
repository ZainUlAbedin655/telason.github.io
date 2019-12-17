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
{if count($videos.$id_lang) > 0}
<section id="product-videos" class="page-product-box">
	<h3 class="page-product-heading">{if count($videos.$id_lang) > 1}{l s='Videos' mod='anproductvideos'}{else}{l s='Video' mod='anproductvideos'}{/if}</h3>
	<div class="anproductvideos anproductvideo-long">
		{foreach from=$videos.$id_lang item=video_part}
		<div class="list_video_wr">{$video_part}</div>
		{/foreach}
	</div>
	{if $apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_ALLOW_AUTOPLAY']}
		<script>
            if (navigator.userAgent.indexOf("Firefox") > 0) {
                document.querySelectorAll('.videoYoutubePlayer').forEach(function (video) {
                    console.log('123');
                    video.src = video.src.replace('mute=','');
                });
            }
		</script>
	{/if}
	{if $apv_configuration['ANPRODUCTVIDEOS_VIMEO_ALLOW_AUTOPLAY']}
		<script>
            if (navigator.userAgent.indexOf("Firefox") > 0) {
                document.querySelectorAll('.videoVimeoPlayer').forEach(function (video) {
                    video.src.replace('mute=', '');
                });
            }
		</script>
	{/if}
</section>
{/if}