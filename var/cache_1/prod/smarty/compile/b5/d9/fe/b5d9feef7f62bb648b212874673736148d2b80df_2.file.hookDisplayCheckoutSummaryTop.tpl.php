<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCheckoutSummaryTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c346350_68437058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5d9feef7f62bb648b212874673736148d2b80df' => 
    array (
      0 => '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCheckoutSummaryTop.tpl',
      1 => 1545011154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66c346350_68437058 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <h5 class="aeuc_scart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shopping_cart']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My shopping cart','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</a></h5>
<?php }
}
