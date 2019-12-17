<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:35:05
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bd69427f65_86795995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cc590f0fe4fdacb340af5a20a50ef0e8a3f6989' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1555908548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5df8bd69427f65_86795995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21467016545df8bd6940f746_60503212', 'product_miniature_item');
}
/* {block 'product_buy'} */
class Block_8613345985df8bd694132f2_14212072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>				

			<div class="product-actions">

				  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">

					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">

					<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">

					<input type="hidden" name="id_customization" value="0" class="product_customization_id">

					<button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'unavailable') {?>disabled<?php }?> title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">						

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>


<!--						<span class="pst-product-cart pst-product-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>

-->					</button>

				</form>

				<a href="#" class="quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>


<!--					<span class="pst-product-quickview pst-product-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>

-->				</a>	

			</div>

		<?php }?>

	<?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_thumbnail'} */
class Block_20599128985df8bd69410822_01703276 extends Smarty_Internal_Block
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

	

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8613345985df8bd694132f2_14212072', 'product_buy', $this->tplIndex);
?>


	  	

	

    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_14992047745df8bd694192c8_12413054 extends Smarty_Internal_Block
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
class Block_20373139425df8bd6941bde8_96800291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <span class="h2 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></span>

      <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_16738085935df8bd6941d425_84000955 extends Smarty_Internal_Block
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

            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


               

             <!--  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span> -->

              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>

                <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>

              <?php }?>

            <?php }?>



            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>
           

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>


          </div>

        <?php }?>

      <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_19321792765df8bd69417cd4_46318002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      <!-- <div class="pro_desc_short"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div> -->


		

		

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14992047745df8bd694192c8_12413054', 'product_flags', $this->tplIndex);
?>
	

 </div>



    <div class="product-description">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20373139425df8bd6941bde8_96800291', 'product_name', $this->tplIndex);
?>




      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16738085935df8bd6941d425_84000955', 'product_price_and_shipping', $this->tplIndex);
?>


    	

      <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_variants'} */
class Block_6951109815df8bd694265a9_81339690 extends Smarty_Internal_Block
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
class Block_21467016545df8bd6940f746_60503212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_21467016545df8bd6940f746_60503212',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_20599128985df8bd69410822_01703276',
  ),
  'product_buy' => 
  array (
    0 => 'Block_8613345985df8bd694132f2_14212072',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_19321792765df8bd69417cd4_46318002',
  ),
  'product_flags' => 
  array (
    0 => 'Block_14992047745df8bd694192c8_12413054',
  ),
  'product_name' => 
  array (
    0 => 'Block_20373139425df8bd6941bde8_96800291',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_16738085935df8bd6941d425_84000955',
  ),
  'product_variants' => 
  array (
    0 => 'Block_6951109815df8bd694265a9_81339690',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20599128985df8bd69410822_01703276', 'product_thumbnail', $this->tplIndex);
?>


	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19321792765df8bd69417cd4_46318002', 'product_reviews', $this->tplIndex);
?>
			

		<!--<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">

	

		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6951109815df8bd694265a9_81339690', 'product_variants', $this->tplIndex);
?>


		</div>-->

	</div>

</div>

<?php
}
}
/* {/block 'product_miniature_item'} */
}
