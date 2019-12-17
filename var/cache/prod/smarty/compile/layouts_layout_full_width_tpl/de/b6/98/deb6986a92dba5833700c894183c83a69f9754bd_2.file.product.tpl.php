<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:35:03
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bd67d39d44_88886089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deb6986a92dba5833700c894183c83a69f9754bd' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/product.tpl',
      1 => 1574666418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 2,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/stockproduct.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5df8bd67d39d44_88886089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

 
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10845556105df8bd67cd8358_98975815', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11373083725df8bd67cdb551_88730462', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20835067815df8bd67ce7ae4_12271746', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_10845556105df8bd67cd8358_98975815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_10845556105df8bd67cd8358_98975815',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_11373083725df8bd67cdb551_88730462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_11373083725df8bd67cdb551_88730462',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'page_title'} */
class Block_11700989585df8bd67cea427_95100496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'product_flags'} */
class Block_11899822875df8bd67cee043_80597774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul class="product-flags">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
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
/* {block 'product_cover_tumbnails'} */
class Block_12828788705df8bd67cf4239_08439735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'page_content'} */
class Block_8484667055df8bd67ced982_44532959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11899822875df8bd67cee043_80597774', 'product_flags', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12828788705df8bd67cf4239_08439735', 'product_cover_tumbnails', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6910010275df8bd67ced1e9_88075692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <div class="product-leftside">
			       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8484667055df8bd67ced982_44532959', 'page_content', $this->tplIndex);
?>

			     </div>
        </section>
      <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_header'} */
class Block_7361031725df8bd67cf78f3_45281212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['id'] === 93) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'myNewCoolHooks'),$_smarty_tpl ) );?>

          <?php }?>
        <!--     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'myNewCoolHook'),$_smarty_tpl ) );?>
 -->
          <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_12598512575df8bd67cf7221_26957476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7361031725df8bd67cf78f3_45281212', 'page_header', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_16083701875df8bd67cfb912_08259512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemprop="description" style="margin-top: 15px;}">
              <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
        <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_prices'} */
class Block_7735853335df8bd67d00879_66641753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_variants'} */
class Block_11998226665df8bd67d01f10_97122560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
-->
        <div class="product-variants-container">
        <!--  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_18972833245df8bd67d0aae0_75430655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                          <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_4433188905df8bd67d06133_12305735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18972833245df8bd67d0aae0_75430655', 'product_miniature', $this->tplIndex);
?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_19417153985df8bd67d0d150_62575655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_miniature_item'} */
class Block_1595579055df8bd67d0f289_10457270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
                     <span class="availability-list">In Stock</span>
                    <?php } else { ?> 
                    <span class="availability-list">not In Stock</span>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'StockProduct'} */
class Block_21165859115df8bd67d11737_62032943 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                           
                             <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/stockproduct.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'StockProduct'} */
/* {block 'product_variants'} */
class Block_13511117375df8bd67d14ad4_76538365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="product-variants-container">
                             <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_additional_info'} */
class Block_11491647575df8bd67d0e422_67479419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                
   
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  
                <!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1595579055df8bd67d0f289_10457270', 'product_miniature_item', $this->tplIndex);
?>
-->
                  
                    <div class="displayProductAdditionalInfo2">
                    
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21165859115df8bd67d11737_62032943', 'StockProduct', $this->tplIndex);
?>

                           
                            
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13511117375df8bd67d14ad4_76538365', 'product_variants', $this->tplIndex);
?>

                   
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo2','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                      
                    </div>
        <!--     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo2'),$_smarty_tpl ) );?>
 -->
       
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_9716370865df8bd67d18053_37916564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
                    
                  <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_add_to_cart'} */
class Block_3437714485df8bd67d1a6a9_05653911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_customization'} */
class Block_13410060555df8bd67d1d646_32071189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                      <?php
}
}
/* {/block 'product_customization'} */
/* {block 'hook_display_reassurance'} */
class Block_13796785585df8bd67d210a8_33726582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_buy'} */
class Block_5680678035df8bd67d035a6_69248327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4433188905df8bd67d06133_12305735', 'product_pack', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19417153985df8bd67d0d150_62575655', 'product_discounts', $this->tplIndex);
?>

                  
             
               
                
                  
            
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11491647575df8bd67d0e422_67479419', 'product_additional_info', $this->tplIndex);
?>

                  
                
               
                        
                   
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9716370865df8bd67d18053_37916564', 'product_refresh', $this->tplIndex);
?>

                  
                  
                  
          
              <!--  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3437714485df8bd67d1a6a9_05653911', 'product_add_to_cart', $this->tplIndex);
?>

                  
                  
              
                  
                  
                  
                  
                  <!-- <div class="product-information">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13410060555df8bd67d1d646_32071189', 'product_customization', $this->tplIndex);
?>

                    <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13796785585df8bd67d210a8_33726582', 'hook_display_reassurance', $this->tplIndex);
