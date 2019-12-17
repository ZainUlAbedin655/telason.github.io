<?php
/* Smarty version 3.1.33, created on 2019-11-26 18:28:30
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcb7feb3b871_64049615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db9f659f5b2c4112268c3ba0189681200a8a9fde' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/listing/category.tpl',
      1 => 1555928174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddcb7feb3b871_64049615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11995239915ddcb7feb1e2b4_79760420', 'product_list_header');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'parent:catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_11995239915ddcb7feb1e2b4_79760420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_11995239915ddcb7feb1e2b4_79760420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-category card card-block hidden-sm-down">
	    <div class="header-category-bottom <?php if ($_smarty_tpl->tpl_vars['category']->value['name'] == 'Circular Backshell Interface' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Termination Bands' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Rectangular Backshell Interface' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Banding Strap Termination' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Spring Clip Termination' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Braid Tail Sock Terminated') {?> header-category-image-side <?php } else { ?> header-category-image-top <?php }?>">
	    	<div id="category-description" class="<?php if (isset($_GET['id'])) {
if ($_GET['id'] == 1) {?> full-category-description <?php }
}?> text-muted" style="color: #000000;">
	    		<h1 class="h1">
	    			<?php if (isset($_GET['id'])) {?>
			    		<?php if ($_GET['id'] == 1) {?> 
							Price Protection
						<?php } elseif ($_GET['id'] == 5) {?>
							Can’t find what you need?
						<?php } else { ?> 
					        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

					    <?php }?> 
					<?php } else { ?> 
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

					<?php }?> 
			    </h1>
			    <?php if (isset($_GET['id'])) {?>
					<?php if ($_GET['id'] == 1) {?> 
						We value your hard work in designing in parts onto your programs, and will support your business with discounted price protection on our full range of products.
						Register your program with us and we will give you the confidence and assurance you need through our price protection guarantee, ensuring your quoted prices are the most competitive for the program. 
						<h2 class="h2" style="color: #0A80BE;">How does it work?</h2>
						At TELASON we guarantee that, once you have registered the program details and your company with our sales team, we will not offer any competitor a better price for the same product on the same program. You are guaranteed to have the best TELASON prices.
						Your price protection guarantee will be valid for the life of the quotation and further to procurement and ordering, ensuring your margins are secured.</br>
						</br>
						Complete the form below to register your program and one of our team will be in contact to provide your discounted price.
					<?php } elseif ($_GET['id'] == 5) {?>
						Telason holds over 500 line items in inventory, and has over 2000 backshell combinations to choose from. Chances are, if you cannot find what you need we will have it, or be able manufacture if for you quickly. So send us a message or call us and let one of our experienced team help you find a solution.<br>
						Complete the form below including the backshell description or part number you need and we will contact you within 24 hrs.
					<?php } else { ?> 
						<?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
					        <?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>

					    <?php }?>
					<?php }?> 
				<?php } else { ?> 
					<?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
					    <?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>

					<?php }?>
				<?php }?>
			</div>
			<?php if (isset($_GET['id'])) {?>
				 <?php if ($_GET['id'] == 1 || $_GET['id'] == 5) {?> 
					
			      <?php } else { ?>
			        <!--div class="category-cover <?php if ($_smarty_tpl->tpl_vars['category']->value['name'] == 'Circular Backshell Interface' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Rectangular Backshell Interface' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Banding Strap Termination' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Spring Clip Termination' || $_smarty_tpl->tpl_vars['category']->value['name'] == 'Braid Tail Sock Terminated') {?> sub-image-height <?php }?>">
			        </div-->
			        <div class="category-cover-img">	
			          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
"s>
			        </div>
			    <?php }?>
		    <?php } else { ?> 
			     <div class="category-cover-img">	
			         <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
"s>
			     </div>
			<?php }?>
		</div>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['id'])) {?>
		<?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == 30 || $_smarty_tpl->tpl_vars['category']->value['id'] == 33) {?>
	  		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'myNewCoolHook'),$_smarty_tpl ) );?>

	    <?php }?>
    <?php }?>
	<div id="subcategories">
		<h3 class="subcategory-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategories'),$_smarty_tpl ) );?>
<i class="material-icons float-xs-right"></i></h3>
		<ul class="clearfix row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
?>
			<li class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
				<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img"></a>
					<a class="subcategory-name" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
			</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
<?php
}
}
/* {/block 'product_list_header'} */
}
