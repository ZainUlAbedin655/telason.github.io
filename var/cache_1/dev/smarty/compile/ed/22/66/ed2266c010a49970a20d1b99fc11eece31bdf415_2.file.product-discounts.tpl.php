<?php
/* Smarty version 3.1.33, created on 2019-06-13 21:33:59
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/product-discounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d021887620c53_41522894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed2266c010a49970a20d1b99fc11eece31bdf415' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/product-discounts.tpl',
      1 => 1555686441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d021887620c53_41522894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<section class="product-discounts">

  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_discounts']) {?>

    <div class="h6 product-discounts-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Volume discounts','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1592603655d02188760ee38_75491791', 'product_discount_table');
?>


  <?php }?>

</section>

<?php }
/* {block 'product_discount_table'} */
class Block_1592603655d02188760ee38_75491791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount_table' => 
  array (
    0 => 'Block_1592603655d02188760ee38_75491791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <table class="table-product-discounts">

      <thead>

      <tr>

        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</th>

        <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['quantity_discount']['label'], ENT_QUOTES, 'UTF-8');?>
</th>

        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You Save','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</th>

      </tr>

      </thead>

      <tbody>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['quantity_discounts'], 'quantity_discount', false, NULL, 'quantity_discounts', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->value) {
?>

        <tr data-discount-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'], ENT_QUOTES, 'UTF-8');?>
" data-discount="<?php if (isset($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'], ENT_QUOTES, 'UTF-8');
}?>" data-discount-quantity="<?php if (isset($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');
}?>">

          <td><?php if (isset($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');
}?></td>

          <td><?php if (isset($_smarty_tpl->tpl_vars['quantity_discount']->value['discount'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['discount'], ENT_QUOTES, 'UTF-8');
}?></td>
          <?php if (isset($_smarty_tpl->tpl_vars['quantity_discount']->value['save'])) {?>
            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to %discount%','d'=>'Shop.Theme.Global','sprintf'=>array('%discount%'=>$_smarty_tpl->tpl_vars['quantity_discount']->value['save'])),$_smarty_tpl ) );?>
</td>
          <?php } else { ?>
            <td></td>
          <?php }?>

        </tr>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </tbody>

    </table>

    <?php
}
}
/* {/block 'product_discount_table'} */
}