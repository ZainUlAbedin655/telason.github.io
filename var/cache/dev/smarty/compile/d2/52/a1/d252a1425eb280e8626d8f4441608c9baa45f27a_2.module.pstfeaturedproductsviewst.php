<?php
/* Smarty version 3.1.33, created on 2019-11-26 18:29:32
  from 'module:pstfeaturedproductsviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcb83cc822b6_75566883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd252a1425eb280e8626d8f4441608c9baa45f27a' => 
    array (
      0 => 'module:pstfeaturedproductsviewst',
      1 => 1533163151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5ddcb83cc822b6_75566883 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/telaso5/public_html/modules/pst_featuredproducts/views/templates/hook/pst_featuredproducts.tpl -->
<section class="feature-products">
   <div class="products tab-container">
    <div class="homeproducts-row">
      <?php $_smarty_tpl->_assignInScope('sliderFor', 5);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="product-carousel">	
			<ul id="pstfeature-carousel" class="pstfeature-carousel pst-carousel product_list">
		<?php } else { ?>
			<ul id="pstfeature-grid" class="pstfeature-grid grid row gridcount product_list">
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3<?php }?>">				
				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="customNavigation">
				<a class="btn prev pstfeature_prev">prev</a>
				<a class="btn next pstfeature_next">next</a>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 0 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		<a class="all-product-link float-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More Products','mod'=>'pst_featuredproducts'),$_smarty_tpl ) );?>

		</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
	  </div>
	  <?php }?>			
   </div>  	
   </div>
</section><!-- end /home/telaso5/public_html/modules/pst_featuredproducts/views/templates/hook/pst_featuredproducts.tpl --><?php }
}
