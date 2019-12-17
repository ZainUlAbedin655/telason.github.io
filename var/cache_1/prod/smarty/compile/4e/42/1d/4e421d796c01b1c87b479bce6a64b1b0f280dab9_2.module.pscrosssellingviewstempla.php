<?php
/* Smarty version 3.1.33, created on 2019-07-23 23:59:04
  from 'module:pscrosssellingviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d36f688d4a662_97578625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e421d796c01b1c87b479bce6a64b1b0f280dab9' => 
    array (
      0 => 'module:pscrosssellingviewstempla',
      1 => 1533163151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d36f688d4a662_97578625 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="crosssell-products clearfix">
	<h2 class="h1 products-section-title text-uppercase">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers who bought this product also bought:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

	</h2>
	<div class="products">
		
		<?php $_smarty_tpl->_assignInScope('sliderFor', 4);?> <!-- Define Number of product for SLIDER -->
		<?php $_smarty_tpl->_assignInScope('productCount', count($_smarty_tpl->tpl_vars['products']->value));?>
		
		<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		 <div class="product-carousel">
			<ul id="pstcrosssell-carousel" class="pstcrosssell-carousel pst-carousel product_list">
		<?php } else { ?>
			<ul id="pstcrosssell-grid" class="pstcrosssell-grid  grid row gridcount product_list">
		<?php }?>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-4 col-md-3 col-lg-3<?php }?>">
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
				<a class="btn prev pstcrosssell_prev">&nbsp;</a>
				<a class="btn next pstcrosssell_next">&nbsp;</a>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
	  </div>
	  <?php }?>
	</div> 
</section>
<?php }
}
