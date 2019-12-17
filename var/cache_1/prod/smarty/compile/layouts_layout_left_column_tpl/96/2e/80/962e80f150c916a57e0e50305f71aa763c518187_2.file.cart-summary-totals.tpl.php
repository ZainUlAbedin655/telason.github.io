<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c36b3d2_77540182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '962e80f150c916a57e0e50305f71aa763c518187' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/cart-summary-totals.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66c36b3d2_77540182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="card-block cart-summary-totals">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15540045105d30f66c3660c2_70189365', 'cart_summary_total');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12138993685d30f66c369318_66506241', 'cart_summary_tax');
?>


</div>
<?php }
/* {block 'cart_summary_total'} */
class Block_15540045105d30f66c3660c2_70189365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
    0 => 'Block_15540045105d30f66c3660c2_70189365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
class Block_12138993685d30f66c369318_66506241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
    0 => 'Block_12138993685d30f66c369318_66506241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
