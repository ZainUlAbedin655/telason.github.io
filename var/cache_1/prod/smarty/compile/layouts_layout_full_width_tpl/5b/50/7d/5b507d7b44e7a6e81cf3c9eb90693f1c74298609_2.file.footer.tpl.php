<?php
/* Smarty version 3.1.33, created on 2019-07-24 01:10:22
  from '/home/telaso5/public_html/themes/wolf/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d37073e6ee392_57743865',
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
function content_5d37073e6ee392_57743865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-before">

<div class="top-container container">

	<div class="container">	

		<div class="row">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14907631515d37073e6ea5f1_15362933', 'hook_footer_before');
?>


		</div>

	</div>

</div>	

</div>

<div class="footer-container">

  <div class="container">

    <div class="row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18272232585d37073e6eb2d9_62098010', 'hook_footer');
?>


    </div>	   	    

  </div> 

	  <div class="footer-bottom">

	  <div class="container">

	  <div class="row">

      <div class="col-md-12">	        

		<div class="footer-after">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19535043565d37073e6ebcf4_97114752', 'hook_footer_after');
?>


			<div class="copyright">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19813709785d37073e6ec670_46087389', 'copyright_link');
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
class Block_14907631515d37073e6ea5f1_15362933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_14907631515d37073e6ea5f1_15362933',
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
class Block_18272232585d37073e6eb2d9_62098010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_18272232585d37073e6eb2d9_62098010',
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
class Block_19535043565d37073e6ebcf4_97114752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_19535043565d37073e6ebcf4_97114752',
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
class Block_19813709785d37073e6ec670_46087389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_19813709785d37073e6ec670_46087389',
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
