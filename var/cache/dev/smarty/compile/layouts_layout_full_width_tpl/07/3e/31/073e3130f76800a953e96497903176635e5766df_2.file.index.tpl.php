<?php
/* Smarty version 3.1.33, created on 2019-11-26 18:29:32
  from '/home/telaso5/public_html/themes/wolf_child/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcb83ca790e3_23770414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '073e3130f76800a953e96497903176635e5766df' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/index.tpl',
      1 => 1553058609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddcb83ca790e3_23770414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15382794185ddcb83ca6e339_04825217', 'page_content_container');
?>

	
	
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17620199775ddcb83ca6ecf5_44930377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12563391635ddcb83ca771e1_54385951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_9569045625ddcb83ca76aa3_16050303 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12563391635ddcb83ca771e1_54385951', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15382794185ddcb83ca6e339_04825217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15382794185ddcb83ca6e339_04825217',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17620199775ddcb83ca6ecf5_44930377',
  ),
  'page_content' => 
  array (
    0 => 'Block_9569045625ddcb83ca76aa3_16050303',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12563391635ddcb83ca771e1_54385951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17620199775ddcb83ca6ecf5_44930377', 'page_content_top', $this->tplIndex);
?>

        
		<!-- Template start -->			
			<section class="pst-hometabcontent hb-animate-element top-to-bottom ">
			
				<div class="container">
				
				<div class="tabs">
					<h2 class="h1 products-section-title text-uppercase" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						<span class="title-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Any Product. Any Quantity. Delivered in 5 weeks or Less.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
					</h2>
					<ul id="home-page-tabs" class="nav nav-tabs clearfix">
						<li class="nav-item">
							<a data-toggle="tab" href="#featureProduct" class="nav-link active" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a data-toggle="tab" href="#newProduct" class="nav-link" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Arrivals','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Arrivals','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#bestseller" class="nav-link" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li> -->
						
					</ul>
				  
					<div class="tab-content">
						<div id="featureProduct" class="tm_productinner tab-pane active">	
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPstFeature'),$_smarty_tpl ) );?>

						</div>
						<div id="newProduct" class="tm_productinner tab-pane">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPstNew'),$_smarty_tpl ) );?>

						</div>
						<div id="bestseller" class="tm_productinner tab-pane">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPstBestseller'),$_smarty_tpl ) );?>

						</div>
					
					</div>					
				</div>				
			    </div>
			</section>

		<!-- Template end -->
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9569045625ddcb83ca76aa3_16050303', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
