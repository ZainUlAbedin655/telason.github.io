<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:44:19
  from '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/order-final-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f643c05268_97756741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109dfffb1a565ff7c127d9c7e632174951494f09' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/checkout/_partials/order-final-summary.tpl',
      1 => 1554958053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-final-summary-table.tpl' => 1,
  ),
),false)) {
function content_5d30f643c05268_97756741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<section id="order-summary-content" class="page-content page-order-confirmation">

  <div class="row">

    <div class="col-md-12">

      <h4 class="h4 black"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please check your order before payment','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>

    </div>

  </div>



  <div class="row">

    <div class="col-md-12">

      <h4 class="h4">

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>


        <span class="step-edit step-to-addresses js-edit-addresses"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'edit','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>

      </h4>

    </div>

  </div>

  <div class="row">

    <div class="col-md-6">

      <div class="card noshadow">

        <div class="card-block">

          <h4 class="h5 black addresshead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Delivery Address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>

           
          <span><?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_delivery']]['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_delivery']]['lastname'];?>
</span>
          <span><?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_delivery']]['address1'];?>
</span>
          <span><?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_delivery']]['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_delivery']]['city'];?>
</span>
          <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_delivery']]['phone'];?>

          <!-- to hide country newzealand below line commented by hassaan 11/4/2019 -->
          <!-- <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_delivery']]['formatted'];?>
 -->




        </div>

      </div>

    </div>

    <div class="col-md-6">

      <div class="card noshadow">

        <div class="card-block">

          <h4 class="h5 black addresshead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Invoice Address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>

         <!-- to hide country newzealand below line commented by hassaan 11/4/2019 -->
         <!-- <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_invoice']]['formatted'];?>
 -->


          <span><?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_invoice']]['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_invoice']]['lastname'];?>
</span>
          <span><?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_invoice']]['address1'];?>
</span>
          <span><?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_invoice']]['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_invoice']]['city'];?>
</span>
          <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_invoice']]['phone'];?>


        </div>

      </div>

    </div>

  </div>



  <div class="row">

    <div class="col-md-12">

      <h4 class="h4">

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Method','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>


        <span class="step-edit step-to-delivery js-edit-delivery"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'edit','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>

      </h4>



      <div class="col-md-12 summary-selected-carrier">

        <div class="row">

          <div class="col-md-2">

            <div class="logo-container">

              <?php if ($_smarty_tpl->tpl_vars['selected_delivery_option']->value['logo']) {?>

                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['name'], ENT_QUOTES, 'UTF-8');?>
">

              <?php } else { ?>

                &nbsp;

              <?php }?>

            </div>

          </div>

          <div class="col-md-4">

            <span class="carrier-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>

          </div>

          <div class="col-md-4">

            <span class="carrier-delay"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['delay'], ENT_QUOTES, 'UTF-8');?>
</span>

          </div>

          <div class="col-md-2">

            <span class="carrier-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

          </div>

        </div>

      </div>

    </div>

  </div>



  <div class="row">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1794662045d30f643c03633_95503864', 'order_confirmation_table');
?>


  </div>

</section>

<?php }
/* {block 'order_confirmation_table'} */
class Block_1794662045d30f643c03633_95503864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_confirmation_table' => 
  array (
    0 => 'Block_1794662045d30f643c03633_95503864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-final-summary-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['cart']->value['products'],'products_count'=>$_smarty_tpl->tpl_vars['cart']->value['products_count'],'subtotals'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['cart']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['cart']->value['labels'],'add_product_link'=>true), 0, false);
?>

    <?php
}
}
/* {/block 'order_confirmation_table'} */
}
