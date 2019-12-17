<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:44:59
  from '/home/telaso5/public_html/themes/wolf/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66bcd8584_31381325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd71282dee43f6be936406989b91a692ee094b546' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/_partials/form-errors.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66bcd8584_31381325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9210064435d30f66bcd6fa8_53749806', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_9210064435d30f66bcd6fa8_53749806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_9210064435d30f66bcd6fa8_53749806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
