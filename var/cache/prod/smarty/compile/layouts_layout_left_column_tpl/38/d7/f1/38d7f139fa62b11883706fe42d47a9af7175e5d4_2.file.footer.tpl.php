<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:45:57
  from '/home/telaso5/public_html/themes/wolf_child/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bff5c15d17_87690557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38d7f139fa62b11883706fe42d47a9af7175e5d4' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/_partials/footer.tpl',
      1 => 1573112014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8bff5c15d17_87690557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-before">

<div class="top-container container">

	<div class="container">	

		<div class="row">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1093037235df8bff5c122c1_74331541', 'hook_footer_before');
?>


		</div>

	</div>

</div>	

</div>

<div class="footer-container">

  <div class="container">

    <div class="row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11908936675df8bff5c12ee8_84359552', 'hook_footer');
?>


    </div>	   	    

  </div> 

	  <div class="footer-bottom">

	  <div class="container">

	  <div class="row">

      <div class="col-md-12">	        

		<div class="footer-after">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7707371525df8bff5c13a20_89657777', 'hook_footer_after');
?>


			<div class="copyright">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14527640345df8bff5c143c8_43830516', 'copyright_link');
?>


			</div>

		</div>

      </div>

	  </div>

	  </div>
	  

	  </div>

</div>

<a class="top_button" href="#" style="">&nbsp;</a>

<?php }
/* {block 'hook_footer_before'} */
class Block_1093037235df8bff5c122c1_74331541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_1093037235df8bff5c122c1_74331541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>


			<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_11908936675df8bff5c12ee8_84359552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_11908936675df8bff5c12ee8_84359552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>


      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_7707371525df8bff5c13a20_89657777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_7707371525df8bff5c13a20_89657777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>


			<?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_14527640345df8bff5c143c8_43830516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_14527640345df8bff5c143c8_43830516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			 <a class="_blank" href="https://creativetech-solutions.com/" target="_blank">

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>


			</a>

			<?php
}
}
/* {/block 'copyright_link'} */
}
