<?php
/* Smarty version 3.1.33, created on 2019-07-24 20:51:25
  from '/home/telaso5/public_html/themes/wolf/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d381c0d7a3993_62298974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b507d7b44e7a6e81cf3c9eb90693f1c74298609' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/_partials/footer.tpl',
      1 => 1555678732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d381c0d7a3993_62298974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-before">

<div class="top-container container">

	<div class="container">	

		<div class="row">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_685296865d381c0d79fd30_54652264', 'hook_footer_before');
?>


		</div>

	</div>

</div>	

</div>

<div class="footer-container">

  <div class="container">

    <div class="row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11083138485d381c0d7a0b58_73818946', 'hook_footer');
?>


    </div>	   	    

  </div> 

	  <div class="footer-bottom">

	  <div class="container">

	  <div class="row">

      <div class="col-md-12">	        

		<div class="footer-after">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2734560695d381c0d7a15f0_51712168', 'hook_footer_after');
?>


			<div class="copyright">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14121678795d381c0d7a1fe7_30141404', 'copyright_link');
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
class Block_685296865d381c0d79fd30_54652264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_685296865d381c0d79fd30_54652264',
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
class Block_11083138485d381c0d7a0b58_73818946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_11083138485d381c0d7a0b58_73818946',
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
class Block_2734560695d381c0d7a15f0_51712168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_2734560695d381c0d7a15f0_51712168',
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
class Block_14121678795d381c0d7a1fe7_30141404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_14121678795d381c0d7a1fe7_30141404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			 <a class="_blank" href="http://www.prestashop.com" target="_blank">

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>


			</a>

			<?php
}
}
/* {/block 'copyright_link'} */
}
