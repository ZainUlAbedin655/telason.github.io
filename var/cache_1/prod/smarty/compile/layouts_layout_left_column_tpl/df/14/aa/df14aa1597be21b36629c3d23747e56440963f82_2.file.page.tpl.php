<?php
/* Smarty version 3.1.33, created on 2019-07-24 00:33:50
  from '/home/telaso5/public_html/themes/wolf_child/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d36feae444c44_44870621',
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
function content_5d36feae444c44_44870621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12720718475d36feae441180_12022691', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6199620985d36feae441a53_85384011 extends Smarty_Internal_Block
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
class Block_6967932855d36feae441595_45334708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6199620985d36feae441a53_85384011', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_15943259495d36feae442e65_26095431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7591419295d36feae4433b4_86231850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2791787925d36feae442ab8_67510149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15943259495d36feae442e65_26095431', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7591419295d36feae4433b4_86231850', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3864781245d36feae4442a2_65402326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11825714955d36feae443d49_46356111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3864781245d36feae4442a2_65402326', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12720718475d36feae441180_12022691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12720718475d36feae441180_12022691',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6967932855d36feae441595_45334708',
  ),
  'page_title' => 
  array (
    0 => 'Block_6199620985d36feae441a53_85384011',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2791787925d36feae442ab8_67510149',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15943259495d36feae442e65_26095431',
  ),
  'page_content' => 
  array (
    0 => 'Block_7591419295d36feae4433b4_86231850',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11825714955d36feae443d49_46356111',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3864781245d36feae4442a2_65402326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6967932855d36feae441595_45334708', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2791787925d36feae442ab8_67510149', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11825714955d36feae443d49_46356111', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
