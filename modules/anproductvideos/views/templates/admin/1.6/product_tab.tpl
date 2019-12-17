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
<style type='text/css'>
	.video_item {
		width:100% !important;
		float:left !important;
	}
	.videos_list {
		width:100%;
	}
</style>
<script type="text/javascript">
    var anproductvideos_controller_url = decodeURIComponent('{$theme_url|escape:'url':'UTF-8'}&ajax');
    var videos = new Array();
    var video_position = new Array();

    {foreach from=$languages item=language}
	videos[{$language.id_lang|intval}] = new VideoCollection();
	video_position[{$language.id_lang|intval}] = new Array();
    {/foreach}

    var anproductvideo_messages = JSON.parse("{$anproductvideos_msg|escape:'javascript':'UTF-8'}");
</script>
<div class="panel product-tab">
    <h3>{l s='Add video' mod='anproductvideos'}</h3>
    <form action='' id='add_anproductvideo_form'>
	   {$addform|escape:'quotes':'UTF-8'}
       <div class="panel-footer">
            <a href="javascript:location.reload();" class="btn btn-danger"><i class="process-icon-cancel"></i> {l s='Cancel' mod='anproductvideos'}</a>
            <button type="button" name='add_anproductvideo' id="add_anproductvideo" class="btn btn-success pull-right"><i class="process-icon-save"></i> {l s='Add video' mod='anproductvideos'}</button>
        </div>
    </form>
</div>
<div class="panel product-tab">
	<div class="section container-fluid" data-lang="1">
		<h3>{l s='Video list' mod='anproductvideos'}</h3>
        {foreach from=$languages item=language}
		<ul id="videos_list_{$language.id_lang|intval}" class="videos_list container-fluid translatable-field row lang-{$language.id_lang|intval}">
            <div id='novideos_{$language.id_lang|intval}' class="alert alert-warning {if isset($videos[$language.id_lang|intval])}hidden{/if}">{l s='No videos' mod='anproductvideos'}</div>
            {if isset($videos[$language.id_lang|intval])}
                {foreach from=$videos[$language.id_lang|intval] item=video_content}
                	{$video_content|escape:'quotes':'UTF-8'}
                {/foreach}
            {/if}
		</ul>
        {/foreach}
	</div>
    <div class="panel-footer">
        <a href="javascript:location.reload();" class="btn btn-default"><i class="process-icon-cancel"></i> Cancel</a>
        <button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> Save</button>
        <button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> Save and stay</button>
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function () {
    hideOtherLanguageCustom({$id_lang|escape:'htmlall':'UTF-8'}, 1);
    
    if (typeof tabs_manager != 'undefined') {
        tabs_manager.onLoad('ModuleAnproductvideos', function() {
            $(window).trigger('resize');
        });
    }

    (function (){
        //tinyMCE.execCommand('mceRemoveControl', false, 'autoload_rte_anproductvideos');
        tinySetup({
            editor_selector: "autoload_rte_anproductvideos",
            setup : function(ed) {
                ed.on('init', function(ed) {
                    if (typeof ProductMultishop.load_tinymce[ed.id] != 'undefined') {
                        tinyMCE.triggerSave();
                    }
                });
              
                ed.on('keydown', function(ed, e) {
                    tinyMCE.triggerSave();
                });
            }
        });
    })();

    {foreach from=$languages item=language}
		var video_group_{$language.id_lang|intval} = document.getElementById('videos_list_{$language.id_lang|intval}');
		jQuery('#videos_list_{$language.id_lang|intval}').sortable({
			items: 'li',
			handle: '.move_handler_button',
			animation: 150,
			stop: function(event) {
				videos[{$language.id_lang|intval}].update_order(function(response) {
					if (response.success === true) {
						showSuccessMessage(anproductvideo_messages.update_order.success);
					} else {
						showErrorMessage(anproductvideo_messages.std.error);
					}
				});
                jQuery(video_group_{$language.id_lang|intval}).find('textarea').each(function() {
                    tinymce.execCommand('mceAddEditor', true, $(this).attr('id'));
                });
			},
			start: function(event,ui) {
                var active = jQuery('#videos_list_{$language.id_lang|intval}').children().eq(ui.item.index());
                ui.item.starPos = jQuery('#videos_list_{$language.id_lang|intval} .video_item').index(active);
				jQuery(this).attr('startId',ui.item.index());
				$(video_group_{$language.id_lang|intval}).find('textarea').each(function() {
					tinymce.execCommand('mceRemoveEditor', false, $(this).attr('id'));
				});
			},
			update: function( evt,ui) {
                var endPos = jQuery('#videos_list_{$language.id_lang|intval}').children().eq(ui.item.index());
                videos[{$language.id_lang|intval}].change_sorting(ui.item.starPos,jQuery('#videos_list_{$language.id_lang|intval} .video_item').index(endPos));
				jQuery(video_group_{$language.id_lang|intval}).find('textarea').each(function() {
					tinymce.execCommand('mceAddEditor', true, $(this).attr('id'));
				});
			}
		});
    {/foreach}
    jQuery('#add_anproductvideo').on('click', function () {
        var desc = {};
        var title = {};

        {foreach from=$languages item=language}
        (function (id_lang) {
            var content = tinyMCE.get('anproductvideos_description_'+id_lang);
            title[id_lang] = jQuery('input#anproductvideos_title_'+id_lang).val();
            
            if (typeof content !== undefined) {
                desc[id_lang] = content.getContent(JSON.parse("{$tinymce_content_format|escape:'javascript':'UTF-8'}"));
            } else {
                desc[id_lang] = jQuery('textarea#anproductvideos_description_'+id_lang).val();
            }
        })({$language.id_lang|intval});
        {/foreach}

        var video = new Video(
            null,
            {$id_product|intval},
            {$id_shop|intval},
            null,
            jQuery('input#anproductvideos_video').val(),
            null,
            jQuery('input#anproductvideos_cover').val(),
            title,
            desc,
            null
        );

        video.update(function (self) { });
        
        if (location.href.search('&key_tab=ModuleAnproductvideos') != -1) {
            location.reload();
        } else {
            location.href += '&key_tab=ModuleAnproductvideos';
        }

        return false;
    });
    
    (function () {
        jQuery('.fancybox-media').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',
            helpers : {
                media : {}
            }
        });

        jQuery('.video-btn').fancybox({
            'width': 900,
            'height': 600,
            'type': 'iframe',
            'autoScale': false,
            'autoDimensions': false,
            'fitToView': false,
            'autoSize': false,
            onUpdate: function(){
                $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
                $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));
            },
            afterShow: function(){
                $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
                $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));
            }
        });
    })();
});
</script>