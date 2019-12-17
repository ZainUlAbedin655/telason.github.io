<?php
/* Smarty version 3.1.33, created on 2019-07-24 20:51:25
  from 'module:pstsidespecialsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d381c0d00b2a8_71835220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56bb6ad0c6e4bb35b81e79882f9601bd58355ad' => 
    array (
      0 => 'module:pstsidespecialsviewstempl',
      1 => 1555670385,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d381c0d00b2a8_71835220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /home/telaso5/public_html/modules/pst_sidespecials/views/templates/hook/pst_sidespecials.tpl -->


<div class="sidebar-specials block">

<div class="block_title hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Products','mod'=>'pst_sidespecials'),$_smarty_tpl ) );?>
</div>

<h4 class="block_title hidden-lg-up" data-target="#block_specials_toggle" data-toggle="collapse"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Products','mod'=>'pst_sidespecials'),$_smarty_tpl ) );?>


    <span class="float-xs-right">

      <span class="navbar-toggler collapse-icons">

      <i class="material-icons add">&#xE313;</i>

      <i class="material-icons remove">&#xE316;</i>

      </span>

    </span>

  </h4>

 <div class="block_content collapse" id="block_specials_toggle">

  <div class="products clearfix">

   

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>

    <div class="product-item">

    <div class="left-part">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2383679535d381c0d000029_64814633', 'product_thumbnail');
?>


    </div>





<div class="right-part">

  <div class="product-description">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14203074895d381c0d001c43_69703883', 'product_name');
?>




      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21026822905d381c0d003354_15622518', 'product_price_and_shipping');
?>


  </div>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2269694215d381c0d008e11_81134959', 'product_buy');
?>


</div>

    </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  </div>

  <div class="clearfix">

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allSpecialProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
" class="allproducts"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Products','mod'=>'pst_sidespecials'),$_smarty_tpl ) );?>
</a>

  </div>

  </div>

</div>

<!-- end /home/telaso5/public_html/modules/pst_sidespecials/views/templates/hook/pst_sidespecials.tpl --><?php }
/* {block 'product_thumbnail'} */
class Block_2383679535d381c0d000029_64814633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_2383679535d381c0d000029_64814633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">

        <img

          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
"

          alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"

        >

      </a>

    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_14203074895d381c0d001c43_69703883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_14203074895d381c0d001c43_69703883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <div class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></div>

      <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_21026822905d381c0d003354_15622518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_21026822905d381c0d003354_15622518',
  ),
);
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
/* {/block 'product_price_and_shipping'} */
/* {block 'product_buy'} */
class Block_2269694215d381c0d008e11_81134959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_2269694215d381c0d008e11_81134959',
  ),
);
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

					</form>

				</div>

			<?php }?>

	<?php
}
}
/* {/block 'product_buy'} */
}
