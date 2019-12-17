<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/steps/checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c2874a9_21303796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '155e4e0eb7572fe34242e533ca795b15059fb370' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66c2874a9_21303796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17801305615d30f66c283f03_09492739', 'step');
?>

<?php }
/* {block 'step_content'} */
class Block_914509345d30f66c286c03_68649045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_17801305615d30f66c283f03_09492739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_17801305615d30f66c283f03_09492739',
  ),
  'step_content' => 
  array (
    0 => 'Block_914509345d30f66c286c03_68649045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title h3">
      <i class="material-icons done">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    </h1>

    <div class="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_914509345d30f66c286c03_68649045', 'step_content', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'step'} */
}
