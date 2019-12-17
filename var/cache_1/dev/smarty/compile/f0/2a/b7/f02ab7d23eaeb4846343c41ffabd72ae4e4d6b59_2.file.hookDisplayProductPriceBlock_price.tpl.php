<?php
/* Smarty version 3.1.33, created on 2019-06-13 22:32:03
  from '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0226230cf199_37638549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02ab7d23eaeb4846343c41ffabd72ae4e4d6b59' => 
    array (
      0 => '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl',
      1 => 1545011154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0226230cf199_37638549 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'])) {?>
        <span class="aeuc_shipping_label">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'], ENT_QUOTES, 'UTF-8');?>
" class="iframe">
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

            </a>
        </span>
    <?php }
}
}
}
