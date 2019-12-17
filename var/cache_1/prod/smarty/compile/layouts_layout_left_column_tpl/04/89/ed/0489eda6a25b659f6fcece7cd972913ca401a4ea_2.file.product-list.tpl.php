<?php
/* Smarty version 3.1.33, created on 2019-07-23 23:44:08
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d36f308df8b89_91395403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0489eda6a25b659f6fcece7cd972913ca401a4ea' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/listing/product-list.tpl',
      1 => 1553601457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_5d36f308df8b89_91395403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2410945645d36f308dec965_56964155', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_17464471895d36f308ded2e1_63795727 extends Smarty_Internal_Block
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
class Block_19332398825d36f308df0544_44496523 extends Smarty_Internal_Block
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
class Block_5211585845d36f308df2809_93579135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_16723283715d36f308df4095_47789888 extends Smarty_Internal_Block
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
class Block_2777323935d36f308df5c20_90054869 extends Smarty_Internal_Block
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
class Block_2410945645d36f308dec965_56964155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2410945645d36f308dec965_56964155',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_17464471895d36f308ded2e1_63795727',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_19332398825d36f308df0544_44496523',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_5211585845d36f308df2809_93579135',
  ),
  'product_list' => 
  array (
    0 => 'Block_16723283715d36f308df4095_47789888',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_2777323935d36f308df5c20_90054869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17464471895d36f308ded2e1_63795727', 'product_list_header', $this->tplIndex);
?>


    <section id="products" class="wolf-child-products-list.tpl">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <div id="">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19332398825d36f308df0544_44496523', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5211585845d36f308df2809_93579135', 'product_list_active_filters', $this->tplIndex);
?>


        <div >
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16723283715d36f308df4095_47789888', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2777323935d36f308df5c20_90054869', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'myNewCoolHook'),$_smarty_tpl ) );?>



      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
