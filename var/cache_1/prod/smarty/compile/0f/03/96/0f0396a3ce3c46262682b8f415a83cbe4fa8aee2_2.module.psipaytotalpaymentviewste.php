<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from 'module:psipaytotalpaymentviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c32af05_20069988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f0396a3ce3c46262682b8f415a83cbe4fa8aee2' => 
    array (
      0 => 'module:psipaytotalpaymentviewste',
      1 => 1559035065,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66c32af05_20069988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
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
<?php echo '<script'; ?>
>
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
               if(myObj.msg==1)
               {
                window.location.href=myObj.message;
               }
               else
               {
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
<?php echo '</script'; ?>
> 
<form id="submit_requestform" name="submit_requestform">
        <div id="response" class="response" style="display: none;"></div> 
        <div id="Loading" class="Loding" style="display: none;"></div>
    <dl>
      <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cardholder Name','d'=>'Modules.Ipaytotalpayment.Shop'),$_smarty_tpl ) );?>
<span class="required">*</span></dt>
      <dd><input type="textbox" maxlength="50" autocomplete="off" name="cardholder_name" value="" placeholder="Cardholder Name"></dd>
      <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Number','d'=>'Modules.Ipaytotalpayment.Shop'),$_smarty_tpl ) );?>
<span class="required">*</span></dt>
      <dd><input type="textbox" maxlength="16" name="cardholder_number" value=""  placeholder="Cardholder Number" 
      inputmode="numeric" autocomplete="cc-number" autocorrect="no" autocapitalize="no" spellcheck="no" type="tel"></dd>
      <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiry (MM/YYYY)','d'=>'Modules.Ipaytotalpayment.Shop'),$_smarty_tpl ) );?>
<span class="required">*</span></dt>
      <dd><input type="textbox" name="card_expiry" value=""  placeholder="MM/YYYY" inputmode="numeric" autocomplete="cc-exp" autocorrect="no" autocapitalize="no" spellcheck="no" type="tel" ></dd>
      <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CVV','d'=>'Modules.Ipaytotalpayment.Shop'),$_smarty_tpl ) );?>
<span class="required">*</span></dt>
      <dd><input type="textbox" name="card_code" value="" maxlength="4" placeholder="CVV"></dd>
    </dl>
  </p>
</form>
</section>
<?php }
}
