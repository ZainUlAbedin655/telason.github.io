<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:35:05
  from '/home/telaso5/public_html/themes/wolf_child/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bd69697fd7_68636232',
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
function content_5df8bd69697fd7_68636232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-before">

<div class="top-container container">

	<div class="container">	

		<div class="row">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11001660445df8bd696930a3_12538360', 'hook_footer_before');
?>


		</div>

	</div>

</div>	

</div>

<div class="footer-container">

  <div class="container">

    <div class="row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13416310375df8bd69693d65_17845899', 'hook_footer');
?>


    </div>	   	    

  </div> 

	  <div class="footer-bottom">

	  <div class="container">

	  <div class="row">

      <div class="col-md-12">	        

		<div class="footer-after">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1229000385df8bd69694e74_69215640', 'hook_footer_after');
?>


			<div class="copyright">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13033123325df8bd69695a25_30958682', 'copyright_link');
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
class Block_11001660445df8bd696930a3_12538360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_11001660445df8bd696930a3_12538360',
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
class Block_13416310375df8bd69693d65_17845899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_13416310375df8bd69693d65_17845899',
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
class Block_1229000385df8bd69694e74_69215640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_1229000385df8bd69694e74_69215640',
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
class Block_13033123325df8bd69695a25_30958682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_13033123325df8bd69695a25_30958682',
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
