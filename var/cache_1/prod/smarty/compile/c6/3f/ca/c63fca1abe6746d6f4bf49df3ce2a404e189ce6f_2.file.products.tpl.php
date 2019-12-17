<?php
/* Smarty version 3.1.33, created on 2019-07-23 07:08:33
  from '/home/telaso5/public_html/themes/wolf/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3609b10c7e15_46320804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63fca1abe6746d6f4bf49df3ce2a404e189ce6f' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/catalog/_partials/products.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-listgrid.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5d3609b10c7e15_46320804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
	<div class="products row">
		<ul class="product_list grid gridcount"> <!-- removed product_grid-->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17127600825d3609b10c6146_06829959', 'product_miniature');
?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
  

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12738482985d3609b10c7093_06279887', 'pagination');
?>

</div>
<?php }
/* {block 'product_miniature'} */
class Block_17127600825d3609b10c6146_06829959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_17127600825d3609b10c6146_06829959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-listgrid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
					</li>
				<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_12738482985d3609b10c7093_06279887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_12738482985d3609b10c7093_06279887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
	<?php
}
}
/* {/block 'pagination'} */
}
