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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.Loding{
    position: absolute;
    top: 97%;
    left: 30%;
    width: 300px;
    height: 18px;
    margin-top: -66px;
    margin-left: -40px;
    text-align: center;
    color: red;
    padding: 29px 30px;

}
.response{
   /* position: absolute;
    left: 30%;*/
    text-align: left;
    color: red;
    background-color: #f2f2f2;
    width: auto;
    height: auto;
    color: red;
    padding: 17px 22px;
    margin-bottom: 12px;
}
</style>
<script>
$(document).ready(function(){
  var domainstring = document.domain;
  var domain_name = document.location.hostname;
  var pathname =window.location.pathname;
  var url = document.URL;
  var str = url;
//alert("domain_name=="+domain_name);
    if(domain_name=='localhost'){
      var res = str.replace("order", "");
      //alert("resxx=="+res);
    }
    else
    {
      var res = url.replace("order", "");
  
      //alert("res=="+res);
    }
  $(".center-block").click(function(){
     var isChecked = $('[data-module-name="ps_ipaytotalpayment"]').prop("checked");
   if(isChecked==true)
     {
       $('.center-block').prop('disabled', true);
        $('#Loading').show();

          $('#Loading').html("<b>LOADING PLEASE WAIT ... DO NOT REFRESH OR CLOSE THIS PAGE. it can take up to 1 minute</b>");
          $.ajax({
          type: 'POST',
          url: res+"module/ps_ipaytotalpayment/validation",
          data: $("#submit_requestform").serialize() // getting filed value in serialize form
          })
          .done(function(data){ 
              var myObj = JSON.parse(data);
               if(myObj.msg==1){
                window.location.href=myObj.message;
               }else if(myObj.msg==9){
                window.location.href=myObj.redirect_url;
               }else{
                 $('#response').show();
                 $('.center-block').prop('disabled', false);
                  $('#response').html(myObj.message);
                  $('#Loading').hide();
                  console.log("Hi, there");
                 $( "#response" ).scrollTop( 300 );
                  /*console.log(" Sup");*/
                  //$('body').scrollTo('#response');
                }
          })
          .fail(function() { 
            $('.center-block').prop('disabled', false);
            $('#Loading').hide();
          });
          return false;
     }
  });
});
</script> 
<form id="submit_requestform" name="submit_requestform">
        <div id="response" class="response" style="display: none;"></div> 
        <div id="Loading" class="Loding" style="display: none;"></div>
    <dl>
      <dt>{l s='Cardholder Name' d='Modules.Ipaytotalpayment.Shop'}<span class="required">*</span></dt>
      <dd><input type="textbox" maxlength="50" autocomplete="off" name="cardholder_name" value="" placeholder="Cardholder Name"></dd>
      <dt>{l s='Card Number' d='Modules.Ipaytotalpayment.Shop'}<span class="required">*</span></dt>
      <dd><input type="textbox" maxlength="16" name="cardholder_number" value=""  placeholder="Cardholder Number" 
      inputmode="numeric" autocomplete="cc-number" autocorrect="no" autocapitalize="no" spellcheck="no" type="tel"></dd>
      <dt>{l s='Expiry (MM/YYYY)' d='Modules.Ipaytotalpayment.Shop'}<span class="required">*</span></dt>
      <dd><input type="textbox" name="card_expiry" value=""  placeholder="MM/YYYY" inputmode="numeric" autocomplete="cc-exp" autocorrect="no" autocapitalize="no" spellcheck="no" type="tel" ></dd>
      <dt>{l s='CVV' d='Modules.Ipaytotalpayment.Shop'}<span class="required">*</span></dt>
      <dd><input type="textbox" name="card_code" value="" maxlength="4" placeholder="CVV"></dd>
    </dl>
  </p>
</form>
</section>
