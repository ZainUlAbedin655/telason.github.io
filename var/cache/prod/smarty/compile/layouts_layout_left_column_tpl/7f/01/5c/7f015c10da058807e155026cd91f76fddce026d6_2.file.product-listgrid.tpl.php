<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:45:57
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/miniatures/product-listgrid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bff5679183_13922109',
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
function content_5df8bff5679183_13922109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2002326865df8bff5666427_75523456', 'product_miniature_item');
}
/* {block 'product_thumbnail'} */
class Block_15733292145df8bff56673b5_95947692 extends Smarty_Internal_Block
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
class Block_9963831035df8bff566c5d9_10296409 extends Smarty_Internal_Block
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
class Block_15773053315df8bff566e629_03664161 extends Smarty_Internal_Block
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
class Block_3714264185df8bff5670ef7_20318803 extends Smarty_Internal_Block
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
class Block_15124447945df8bff566bd51_08660327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9963831035df8bff566c5d9_10296409', 'product_flags', $this->tplIndex);
?>
	
 </div>
	
    <div class="product-description">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15773053315df8bff566e629_03664161', 'product_name', $this->tplIndex);
?>

      	        <!-- <pre>
      	<?php echo htmlspecialchars(print_r($_smarty_tpl->tpl_vars['product']->value['category']), ENT_QUOTES, 'UTF-8');?>

      	<?php echo htmlspecialchars(print_r($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');?>

      	</pre> -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3714264185df8bff5670ef7_20318803', '`', $this->tplIndex);
?>

    	
      <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_description_short'} */
class Block_10495636125df8bff56768e2_54546472 extends Smarty_Internal_Block
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
class Block_13508149555df8bff5677c31_04516848 extends Smarty_Internal_Block
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
class Block_2002326865df8bff5666427_75523456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_2002326865df8bff5666427_75523456',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_15733292145df8bff56673b5_95947692',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_15124447945df8bff566bd51_08660327',
  ),
  'product_flags' => 
  array (
    0 => 'Block_9963831035df8bff566c5d9_10296409',
  ),
  'product_name' => 
  array (
    0 => 'Block_15773053315df8bff566e629_03664161',
  ),
  '`' => 
  array (
    0 => 'Block_3714264185df8bff5670ef7_20318803',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_10495636125df8bff56768e2_54546472',
  ),
  'product_variants' => 
  array (
    0 => 'Block_13508149555df8bff5677c31_04516848',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15733292145df8bff56673b5_95947692', 'product_thumbnail', $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15124447945df8bff566bd51_08660327', 'product_reviews', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10495636125df8bff56768e2_54546472', 'product_description_short', $this->tplIndex);
?>
			
		<!--<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">	
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13508149555df8bff5677c31_04516848', 'product_variants', $this->tplIndex);
?>

		</div>-->
	</div>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
