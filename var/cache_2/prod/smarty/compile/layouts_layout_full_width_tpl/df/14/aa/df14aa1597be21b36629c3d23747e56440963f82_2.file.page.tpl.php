<?php
/* Smarty version 3.1.33, created on 2019-07-24 01:15:58
  from '/home/telaso5/public_html/themes/wolf_child/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d37088e559992_78243184',
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
function content_5d37088e559992_78243184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5765596815d37088e5545b1_34519230', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15997031665d37088e5553a7_31610603 extends Smarty_Internal_Block
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
class Block_4911236585d37088e554bb7_11983974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15997031665d37088e5553a7_31610603', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_21304056245d37088e5576e6_17605676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14907371695d37088e557e74_86118939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16684866895d37088e556e50_72240086 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21304056245d37088e5576e6_17605676', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14907371695d37088e557e74_86118939', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_19717031525d37088e558a50_01922503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18421462365d37088e5586c8_63175970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19717031525d37088e558a50_01922503', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5765596815d37088e5545b1_34519230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5765596815d37088e5545b1_34519230',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_4911236585d37088e554bb7_11983974',
  ),
  'page_title' => 
  array (
    0 => 'Block_15997031665d37088e5553a7_31610603',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16684866895d37088e556e50_72240086',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21304056245d37088e5576e6_17605676',
  ),
  'page_content' => 
  array (
    0 => 'Block_14907371695d37088e557e74_86118939',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18421462365d37088e5586c8_63175970',
  ),
  'page_footer' => 
  array (
    0 => 'Block_19717031525d37088e558a50_01922503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4911236585d37088e554bb7_11983974', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16684866895d37088e556e50_72240086', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18421462365d37088e5586c8_63175970', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
