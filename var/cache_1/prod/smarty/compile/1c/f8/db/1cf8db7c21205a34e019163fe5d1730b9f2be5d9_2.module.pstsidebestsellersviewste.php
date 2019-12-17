<?php
/* Smarty version 3.1.33, created on 2019-07-24 01:12:23
  from 'module:pstsidebestsellersviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3707b72c0188_05867267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf8db7c21205a34e019163fe5d1730b9f2be5d9' => 
    array (
      0 => 'module:pstsidebestsellersviewste',
      1 => 1555670384,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3707b72c0188_05867267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="sidebar-bestseller block">

  <div class="block_title hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','mod'=>'pst_sidebestsellers'),$_smarty_tpl ) );?>
</div>

  <h4 class="block_title hidden-lg-up" data-target="#block_bestseller_toggle" data-toggle="collapse"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','mod'=>'pst_sidebestsellers'),$_smarty_tpl ) );?>


    <span class="float-xs-right">

      <span class="navbar-toggler collapse-icons">

      <i class="material-icons add">&#xE313;</i>

      <i class="material-icons remove">&#xE316;</i>

      </span>

    </span>

  </h4>

  <div class="block_content collapse" id="block_bestseller_toggle"> 

  <div class="products clearfix">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>

    <div class="product-item">

    <div class="left-part">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20553680055d3707b72b6622_80175227', 'product_thumbnail');
?>


    </div>



<div class="right-part">

   <div class="product-description">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13689769855d3707b72b82a1_39051955', 'product_name');
?>




      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3658943895d3707b72b9826_83239127', 'product_price_and_shipping');
?>


  </div>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19925035755d3707b72bdda8_00341711', 'product_buy');
?>


  </div>

  </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  </div>

  <div class="clearfix">

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allBestSellers']->value, ENT_QUOTES, 'UTF-8');?>
" class="allproducts"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Products','mod'=>'pst_sidebestsellers'),$_smarty_tpl ) );?>
</a>

  </div>

  </div>

</div>

<?php }
/* {block 'product_thumbnail'} */
class Block_20553680055d3707b72b6622_80175227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_20553680055d3707b72b6622_80175227',
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
class Block_13689769855d3707b72b82a1_39051955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_13689769855d3707b72b82a1_39051955',
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
class Block_3658943895d3707b72b9826_83239127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_3658943895d3707b72b9826_83239127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>

          <div class="product-price-and-shipping">

		  <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>




              <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>

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
/* {block 'product_buy'} */
class Block_19925035755d3707b72bdda8_00341711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_19925035755d3707b72bdda8_00341711',
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
