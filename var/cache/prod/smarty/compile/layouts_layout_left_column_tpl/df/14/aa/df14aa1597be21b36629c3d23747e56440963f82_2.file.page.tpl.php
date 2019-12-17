<?php
/* Smarty version 3.1.33, created on 2019-12-17 15:12:05
  from '/home/telaso5/public_html/themes/wolf_child/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8397529ba84_07464784',
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
function content_5df8397529ba84_07464784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9063360095df83975297fb4_93370065', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_531823985df83975298921_98799314 extends Smarty_Internal_Block
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
class Block_8879504215df839752983f1_84795606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_531823985df83975298921_98799314', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14158693005df83975299ef5_22501375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11943165135df8397529a472_45335284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16724019755df83975299b09_09594803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14158693005df83975299ef5_22501375', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11943165135df8397529a472_45335284', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2801324875df8397529b058_50230945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16065729945df8397529acd8_64797379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2801324875df8397529b058_50230945', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9063360095df83975297fb4_93370065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9063360095df83975297fb4_93370065',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8879504215df839752983f1_84795606',
  ),
  'page_title' => 
  array (
    0 => 'Block_531823985df83975298921_98799314',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16724019755df83975299b09_09594803',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14158693005df83975299ef5_22501375',
  ),
  'page_content' => 
  array (
    0 => 'Block_11943165135df8397529a472_45335284',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16065729945df8397529acd8_64797379',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2801324875df8397529b058_50230945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8879504215df839752983f1_84795606', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16724019755df83975299b09_09594803', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16065729945df8397529acd8_64797379', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
