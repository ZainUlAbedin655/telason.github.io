<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:44:59
  from '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66bc29158_88067467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bd26478b01e7b2a082140c1d024cbedf5e9248c' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/customer-form.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66bc29158_88067467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15201647925d30f66bc252d0_55191940', "form_field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6714081125d30f66bc28719_50136653', "form_buttons");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "customer/_partials/customer-form.tpl");
}
/* {block "form_field"} */
class Block_15201647925d30f66bc252d0_55191940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_15201647925d30f66bc252d0_55191940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] === 'password' && $_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
      <p>
        <span class="font-weight-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span> <span class="font-italic"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <br>
        <span class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
      </p>
      <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "form_field"} */
/* {block "form_buttons"} */
class Block_6714081125d30f66bc28719_50136653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_6714081125d30f66bc28719_50136653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <button
      class="continue btn btn-primary float-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    </button>
<?php
}
}
/* {/block "form_buttons"} */
}
