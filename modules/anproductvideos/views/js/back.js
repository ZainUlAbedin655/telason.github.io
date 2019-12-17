/**
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
*/
var _$apv = $;
jQuery(document).ready(function () { $.prototype.fancybox = _$apv.prototype.fancybox; });

var updateVideo = function(button, video) {
    video.title = {};
    video.description = {};
    video.title[video.id_lang] = jQuery('#anproductvideos_video_title_'+video.id+'_'+video.id_lang).val();
	video.description[video.id_lang] = tinyMCE.get('anproductvideos_video_description_'+video.id+'_'+video.id_lang).getContent({format: 'raw'});

	return video.update(function (response) {
		if (response.data.success === true) {
			showSuccessMessage(anproductvideo_messages.update.success);
		} else {
			showErrorMessage(anproductvideo_messages.std.error);
		}
	});
}

var hideOtherLanguageCustom = function(id_lang, do_resize) {
    hideOtherLanguage(id_lang);
    
    if (do_resize) {
        $(window).trigger('resize');
    }
}

var deleteVideo = function (button, video) {
	return confirm(anproductvideo_messages.delete.assurance) ? video.delete(function (response) {
		if (response.success === true) {
			showSuccessMessage(anproductvideo_messages.delete.success);
			jQuery('[id^="video_item_'+video.id+'"]').slideUp(function() { jQuery(this).remove(); });
            
            if (jQuery('#videos_list_'+video.id_lang+' li').size() - 1 == 0) {
                jQuery('#novideos_'+video.id_lang).removeClass('hidden');
            }
		} else {
			showErrorMessage(anproductvideo_messages.std.error);
		}
	}) : false;
}

jQuery(document).ready(function() {
});