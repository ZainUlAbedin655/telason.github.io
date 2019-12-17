<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:44:59
  from '/home/telaso5/public_html/themes/wolf/templates/customer/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66bc31012_10053102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c647cb7ee5f09c14308d3fd6d3d3b38bc54c034' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/customer/_partials/customer-form.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5d30f66bc31012_10053102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14103077615d30f66bc2bb70_79480419', 'customer_form');
?>

<?php }
/* {block 'customer_form_errors'} */
class Block_11141803865d30f66bc2bfe0_33924646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
class Block_8948880075d30f66bc2cf58_80204489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block "form_field"} */
class Block_19688829745d30f66bc2e785_26692168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_5289157345d30f66bc2da70_96674072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19688829745d30f66bc2e785_26692168', "form_field", $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_11170222705d30f66bc301c5_95780471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
class Block_13596639515d30f66bc2fcd5_00888988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11170222705d30f66bc301c5_95780471', "form_buttons", $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
class Block_14103077615d30f66bc2bb70_79480419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customer_form' => 
  array (
    0 => 'Block_14103077615d30f66bc2bb70_79480419',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_11141803865d30f66bc2bfe0_33924646',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_8948880075d30f66bc2cf58_80204489',
  ),
  'form_fields' => 
  array (
    0 => 'Block_5289157345d30f66bc2da70_96674072',
  ),
  'form_field' => 
  array (
    0 => 'Block_19688829745d30f66bc2e785_26692168',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_13596639515d30f66bc2fcd5_00888988',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_11170222705d30f66bc301c5_95780471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11141803865d30f66bc2bfe0_33924646', 'customer_form_errors', $this->tplIndex);
?>


<form action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8948880075d30f66bc2cf58_80204489', 'customer_form_actionurl', $this->tplIndex);
?>
" id="customer-form" class="js-customer-form" method="post">
  <section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5289157345d30f66bc2da70_96674072', "form_fields", $this->tplIndex);
?>

  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13596639515d30f66bc2fcd5_00888988', 'customer_form_footer', $this->tplIndex);
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
