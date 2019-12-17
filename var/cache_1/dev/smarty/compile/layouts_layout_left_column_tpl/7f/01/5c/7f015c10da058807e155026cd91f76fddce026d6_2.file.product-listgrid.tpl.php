<?php
/* Smarty version 3.1.33, created on 2019-06-13 22:44:30
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/miniatures/product-listgrid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d02290eab0bb3_27654865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f015c10da058807e155026cd91f76fddce026d6' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/miniatures/product-listgrid.tpl',
      1 => 1559120821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5d02290eab0bb3_27654865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2676215575d02290ea8ca65_13685538', 'product_miniature_item');
}
/* {block 'product_thumbnail'} */
class Block_14682485135d02290ea8e961_36976906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
        <img
		  class = "primary-image"
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
          data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          
        >
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHoverImage",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'home'=>'home_default','large'=>'large_default'),$_smarty_tpl ) );?>
		
      </a>
		
		<div class="product-actions">
			<div class="view-btn">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary view-button" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Detail','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">				
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Detail','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

	<!--				<span class="pst-product-view pst-product-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Detail','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
	-->			</a>
			</div>
			<a href="#" class="quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

<!--				<span class="pst-product-quickview pst-product-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
-->			</a>		
		</div>	
		
		
		
    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_2873270705d02290ea98a00_26234288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <ul class="product-flags">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
		  <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </ul>
	<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_11929394595d02290ea9c176_87116077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h2 class="h2 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h2>
      <?php
}
}
/* {/block 'product_name'} */
/* {block '`'} */
class Block_6007213835d02290eaa0f95_08344890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
        	<div class="product-price-and-shipping">
        <?php if (strpos($_smarty_tpl->tpl_vars['product']->value['name'],'Banding Strap') !== false) {?>
		  	<span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
<span class="from_label">
            Per Packet 100
        	</span></span>
        <?php } else { ?>
			 <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
<span class="from_label">
	            From
	         </span></span>
        <?php }?>
            <!-- <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


              <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
            <?php }?> -->

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>
            
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

          </div>
        <?php }?>
      <?php
}
}
/* {/block '`'} */
/* {block 'product_reviews'} */
class Block_18025383195d02290ea979b9_56583796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2873270705d02290ea98a00_26234288', 'product_flags', $this->tplIndex);
?>
	
 </div>
	
    <div class="product-description">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11929394595d02290ea9c176_87116077', 'product_name', $this->tplIndex);
?>

      	        <!-- <pre>
      	<?php echo htmlspecialchars(print_r($_smarty_tpl->tpl_vars['product']->value['category']), ENT_QUOTES, 'UTF-8');?>

      	<?php echo htmlspecialchars(print_r($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');?>

      	</pre> -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6007213835d02290eaa0f95_08344890', '`', $this->tplIndex);
?>

    	
      <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_description_short'} */
class Block_10722571595d02290eaabe21_24567936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <div class="product-detail" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
		<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_14783453565d02290eaae3f0_45204425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
			  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
			<?php }?>
		  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_2676215575d02290ea8ca65_13685538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_2676215575d02290ea8ca65_13685538',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_14682485135d02290ea8e961_36976906',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_18025383195d02290ea979b9_56583796',
  ),
  'product_flags' => 
  array (
    0 => 'Block_2873270705d02290ea98a00_26234288',
  ),
  'product_name' => 
  array (
    0 => 'Block_11929394595d02290ea9c176_87116077',
  ),
  '`' => 
  array (
    0 => 'Block_6007213835d02290eaa0f95_08344890',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_10722571595d02290eaabe21_24567936',
  ),
  'product_variants' => 
  array (
    0 => 'Block_14783453565d02290eaae3f0_45204425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype>
  <div class="thumbnail-container">
    <div class="image-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14682485135d02290ea8e961_36976906', 'product_thumbnail', $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18025383195d02290ea979b9_56583796', 'product_reviews', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10722571595d02290eaabe21_24567936', 'product_description_short', $this->tplIndex);
?>
			
		<!--<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">	
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14783453565d02290eaae3f0_45204425', 'product_variants', $this->tplIndex);
?>

		</div>-->
	</div>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
