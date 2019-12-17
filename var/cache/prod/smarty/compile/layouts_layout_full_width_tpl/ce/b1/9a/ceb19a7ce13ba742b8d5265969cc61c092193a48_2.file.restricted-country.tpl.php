<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:36:45
  from '/home/telaso5/public_html/themes/wolf/templates/errors/restricted-country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bdcd5aa559_03114940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb19a7ce13ba742b8d5265969cc61c092193a48' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/errors/restricted-country.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8bdcd5aa559_03114940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14063782825df8bdcd5a5312_71857320', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_title'} */
class Block_2158768955df8bdcd5a6c44_49195970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_931309865df8bdcd5a6886_66820338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2158768955df8bdcd5a6c44_49195970', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_1452769615df8bdcd5a5817_88250623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <div class="logo"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931309865df8bdcd5a6886_66820338', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_15605532145df8bdcd5a8230_60538305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'403 Forbidden','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot access this store from your country. We apologize for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5928459705df8bdcd5a7e89_88245548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-restricted">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15605532145df8bdcd5a8230_60538305', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_10240648265df8bdcd5a9a79_82378792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14063782825df8bdcd5a5312_71857320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14063782825df8bdcd5a5312_71857320',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1452769615df8bdcd5a5817_88250623',
  ),
  'page_header' => 
  array (
    0 => 'Block_931309865df8bdcd5a6886_66820338',
  ),
  'page_title' => 
  array (
    0 => 'Block_2158768955df8bdcd5a6c44_49195970',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5928459705df8bdcd5a7e89_88245548',
  ),
  'page_content' => 
  array (
    0 => 'Block_15605532145df8bdcd5a8230_60538305',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10240648265df8bdcd5a9a79_82378792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1452769615df8bdcd5a5817_88250623', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5928459705df8bdcd5a7e89_88245548', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10240648265df8bdcd5a9a79_82378792', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
