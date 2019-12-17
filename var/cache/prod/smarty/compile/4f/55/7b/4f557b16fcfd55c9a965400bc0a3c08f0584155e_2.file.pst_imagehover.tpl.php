<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:45:57
  from '/home/telaso5/public_html/modules/pst_imagehover/views/templates/hook/pst_imagehover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bff5b10867_83163319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f557b16fcfd55c9a965400bc0a3c08f0584155e' => 
    array (
      0 => '/home/telaso5/public_html/modules/pst_imagehover/views/templates/hook/pst_imagehover.tpl',
      1 => 1555996371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8bff5b10867_83163319 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- <?php if ($_smarty_tpl->tpl_vars['home_image']->value) {?> -->

	<img class="replace-2x img_hover img-responsive secondary-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['home_image']->value, ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['large_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="Datasheet <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_image']->value, ENT_QUOTES, 'UTF-8');?>
" />

<!-- <?php }?> -->

<?php }
}
