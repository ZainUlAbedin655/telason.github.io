<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:35:05
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bd69336332_95996751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46f66dfdffe44911e10a9461986ad982bb3b0c1b' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1574404575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:pst_serviceblock/views/templates/hook/pst_serviceblock.tpl' => 1,
  ),
),false)) {
function content_5df8bd69336332_95996751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20257065295df8bd6931da61_74364231', 'product_quantity');
?>

    <div class="credit-card-icons-container">
      <div class="credit-card-box credit-visa-box">
        <img src="/themes/wolf_child/assets/img/credit-card-visa.png" alt="visa card" class="credit-card-icons-image">
      </div>
      <div class="credit-card-box credit-master-box">
        <img src="/themes/wolf_child/assets/img/credit-card-master.png" alt="master card" class="credit-card-icons-image">
      </div>
      <div class="credit-card-box box-credit-account" style="padding-top: 8px; width: 34%;">
        <a href="#">Account</a>
      </div>
    </div>
    <!-- <label class="price-label">Price Protection</label> 
    <div class="price" style="max-width: 330px">
      <div class="price-protection">
          <img src="/themes/wolf_child/assets/img/lock.png" class="price-image">
         <div class="price-box">
           <label class="price-label">NEED PRICE PROTECTION ?</label>
         <p >Lock in program specific pricing and protect your design-in and margins. To register 
          <a href="http://telason.com/30-free-sample/?id=1" style="color: #0080c1">CLICK HERE</a></p>
         </div>
      </div>
      <div class="col-md-12" style="float: left;">
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12403774005df8bd6932c467_52721702', 'service_block');
?>

     </div>
    </div> --> 
    
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8043901385df8bd693304a3_06284429', 'product_minimal_quantity');
?>

  <?php }?>
</div>
<?php }
/* {block 'product_availability'} */
class Block_818416035df8bd69323ee4_62277109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span id="product-availability">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                  <i class="material-icons product-available">&#xE5CA;</i>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                  <i class="material-icons product-last-items">&#xE002;</i>
                <?php } else { ?>
                  <i class="material-icons product-unavailable">&#xE14B;</i>
                <?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </span>
          <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_quantity'} */
class Block_20257065295df8bd6931da61_74364231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_20257065295df8bd6931da61_74364231',
  ),
  'product_availability' => 
  array (
    0 => 'Block_818416035df8bd69323ee4_62277109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity">
        <div class="qty">
          <input
            type="text"
            name="qty"
            id="quantity_wanted"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-group"
            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>>
            <i class="material-icons shopping-cart">&#xE547;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          </button>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_818416035df8bd69323ee4_62277109', 'product_availability', $this->tplIndex);
?>

        </div>
      </div>
      
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'service_block'} */
class Block_12403774005df8bd6932c467_52721702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'service_block' => 
  array (
    0 => 'Block_12403774005df8bd6932c467_52721702',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (isset($_smarty_tpl->tpl_vars['listing']->value)) {?>
              <?php $_smarty_tpl->_subTemplateRender('module:pst_serviceblock/views/templates/hook/pst_serviceblock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'service_block'} */
/* {block 'product_minimal_quantity'} */
class Block_8043901385df8bd693304a3_06284429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_8043901385df8bd693304a3_06284429',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Global','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

        <?php }?>
      </p>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
