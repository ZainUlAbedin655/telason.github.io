<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:11:22
  from '/home/telaso5/public_html/themes/wolf_child/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8b7dab0ec85_20509970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df14aa1597be21b36629c3d23747e56440963f82' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/page.tpl',
      1 => 1574771371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8b7dab0ec85_20509970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10611684815df8b7dab0b5c2_14275670', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_17855275955df8b7dab0bec0_26566179 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13124267185df8b7dab0b9d7_84032375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17855275955df8b7dab0bec0_26566179', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12491481085df8b7dab0d1b2_23807806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14810590205df8b7dab0d6f5_30777758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3356509995df8b7dab0ce07_57778976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12491481085df8b7dab0d1b2_23807806', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14810590205df8b7dab0d6f5_30777758', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_288586755df8b7dab0e2e9_55879798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7829195235df8b7dab0df76_69670723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_288586755df8b7dab0e2e9_55879798', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10611684815df8b7dab0b5c2_14275670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10611684815df8b7dab0b5c2_14275670',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13124267185df8b7dab0b9d7_84032375',
  ),
  'page_title' => 
  array (
    0 => 'Block_17855275955df8b7dab0bec0_26566179',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_3356509995df8b7dab0ce07_57778976',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12491481085df8b7dab0d1b2_23807806',
  ),
  'page_content' => 
  array (
    0 => 'Block_14810590205df8b7dab0d6f5_30777758',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7829195235df8b7dab0df76_69670723',
  ),
  'page_footer' => 
  array (
    0 => 'Block_288586755df8b7dab0e2e9_55879798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13124267185df8b7dab0b9d7_84032375', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3356509995df8b7dab0ce07_57778976', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7829195235df8b7dab0df76_69670723', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
