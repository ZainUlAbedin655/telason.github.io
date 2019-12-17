<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/steps/unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c336126_80532304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a3aa1e24b4d30177f20bf00ddcbd6eb35bdd6c' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66c336126_80532304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11938830335d30f66c335206_62212139', 'step');
?>

<?php }
/* {block 'step'} */
class Block_11938830335d30f66c335206_62212139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_11938830335d30f66c335206_62212139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