?>

                  </div> -->
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_miniature'} */
class Block_3406313225df8bd67d300d1_87060993 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <li class="<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-3 col-lg-3<?php }?>">
				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
				</li>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_5361947845df8bd67d2ab84_37711070 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <?php $_smarty_tpl->_assignInScope('sliderFor', 4);?> <!-- Define Number of product for SLIDER -->
		<?php $_smarty_tpl->_assignInScope('productCount', count($_smarty_tpl->tpl_vars['accessories']->value));?>
		
		<section class="product-accessories clearfix">
          <h3 class="h3 products-section-title text-uppercase">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		  </h3>
         <div class="products"> 
		 	<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			 <div class="product-carousel">
				<ul id="pstaccessories-carousel" class="pstaccessories-carousel pst-carousel product_list">
			<?php } else { ?>
				<ul id="pstaccessories-grid" class="pstaccessories-grid grid row gridcount product_list">
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3406313225df8bd67d300d1_87060993', 'product_miniature', $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			
			<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
				<div class="customNavigation">
					<a class="btn prev pstaccessories_prev">&nbsp;</a>
					<a class="btn next pstaccessories_next">&nbsp;</a>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
	  </div>
	  <?php }?>
          </div>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_14854845625df8bd67d35178_46366002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_6574833285df8bd67d36907_57811289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_5906048715df8bd67d38127_88960916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14084593085df8bd67d37ab7_12742863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5906048715df8bd67d38127_88960916', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20835067815df8bd67ce7ae4_12271746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20835067815df8bd67ce7ae4_12271746',
  ),
  'page_title' => 
  array (
    0 => 'Block_11700989585df8bd67cea427_95100496',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6910010275df8bd67ced1e9_88075692',
  ),
  'page_content' => 
  array (
    0 => 'Block_8484667055df8bd67ced982_44532959',
  ),
  'product_flags' => 
  array (
    0 => 'Block_11899822875df8bd67cee043_80597774',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_12828788705df8bd67cf4239_08439735',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_12598512575df8bd67cf7221_26957476',
  ),
  'page_header' => 
  array (
    0 => 'Block_7361031725df8bd67cf78f3_45281212',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_16083701875df8bd67cfb912_08259512',
  ),
  'product_prices' => 
  array (
    0 => 'Block_7735853335df8bd67d00879_66641753',
  ),
  'product_variants' => 
  array (
    0 => 'Block_11998226665df8bd67d01f10_97122560',
    1 => 'Block_13511117375df8bd67d14ad4_76538365',
  ),
  'product_buy' => 
  array (
    0 => 'Block_5680678035df8bd67d035a6_69248327',
  ),
  'product_pack' => 
  array (
    0 => 'Block_4433188905df8bd67d06133_12305735',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_18972833245df8bd67d0aae0_75430655',
    1 => 'Block_3406313225df8bd67d300d1_87060993',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_19417153985df8bd67d0d150_62575655',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_11491647575df8bd67d0e422_67479419',
  ),
  'product_miniature_item' => 
  array (
    0 => 'Block_1595579055df8bd67d0f289_10457270',
  ),
  'StockProduct' => 
  array (
    0 => 'Block_21165859115df8bd67d11737_62032943',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_9716370865df8bd67d18053_37916564',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_3437714485df8bd67d1a6a9_05653911',
  ),
  'product_customization' => 
  array (
    0 => 'Block_13410060555df8bd67d1d646_32071189',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_13796785585df8bd67d210a8_33726582',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_5361947845df8bd67d2ab84_37711070',
  ),
  'product_footer' => 
  array (
    0 => 'Block_14854845625df8bd67d35178_46366002',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_6574833285df8bd67d36907_57811289',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14084593085df8bd67d37ab7_12742863',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5906048715df8bd67d38127_88960916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype>
    <meta itemprop="url" content="<?php echo htmlspecialchars(preg_replace('/#.*/','',$_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
    <div class="row product-page-row">
      <div class="col-md-9 product-page-col-1">  
        <div class="col-md-12 product-page-col-1-inner-1">  
          <h1 class="h1 productpage_title" style="text-align: right;" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11700989585df8bd67cea427_95100496', 'page_title', $this->tplIndex);
?>
</h1>  
        </div>
        <div class="col-md-8 product-page-col-1-inner-2">    
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6910010275df8bd67ced1e9_88075692', 'page_content_container', $this->tplIndex);
?>

      </div>
      <div class="col-md-4 product-page-col-1-inner-3">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12598512575df8bd67cf7221_26957476', 'page_header_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16083701875df8bd67cfb912_08259512', 'product_description_short', $this->tplIndex);
?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayDeliveryTime'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayDeliveryTime', $_prefixVariable1);?>
        <?php if (empty($_smarty_tpl->tpl_vars['displayDeliveryTime']->value)) {?> 
        
        
        
        
          <!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7735853335df8bd67d00879_66641753', 'product_prices', $this->tplIndex);
?>
 -->
        <?php }?>
        
        
        
        <!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11998226665df8bd67d01f10_97122560', 'product_variants', $this->tplIndex);
?>
 -->
        
        
        
        
        

        <div class="product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5680678035df8bd67d035a6_69248327', 'product_buy', $this->tplIndex);
?>

             
               
              
          
          
           
                    
          
        
          
          
        </div> 
      </div>
    </div>
    <div class="col-md-12">
     
    </div>
     
    </form>
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5361947845df8bd67d2ab84_37711070', 'product_accessories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14854845625df8bd67d35178_46366002', 'product_footer', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6574833285df8bd67d36907_57811289', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14084593085df8bd67d37ab7_12742863', 'page_footer_container', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'content'} */
}
