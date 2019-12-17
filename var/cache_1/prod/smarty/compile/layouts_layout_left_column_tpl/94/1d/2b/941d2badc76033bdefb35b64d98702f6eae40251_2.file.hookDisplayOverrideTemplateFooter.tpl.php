<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:44:59
  from '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayOverrideTemplateFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66bb43850_27575109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '941d2badc76033bdefb35b64d98702f6eae40251' => 
    array (
      0 => '/home/telaso5/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayOverrideTemplateFooter.tpl',
      1 => 1545011154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d30f66bb43850_27575109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10370111955d30f66bb425a5_82192823', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/checkout.tpl');
}
/* {block 'footer'} */
class Block_10370111955d30f66bb425a5_82192823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10370111955d30f66bb425a5_82192823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

    </div>
  </div>
</div>
<?php
}
}
/* {/block 'footer'} */
}
