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
<div class="anproductvideos anproductvideo-grid clearfix">
	{foreach from=$videos.$id_lang item=video_part}
	<div class="list_video_wr">{$video_part nofilter}</div>
	{/foreach}
	{if $apv_configuration['ANPRODUCTVIDEOS_YOUTUBE_ALLOW_AUTOPLAY']}
		<script>
            var navLinks = document.getElementsByClassName('nav-link');
            var eventLink;
            Array.prototype.forEach.call(navLinks, function(navLink) {
                if (navLink.textContent == "Video" || navLink.textContent == "Videos") {
                    eventLink = navLink;
                }
            });
            if (eventLink) {
                eventLink.addEventListener("click", function(){
                    document.querySelectorAll('.videoYoutubePlayer').forEach(function(video) {
                        video.src += "&autoplay=1";
                    });
                });
            }

		</script>
	{/if}
	{if $apv_configuration['ANPRODUCTVIDEOS_VIMEO_ALLOW_AUTOPLAY']}
		<script>
            var navLinks = document.getElementsByClassName('nav-link');
            var eventLink;
            Array.prototype.forEach.call(navLinks, function(navLink) {
                if (navLink.textContent == "Video" || navLink.textContent == "Videos") {
                    eventLink = navLink;
                }
            });
            if (eventLink) {
                eventLink.addEventListener("click", function(){
                    document.querySelectorAll('.videoVimeoPlayer').forEach(function(video) {
                        video.src += "&autoplay=1";
                    });
                });
            }

		</script>
	{/if}
</div>
{/if}