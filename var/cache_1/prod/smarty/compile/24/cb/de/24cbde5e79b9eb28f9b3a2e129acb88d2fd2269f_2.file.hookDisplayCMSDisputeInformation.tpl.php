<?php
/* Smarty version 3.1.33, created on 2019-07-23 15:56:56
  from '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSDisputeInformation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d368588a53897_75992978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24cbde5e79b9eb28f9b3a2e129acb88d2fd2269f' => 
    array (
      0 => '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSDisputeInformation.tpl',
      1 => 1545011154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d368588a53897_75992978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information regarding online dispute resolution pursuant to Art. 14 Para. 1 of the ODR (Online Dispute Resolution Regulation):','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

</h4>

<p>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The European Commission gives consumers the opportunity to resolve online disputes pursuant to Art. 14 Para. 1 of the ODR on one of their platforms. The platform ([1]http://ec.europa.eu/consumers/odr[/1]) serves as a site where consumers can try to reach out-of-court settlements of disputes arising from online purchases and contracts for services.','sprintf'=>array('[1]'=>'<a href="http://ec.europa.eu/consumers/odr" target="_blank" rel="nofollow">','[/1]'=>'</a>'),'d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

</p>
<?php }
}
