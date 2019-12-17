<?php
/* Smarty version 3.1.33, created on 2019-07-21 15:29:33
  from '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d33dc1db4a145_98905372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ad2ce71af202c1c2df8fd37a1668d1e1cd1c3e' => 
    array (
      0 => '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl',
      1 => 1545011154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d33dc1db4a145_98905372 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Under conditions)','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

 </a>
<?php }
}
