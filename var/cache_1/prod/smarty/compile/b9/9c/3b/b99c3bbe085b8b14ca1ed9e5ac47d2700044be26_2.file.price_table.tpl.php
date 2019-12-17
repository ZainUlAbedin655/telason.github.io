<?php
/* Smarty version 3.1.33, created on 2019-07-13 10:32:05
  from '/home/telaso5/public_html/modules/pricerule/views/price_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d290a65d166d7_87378719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b99c3bbe085b8b14ca1ed9e5ac47d2700044be26' => 
    array (
      0 => '/home/telaso5/public_html/modules/pricerule/views/price_table.tpl',
      1 => 1560768352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d290a65d166d7_87378719 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="product-discountss  price_table-tpl" data-currency_id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_id']->value, ENT_QUOTES, 'UTF-8');?>
">
  <table class="table-product-discountss hello-rehman">
    <thead>
      <tr>
        <th>Quantity</th>
        <th>Price</th>
        <th>Delivery</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($_smarty_tpl->tpl_vars['price_rule']->value) > 0) {?>
        <?php if ($_smarty_tpl->tpl_vars['price_rule']->value != '') {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['price_rule']->value, 'value', false, NULL, 'value', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <tr>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['min_quantity'], ENT_QUOTES, 'UTF-8');?>
+</td>
              <td data-rule-price="<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['value']->value['rule_price']*$_smarty_tpl->tpl_vars['currencyMultipler']->value), ENT_QUOTES, 'UTF-8');?>
" data-product_price="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_price']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>

                <?php if ($_smarty_tpl->tpl_vars['value']->value['discount_type'] == 'percentage') {?>
                  <?php echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['product_price']->value-(($_smarty_tpl->tpl_vars['value']->value['rule_price']*$_smarty_tpl->tpl_vars['currencyMultipler']->value)*$_smarty_tpl->tpl_vars['product_price']->value/100)), ENT_QUOTES, 'UTF-8');?>

                <?php } else { ?>
                  <?php echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['product_price']->value-($_smarty_tpl->tpl_vars['value']->value['rule_price']*$_smarty_tpl->tpl_vars['currencyMultipler']->value)), ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </td>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
      <?php }?>
    </tbody>
  </table>
</section><?php }
}
