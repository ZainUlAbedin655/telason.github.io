<?php
/* Smarty version 3.1.33, created on 2019-06-13 23:29:20
  from 'parent:cataloglistingproductlist' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d023390da42a1_96346839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c58b005b2364709858860ce41bd8563cd7ceddd2' => 
    array (
      0 => 'parent:cataloglistingproductlist',
      1 => 1553516886,
      2 => 'parent',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5d023390da42a1_96346839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin /home/telaso5/public_html/themes/wolf/templates/catalog/listing/product-list.tpl -->




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5487995775d023390d9a059_80791221', 'content');
?>


<!-- end /home/telaso5/public_html/themes/wolf/templates/catalog/listing/product-list.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_6204148055d023390d9a6d0_57989081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <h2 class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h2>

    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_9735555685d023390d9c969_72987513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>

          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_19508885355d023390d9f081_10728869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


         

            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>


          

        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_7410522835d023390da0552_25850502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>

          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_5504065615d023390da1887_57908765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>

          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_5487995775d023390d9a059_80791221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5487995775d023390d9a059_80791221',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_6204148055d023390d9a6d0_57989081',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_9735555685d023390d9c969_72987513',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_19508885355d023390d9f081_10728869',
  ),
  'product_list' => 
  array (
    0 => 'Block_7410522835d023390da0552_25850502',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_5504065615d023390da1887_57908765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6204148055d023390d9a6d0_57989081', 'product_list_header', $this->tplIndex);
?>




    <section id="products" class="wolf-products-list.tpl">

      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>



        <div id="">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9735555685d023390d9c969_72987513', 'product_list_top', $this->tplIndex);
?>


        </div>



        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19508885355d023390d9f081_10728869', 'product_list_active_filters', $this->tplIndex);
?>




        <div id="">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7410522835d023390da0552_25850502', 'product_list', $this->tplIndex);
?>


        </div>



        <div id="js-product-list-bottom">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5504065615d023390da1887_57908765', 'product_list_bottom', $this->tplIndex);
?>


        </div>



      <?php } else { ?>
          <div id="category-description" class="text-muted" style="color: #000000;">The product category you have selected is no currently available for purchase online. This product category is available for purchase directly, but requires a Telason Sales Engineer to assist with identifying the correct part number for the connector designator interface, as there are many options and variables. Please provide your details including the connector part number and manufacturer below and a Telason Sales Engineer will contact you directly.
          </div>

         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'myNewCoolHook'),$_smarty_tpl ) );?>



        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



      <?php }?>

    </section>



  </section>

<?php
}
}
/* {/block 'content'} */
}
