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
*  @author    Anvanto (anvantoco@gmail.com)
*  @copyright 2007-2018  http://anvanto.com
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

(function ($) {
    $(document).ready(function () {
        var count = 0;
        $('section.page-product-box').each(function () {
            // console.log(this);
            if ($(this).children().length > 0) {
                count++;
                var con = $('#an_bootstraptabs');
                if (con.attr('data-type') == 'accordion' || con.attr('data-type') == 'two_cols_accordion') {
                    con.find('.bs-example').append('\
                    <div class="panel panel-default'+(con.attr('data-type') == 'two_cols_accordion' ? ' center-column col-xs-6 col-sm-6' : '')+'">\
                        <div class="panel-heading">\
                            <h4 class="panel-title">\
                                <a href="#TabBoot'+count+'" data-parent="#accordion" data-toggle="collapse" class="collapsed">'+$(this).find('h3').html()+'</a>\
                            </h4>\
                        </div>\
                        <div class="panel-collapse collapse"  id="TabBoot'+count+'" >\
                            <div class="panel-body">'+
                                $('<div>').append($(this).find('h3').next()).html()+'\
                            </div>\
                        </div>\
                    </div>\
                    ');

                    if (count == 1) {
                        con.find('.panel-title a:first').click();
                    }
                } else {
                    con.find('ul.nav-tabs').append('<li class="'+(count==1?'active':'')+'"><a href="#TabBoot'+count+'">'+$(this).find('h3').html()+'</a></li>');
                    con.find('.tab-content').append('<div class="tab-pane fade'+(count==1?' active in':'')+'" id="TabBoot'+count+'">'+
                    $('<div>').append($(this).find('h3').next()).html()+'</div>');
                }
            }
        });

        $('ul.nav-tabs a').click(function () {
            $(this).tab('show');
            var id = $(this).attr('href');
            if (!$(id).hasClass('has-bx')) {
                $(id).addClass('has-bx');
                if ($(id).find('.bxslider').length > 0) {
                    setTimeout(function () {
                        $('#'+$(id).find('.bxslider').attr('id')).bxSlider1({
                            minSlides: 1,
                            maxSlides: 6,
                            slideWidth: 178,
                            slideMargin: 20,
                            pager: false,
                            nextText: '',
                            prevText: '',
                            moveSlides:1,
                            infiniteLoop:false,
                            hideControlOnEnd: true
                        });
                    }, 300);
                }
            }
            
            return false;
        });

        $('section.page-product-box').hide();
    });
})(jQuery);
