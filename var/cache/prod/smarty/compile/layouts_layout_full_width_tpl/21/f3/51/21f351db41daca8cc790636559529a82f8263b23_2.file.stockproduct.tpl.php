<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:35:04
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/stockproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bd6897b9c3_65308718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21f351db41daca8cc790636559529a82f8263b23' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/stockproduct.tpl',
      1 => 1574403718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8bd6897b9c3_65308718 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<div class="card card-default" style="overflow: hidden;">
<div style="color:#0080c1;" class=" card-header font-weight-bold text-center">Available In Stock <span style="color:#0080c1;" class="ml-5">&#10003;&#9989;&#10060;</span></div>
<div class="card-text"> Stocked product is available for immediate delivery or manufacture to order is 5 weeks from order confirmation</div>
</div>-->

<div class="card card-default grow" style="overflow: hidden; border:1px solid #ddd;">
<div style="background-color:#0A80BE; color:white; " class=" card-header    text-center">

            <span class="availability-list">Available In Stock</span>&nbsp<span style="color:White; font-size:33px; font-weight:700;" class="ml-5">&#10003;</span>

</div>
<div class="card-text">Stocked product is available for immediate delivery or manufacture to order is 5 weeks from order confirmation</div>

</div>



                   
<!--  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
            <span class="availability-list">Available In Stock</span>&nbsp<span style="color:White; font-size:25px;" class="ml-5">&#10003;</span>
            <?php } else { ?>
            <span class="availability-list">Not Available In Stock</span>&nbsp<span style="color:White; font-size:25px;" class="ml-5">&#10006;</span>
     <?php }?>-->





<style type="text/css">

.card-text {
    padding: 0.5em;
  
    font-size:15px;
    
}

.availability-list{
    font-size:18px;
    font-weight:600;
    
}

.grow{
    padding-bottom:5px;
    margin-bottom:5px;
}


/*.grow { transition: all .5s ease-in-out; }
.grow:hover { transform: scale(1.1); }*/

</style>




<?php }
}
