<?php
/* Smarty version 3.1.33, created on 2019-06-21 22:49:46
  from '/home/telaso5/public_html/admin590yzbdua/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0cb64a90d658_39562101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e32adf8e3b5d292974d182290a2d47cc51140ae' => 
    array (
      0 => '/home/telaso5/public_html/admin590yzbdua/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1545011065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0cb64a90d658_39562101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3716456025d0cb64a90ca05_32152337', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_3716456025d0cb64a90ca05_32152337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_3716456025d0cb64a90ca05_32152337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
