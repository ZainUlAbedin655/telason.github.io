<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/cart-summary-product-line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c34ba72_84880484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee946ee14bcc4ab57474e8856d6f4caf6125210' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/cart-summary-product-line.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66c34ba72_84880484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2087691845d30f66c3489e0_74079733', 'cart_summary_product_line');
?>

<?php }
/* {block 'cart_summary_product_line'} */
class Block_2087691845d30f66c3489e0_74079733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_product_line' => 
  array (
    0 => 'Block_2087691845d30f66c3489e0_74079733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="media-left">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <img class="media-object" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    </a>
  </div>
  <div class="media-body">
    <span class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="product-quantity">x<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="product-price float-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'cart_summary_product_line'} */
}
