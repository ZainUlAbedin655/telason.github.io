<?php
/* Smarty version 3.1.33, created on 2019-06-14 00:28:33
  from '/home/telaso5/public_html/themes/wolf_child/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0241718fc905_01434528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df14aa1597be21b36629c3d23747e56440963f82' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/page.tpl',
      1 => 1552905571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0241718fc905_01434528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18002456085d0241718f8a11_45958184', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4908599675d0241718f9457_78727074 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
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
class Block_4017141605d0241718f8ea6_66677982 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4908599675d0241718f9457_78727074', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6215407635d0241718fa9a2_56550283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17290703655d0241718faf17_07841851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14716499145d0241718fa5e7_19232688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6215407635d0241718fa9a2_56550283', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17290703655d0241718faf17_07841851', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_18759128075d0241718fbd54_07785482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7749577025d0241718fb7e9_97205645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18759128075d0241718fbd54_07785482', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18002456085d0241718f8a11_45958184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18002456085d0241718f8a11_45958184',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_4017141605d0241718f8ea6_66677982',
  ),
  'page_title' => 
  array (
    0 => 'Block_4908599675d0241718f9457_78727074',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14716499145d0241718fa5e7_19232688',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6215407635d0241718fa9a2_56550283',
  ),
  'page_content' => 
  array (
    0 => 'Block_17290703655d0241718faf17_07841851',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7749577025d0241718fb7e9_97205645',
  ),
  'page_footer' => 
  array (
    0 => 'Block_18759128075d0241718fbd54_07785482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4017141605d0241718f8ea6_66677982', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14716499145d0241718fa5e7_19232688', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7749577025d0241718fb7e9_97205645', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
