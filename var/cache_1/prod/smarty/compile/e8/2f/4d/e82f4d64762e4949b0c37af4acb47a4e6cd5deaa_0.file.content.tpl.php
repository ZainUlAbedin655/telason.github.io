<?php
/* Smarty version 3.1.33, created on 2019-07-23 17:45:55
  from '/home/telaso5/public_html/admin590yzbdua/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d369f13ead369_48214611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e82f4d64762e4949b0c37af4acb47a4e6cd5deaa' => 
    array (
      0 => '/home/telaso5/public_html/admin590yzbdua/themes/default/template/content.tpl',
      1 => 1545011065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d369f13ead369_48214611 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
