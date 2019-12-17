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
    .add_anproductvideo_form { float:left; display: block; width: 100%; border-bottom: 1px solid #bbcdd2; margin: 0 0 15px 0; padding: 0 0 15px 0 }
    .add_anproductvideo_form .form-group { display: block; width: 100%; margin: 5px 0; float:left; }
    .add_anproductvideo_form .form-group
    #anproductvideos_description { overflow:hidden }
    .alert.hidden { display: none }
    .form-group { margin-bottom: 1rem; }
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

<div class='add_anproductvideo_form'>
    <h3>{l s='Add video' mod='anproductvideos'}</h3>

    {$addform|escape:'quotes':'UTF-8'}
    
    <div class="clearfix"></div>
    <div class="panel-footer">
            <a href="javascript:location.reload();" class="btn btn-danger"><i class="material-icons">clear</i> {l s='Cancel' mod='anproductvideos'}</a>
            <button type="button" name='add_anproductvideo' id="add_anproductvideo" style="margin-right:15px" class="btn btn-success pull-right"><i class="material-icons">add</i> {l s='Add video' mod='anproductvideos'}</button>
    </div>
</div>

<div class="video_list_container">
	<h3>{l s='Video list' mod='anproductvideos'}</h3>

    <div class="translations tabbable" id="anproductvideos_list_videos">
        <div class="translationsFields tab-content">
        {foreach from=$languages item=language}
            <div class='tab-pane row translationsFields-anproductvideos_list_videos_{$language.id_lang|intval} translation-label-{$language.iso_code|escape:'htmlall':'UTF-8'}'>
                <ul id="videos_list_{$language.id_lang|intval}" class="videos_list container-fluid col-sm-12 ">
                    <div id='novideos_{$language.id_lang|intval}' class="alert alert-warning {if $videos[$language.id_lang|intval]}hidden{/if}">{l s='No videos' mod='anproductvideos'}</div>
                    {foreach from=$videos[$language.id_lang|intval] item=video_content}
                    {$video_content|escape:'quotes':'UTF-8'}
                    {/foreach}
                </ul>
            </div>
        {/foreach}
        </div>
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function () {    
    if (typeof tabs_manager != 'undefined') {
        tabs_manager.onLoad('ModuleAnproductvideos', function() {
            $(window).trigger('resize');
        });
    }

    jQuery('#form_switch_language').change(function(){
        var cur_language_code = jQuery(this).val();
        jQuery('.translationsFields .active').removeClass('active').hide();
        jQuery('.translationsFields .translation-label-' + cur_language_code).addClass('active').show();
    });

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
                jQuery('#videos_list_'+id_lang).append(content);

            })({$language.id_lang|intval});
        {/foreach}

        var video = new Video(
            null,
            {$id_product|intval},
            {$id_shop|intval},
            null,
            jQuery('#anproductvideos_video').val(),
            null,
            null,
            title,
            desc,
            null
        );

        video.update(function (self) {
            var templates = JSON.parse(self.data.template);
            {foreach from=$languages item=language}
                (function (id_lang) {
                    jQuery('#anproductvideos_title_' + id_lang).val('');
                    tinyMCE.get('anproductvideos_description_' + id_lang ).setContent('');
                })({$language.id_lang|intval});
            {/foreach}
            jQuery('#anproductvideos_video').val('');
            jQuery.each(templates, function(lang_id, template) {
                jQuery('#novideos_' +  lang_id ).hide();
                jQuery('#videos_list_' +  lang_id ).append(template);
                jQuery('#videos_list_' +  lang_id ).find('textarea').each(function() {
                    tinymce.execCommand('mceAddEditor', true, $(this).attr('id'));
                });


            });
            jQuery('html').animate({
                scrollTop: $('#anproductvideos_list_videos .active ul').offset().top + $('#anproductvideos_list_videos .active ul').height()
            }, 800);
            showSuccessMessage(anproductvideo_messages.add.success);
        });

        return false;
    });

    jQuery('a.file_uploader').each(function () {
        jQuery(this).attr('href', baseAdminDir+jQuery(this).attr('href'));
    });
    
    (function () {
        $('.fancybox-media').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',
            helpers : {
                media : {}
            }
        });

        $('.video-btn').fancybox({
            'width': 900,
            'height': 600,
            'type': 'iframe',
            'autoScale': false,
            'autoDimensions': false,
            'fitToView': false,
            'autoSize': false,
            onUpdate: function(){
                $.fancybox = _$apv.fancybox;
                $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
                $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));
            },
            afterShow: function(){
                $.fancybox = _$apv.fancybox;
                $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
                $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));
            }
        });
    })();

    (function () {
        jQuery('.translations.tabbable').each(function () {
            var id = jQuery(this).attr('id');
            jQuery('.translationsFields-'+id+'_{$id_lang|intval}').addClass('active');
        });
    })();

});
</script>