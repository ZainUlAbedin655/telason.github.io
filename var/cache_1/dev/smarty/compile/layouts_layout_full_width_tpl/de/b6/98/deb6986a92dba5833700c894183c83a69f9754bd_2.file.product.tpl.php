<?php
/* Smarty version 3.1.33, created on 2019-06-13 22:32:02
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d022622d5dc78_63135212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deb6986a92dba5833700c894183c83a69f9754bd' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/product.tpl',
      1 => 1555931076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5d022622d5dc78_63135212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14901728765d022622d11ee7_56275824', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10888263275d022622d15933_31984055', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13384692655d022622d28108_14855490', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_14901728765d022622d11ee7_56275824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_14901728765d022622d11ee7_56275824',
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
class Block_10888263275d022622d15933_31984055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_10888263275d022622d15933_31984055',
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
class Block_21158492105d022622d2bac1_39037225 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'product_flags'} */
class Block_18902799345d022622d2f100_06944341 extends Smarty_Internal_Block
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
class Block_16179376025d022622d35dd2_08241370 extends Smarty_Internal_Block
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
class Block_15457627855d022622d2e779_43656184 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18902799345d022622d2f100_06944341', 'product_flags', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16179376025d022622d35dd2_08241370', 'product_cover_tumbnails', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4245414005d022622d2dd74_29946790 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <div class="product-leftside">
			       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15457627855d022622d2e779_43656184', 'page_content', $this->tplIndex);
?>

			     </div>
        </section>
      <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_header'} */
class Block_8200427005d022622d39d46_62679916 extends Smarty_Internal_Block
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
class Block_10058205555d022622d39277_23297564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8200427005d022622d39d46_62679916', 'page_header', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_3600601055d022622d3edc3_95679161 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemprop="description" style="margin-top: 15px;
}"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
        <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_prices'} */
class Block_2048069455d022622d43589_33823798 extends Smarty_Internal_Block
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
class Block_15685460505d022622d442c8_58306538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product-variants-container">
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_1515541705d022622d4a041_96682600 extends Smarty_Internal_Block
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
class Block_7217808095d022622d46c88_91196823 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1515541705d022622d4a041_96682600', 'product_miniature', $this->tplIndex);
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
class Block_18747865915d022622d4b536_38371398 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_additional_info'} */
class Block_11571885685d022622d4bfb9_42284554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_19835941955d022622d4c9e6_66675736 extends Smarty_Internal_Block
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
class Block_19031826655d022622d4d7d9_72210969 extends Smarty_Internal_Block
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
class Block_7813757475d022622d4efb5_38164159 extends Smarty_Internal_Block
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
class Block_16702361175d022622d50114_52683440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_buy'} */
class Block_9361574185d022622d44e40_81832594 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7217808095d022622d46c88_91196823', 'product_pack', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18747865915d022622d4b536_38371398', 'product_discounts', $this->tplIndex);
?>

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11571885685d022622d4bfb9_42284554', 'product_additional_info', $this->tplIndex);
?>

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19835941955d022622d4c9e6_66675736', 'product_refresh', $this->tplIndex);
?>

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19031826655d022622d4d7d9_72210969', 'product_add_to_cart', $this->tplIndex);
?>

                  <!-- <div class="product-information">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7813757475d022622d4efb5_38164159', 'product_customization', $this->tplIndex);
?>

                    <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16702361175d022622d50114_52683440', 'hook_display_reassurance', $this->tplIndex);
?>

                  </div> -->
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_miniature'} */
class Block_272412055d022622d53d67_69460895 extends Smarty_Internal_Block
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
class Block_8063476375d022622d51022_74557586 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_272412055d022622d53d67_69460895', 'product_miniature', $this->tplIndex);
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
class Block_11340755725d022622d57cb7_25069822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_11077080255d022622d59a19_74348751 extends Smarty_Internal_Block
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
class Block_4348886085d022622d5bc82_05118247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4447220645d022622d5b262_91765639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4348886085d022622d5bc82_05118247', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13384692655d022622d28108_14855490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13384692655d022622d28108_14855490',
  ),
  'page_title' => 
  array (
    0 => 'Block_21158492105d022622d2bac1_39037225',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4245414005d022622d2dd74_29946790',
  ),
  'page_content' => 
  array (
    0 => 'Block_15457627855d022622d2e779_43656184',
  ),
  'product_flags' => 
  array (
    0 => 'Block_18902799345d022622d2f100_06944341',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_16179376025d022622d35dd2_08241370',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10058205555d022622d39277_23297564',
  ),
  'page_header' => 
  array (
    0 => 'Block_8200427005d022622d39d46_62679916',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_3600601055d022622d3edc3_95679161',
  ),
  'product_prices' => 
  array (
    0 => 'Block_2048069455d022622d43589_33823798',
  ),
  'product_variants' => 
  array (
    0 => 'Block_15685460505d022622d442c8_58306538',
  ),
  'product_buy' => 
  array (
    0 => 'Block_9361574185d022622d44e40_81832594',
  ),
  'product_pack' => 
  array (
    0 => 'Block_7217808095d022622d46c88_91196823',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1515541705d022622d4a041_96682600',
    1 => 'Block_272412055d022622d53d67_69460895',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_18747865915d022622d4b536_38371398',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_11571885685d022622d4bfb9_42284554',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_19835941955d022622d4c9e6_66675736',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_19031826655d022622d4d7d9_72210969',
  ),
  'product_customization' => 
  array (
    0 => 'Block_7813757475d022622d4efb5_38164159',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_16702361175d022622d50114_52683440',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_8063476375d022622d51022_74557586',
  ),
  'product_footer' => 
  array (
    0 => 'Block_11340755725d022622d57cb7_25069822',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_11077080255d022622d59a19_74348751',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4447220645d022622d5b262_91765639',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4348886085d022622d5bc82_05118247',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21158492105d022622d2bac1_39037225', 'page_title', $this->tplIndex);
?>
</h1>  
        </div>
        <div class="col-md-8 product-page-col-1-inner-2">    
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4245414005d022622d2dd74_29946790', 'page_content_container', $this->tplIndex);
?>

      </div>
      <div class="col-md-4 product-page-col-1-inner-3">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10058205555d022622d39277_23297564', 'page_header_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3600601055d022622d3edc3_95679161', 'product_description_short', $this->tplIndex);
?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayDeliveryTime'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayDeliveryTime', $_prefixVariable1);?>
        <?php if (empty($_smarty_tpl->tpl_vars['displayDeliveryTime']->value)) {?>       
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2048069455d022622d43589_33823798', 'product_prices', $this->tplIndex);
?>

        <?php }?>
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15685460505d022622d442c8_58306538', 'product_variants', $this->tplIndex);
?>


        <div class="product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9361574185d022622d44e40_81832594', 'product_buy', $this->tplIndex);
?>

        </div> 
      </div>
    </div>
    <div class="col-md-12">
     
    </div>
     
    </form>
	
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8063476375d022622d51022_74557586', 'product_accessories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11340755725d022622d57cb7_25069822', 'product_footer', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11077080255d022622d59a19_74348751', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4447220645d022622d5b262_91765639', 'page_footer_container', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'content'} */
}
