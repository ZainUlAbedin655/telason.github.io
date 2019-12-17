<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c341e42_77814188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2887cf1c723c8c86dba2209661b9f6b21a7ea1' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/cart-summary.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-product-line.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
  ),
),false)) {
function content_5d30f66c341e42_77814188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942222805d30f66c339f55_50845373', 'hook_checkout_summary_top');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11915861775d30f66c33b180_57236030', 'cart_summary_products');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16789481615d30f66c33ddc8_23804154', 'cart_summary_subtotals');
?>


  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11819805225d30f66c340973_07497563', 'cart_summary_voucher');
?>


  <hr class="separator">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18882914415d30f66c341412_11925005', 'cart_summary_totals');
?>


</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
class Block_942222805d30f66c339f55_50845373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
    0 => 'Block_942222805d30f66c339f55_50845373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_product_list'} */
class Block_8108697195d30f66c33c180_83568261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="collapse" id="cart-summary-product-list">
            <ul class="media-list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <li class="media"><?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        <?php
}
}
/* {/block 'cart_summary_product_list'} */
/* {block 'cart_summary_products'} */
class Block_11915861775d30f66c33b180_57236030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
    0 => 'Block_11915861775d30f66c33b180_57236030',
  ),
  'cart_summary_product_list' => 
  array (
    0 => 'Block_8108697195d30f66c33c180_83568261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="cart-summary-products">

        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</p>

        <p>
          <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'show details','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          </a>
        </p>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8108697195d30f66c33c180_83568261', 'cart_summary_product_list', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
class Block_16789481615d30f66c33ddc8_23804154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
    0 => 'Block_16789481615d30f66c33ddc8_23804154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
          <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_voucher'} */
class Block_11819805225d30f66c340973_07497563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
    0 => 'Block_11819805225d30f66c340973_07497563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
/* {block 'cart_summary_totals'} */
class Block_18882914415d30f66c341412_11925005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
    0 => 'Block_18882914415d30f66c341412_11925005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
}
