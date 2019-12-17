<?php
/* Smarty version 3.1.33, created on 2019-07-17 07:55:42
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2e2bbef25787_79631539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29900fb474ec5a4ac8cc816808dd9157fea50245' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/quickview.tpl',
      1 => 1556000169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5d2e2bbef25787_79631539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-sm-down quickview-container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_392656995d2e2bbeef4ed1_57062566', 'product_cover_tumbnails');
?>

         
        </div>
        <div class="col-md-6 col-sm-6">
          <h2 class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21358216075d2e2bbeef78e8_81397225', 'product_prices');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11967291885d2e2bbef1be27_27970249', 'product_description_short');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4365683395d2e2bbef1d848_17286489', 'product_buy');
?>

		</div>
        </div>
      </div>
     <div class="modal-footer">
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

     </div>
   </div>
 </div>
</div>
<?php }
/* {block 'product_cover_tumbnails'} */
class Block_392656995d2e2bbeef4ed1_57062566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_392656995d2e2bbeef4ed1_57062566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<div class="arrows js-arrows">
				<i class="material-icons arrow-up js-arrow-up">&#xE316;</i>
				<i class="material-icons arrow-down js-arrow-down">&#xE313;</i>
         	 </div>
          <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'product_discount'} */
class Block_17683370805d2e2bbeefd627_22049318 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <div class="product-discount">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

          <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_19145387175d2e2bbef075b4_05622003 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
            <p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Global','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p>
          <?php }?>
        <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_10540310935d2e2bbeef9ec9_70324261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div
        class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>"
        itemprop="offers"
        itemscope
        itemtype
      >
      
        <link itemprop="availability" href="https://schema.org/InStock"/>
        <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

        <div class="current-price">
          <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
      
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17683370805d2e2bbeefd627_22049318', 'product_discount', $this->tplIndex);
?>


          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="discount discount-percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Global','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span>
            <?php } else { ?>
              <span class="discount discount-amount">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Global','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>

              </span>
            <?php }?>
          <?php }?>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19145387175d2e2bbef075b4_05622003', 'product_unit_price', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_12503835465d2e2bbef0ada9_60866046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
        <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Global','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_2668229645d2e2bbef0e0b2_55691849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Global','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
      <?php }?>
    <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_13457875685d2e2bbef10b41_85232034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
        <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Global','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          <?php }?>
        </p>
      <?php }?>
    <?php
}
}
/* {/block 'product_ecotax'} */
/* {block 'product_prices'} */
class Block_21358216075d2e2bbeef78e8_81397225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_21358216075d2e2bbeef78e8_81397225',
  ),
  'product_price' => 
  array (
    0 => 'Block_10540310935d2e2bbeef9ec9_70324261',
  ),
  'product_discount' => 
  array (
    0 => 'Block_17683370805d2e2bbeefd627_22049318',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_19145387175d2e2bbef075b4_05622003',
  ),
  'product_without_taxes' => 
  array (
    0 => 'Block_12503835465d2e2bbef0ada9_60866046',
  ),
  'product_pack_price' => 
  array (
    0 => 'Block_2668229645d2e2bbef0e0b2_55691849',
  ),
  'product_ecotax' => 
  array (
    0 => 'Block_13457875685d2e2bbef10b41_85232034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



            <!-- <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> -->

            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices">
    

     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10540310935d2e2bbeef9ec9_70324261', 'product_price', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12503835465d2e2bbef0ada9_60866046', 'product_without_taxes', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2668229645d2e2bbef0e0b2_55691849', 'product_pack_price', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13457875685d2e2bbef10b41_85232034', 'product_ecotax', $this->tplIndex);
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>


    <div class="tax-shipping-delivery-label">
      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php }?>


          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_11967291885d2e2bbef1be27_27970249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_11967291885d2e2bbef1be27_27970249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_17958932115d2e2bbef20687_16763790 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_12448502625d2e2bbef21bd2_44529742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_16727602785d2e2bbef231a9_91918433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" hidden>
                <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_4365683395d2e2bbef1d848_17286489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_4365683395d2e2bbef1d848_17286489',
  ),
  'product_variants' => 
  array (
    0 => 'Block_17958932115d2e2bbef20687_16763790',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_12448502625d2e2bbef21bd2_44529742',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_16727602785d2e2bbef231a9_91918433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-actions">
              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17958932115d2e2bbef20687_16763790', 'product_variants', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12448502625d2e2bbef21bd2_44529742', 'product_add_to_cart', $this->tplIndex);
?>

                
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16727602785d2e2bbef231a9_91918433', 'product_refresh', $this->tplIndex);
?>

            </form>
          </div>
        <?php
}
}
/* {/block 'product_buy'} */
}
