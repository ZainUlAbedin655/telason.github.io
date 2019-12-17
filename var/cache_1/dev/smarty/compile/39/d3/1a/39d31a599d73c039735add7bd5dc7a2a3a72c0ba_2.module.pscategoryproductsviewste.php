<?php
/* Smarty version 3.1.33, created on 2019-06-13 22:32:03
  from 'module:pscategoryproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0226232fb4c2_47928567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:pscategoryproductsviewste',
      1 => 1555686225,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d0226232fb4c2_47928567 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/telaso5/public_html/themes/wolf/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl -->
<section class="productscategory-products clearfix">

	<h3 class="h3 products-section-title text-uppercase">

	<?php if (count($_smarty_tpl->tpl_vars['products']->value) == 1) {?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Modules.Categoryproducts.Shop'),$_smarty_tpl ) );?>


	<?php } else { ?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Modules.Categoryproducts.Shop'),$_smarty_tpl ) );?>


	<?php }?>

	</h3>

  

	<div class="products">

		<?php $_smarty_tpl->_assignInScope('sliderFor', 4);?> <!-- Define Number of product for SLIDER -->

		<?php $_smarty_tpl->_assignInScope('productCount', count($_smarty_tpl->tpl_vars['products']->value));?>

		

		<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>

		    <div class="product-carousel">

			<ul id="pstproductscategory-carousel" class="pstproductscategory-carousel pst-carousel product_list">

		<?php } else { ?>

			<ul id="pstproductscategory-grid" class="pstproductscategory-grid grid row gridcount product_list">

		<?php }?>

	

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>

			<li class="<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-4 col-md-4 col-lg-4<?php }?>">

				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>

			</li>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</ul>

		

		<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>

			<div class="customNavigation">

				<a class="btn prev pstproductscategory_prev">&nbsp;</a>

				<a class="btn next pstproductscategory_next">&nbsp;</a>

			</div>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>

	  </div>

	  <?php }?>

	</div>

</section>

<!-- end /home/telaso5/public_html/themes/wolf/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl --><?php }
}
