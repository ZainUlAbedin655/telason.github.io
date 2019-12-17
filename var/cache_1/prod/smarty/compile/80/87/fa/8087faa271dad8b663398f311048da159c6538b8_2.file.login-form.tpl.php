<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c07f669_82703217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8087faa271dad8b663398f311048da159c6538b8' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/login-form.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66c07f669_82703217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17513418585d30f66c07ea86_34785756', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/login-form.tpl');
}
/* {block 'form_buttons'} */
class Block_17513418585d30f66c07ea86_34785756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_17513418585d30f66c07ea86_34785756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button
    class="continue btn btn-primary float-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'form_buttons'} */
}
