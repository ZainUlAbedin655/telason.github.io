<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:35:04
  from '/home/telaso5/public_html/modules/pricerule/views/views2/product-front2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bd68e756f6_55400941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c35294320ae3ef135e82c81559163b3a268a7be2' => 
    array (
      0 => '/home/telaso5/public_html/modules/pricerule/views/views2/product-front2.tpl',
      1 => 1574928547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8bd68e756f6_55400941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['combinations']->value) > 0) {?>

<section class="part-number product-front-tpl product-2 ">
    
  <div style="font-weight:bold;">Part Number</div>
  
  <div class="box-container" >
  <div class="box" style="width: 100%;">
    <input type="text" readonly="" name="reference" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_reference']->value, ENT_QUOTES, 'UTF-8');?>
" class="part-number-input">
    <?php
$_smarty_tpl->tpl_vars['attributeGroups'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['attributeGroups']->step = 1;$_smarty_tpl->tpl_vars['attributeGroups']->total = (int) ceil(($_smarty_tpl->tpl_vars['attributeGroups']->step > 0 ? count($_smarty_tpl->tpl_vars['combinations']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['combinations']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['attributeGroups']->step));
if ($_smarty_tpl->tpl_vars['attributeGroups']->total > 0) {
for ($_smarty_tpl->tpl_vars['attributeGroups']->value = 0, $_smarty_tpl->tpl_vars['attributeGroups']->iteration = 1;$_smarty_tpl->tpl_vars['attributeGroups']->iteration <= $_smarty_tpl->tpl_vars['attributeGroups']->total;$_smarty_tpl->tpl_vars['attributeGroups']->value += $_smarty_tpl->tpl_vars['attributeGroups']->step, $_smarty_tpl->tpl_vars['attributeGroups']->iteration++) {
$_smarty_tpl->tpl_vars['attributeGroups']->first = $_smarty_tpl->tpl_vars['attributeGroups']->iteration === 1;$_smarty_tpl->tpl_vars['attributeGroups']->last = $_smarty_tpl->tpl_vars['attributeGroups']->iteration === $_smarty_tpl->tpl_vars['attributeGroups']->total;?>
     <input type="text" readonly="" name="partnumber[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attributeGroups']->value, ENT_QUOTES, 'UTF-8');?>
]" class="partnumber-input" value="">
    <?php }
}
?>
  </div> 
  </div>
</section> 

<?php }
if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
 <div  class="panel-group" id="accordion" style="margin-top: 8px;">
  <div class="panel panel-default">
    <div class="panel-heading datasheets">
      <h3 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <div>Technical Datasheets</div>
        </a>
      </h3>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body" style="padding: 2px 10px;">
        <div class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><i class="fa fa-file-pdf-o" style="font-size:18px; color:red"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>  |
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
</div>
<?php }?>   

<a class="btn btn-primary price-request" style="width:100%; margin-top:16px; font-size:15px; font-weight:600;" href="https://www.telason.com/329-need-pricing-and-availability">Pricing Request</a>


<?php echo '<script'; ?>
 type="text/javascript">
  /*if(typeof createPartNumber != undefined)*/
  if(typeof $ != 'undefined'){
    if($('#product-availability').length > 0 && $('section.part-number').length > 0){
      var availability = $('#product-availability').html();
      $('#product-availability').remove();
      $('section.part-number').append('<div id="product-availability">'+availability+'</div>');
    }
  }
<?php echo '</script'; ?>
>

</div><!--product-additional-info-->
</div><!--product-actions-->
</div><!--product-variants-container-->
</div><!--product-page-col-1-inner-3-->

<div class="col-md-12 description-product-details-col">
   <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">

        <div class="panel-heading" style="background-color: #f1f1f1;">
          <h3 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              <h3>Description</h3>
            </a>
          </h3>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11234097315df8bd68e248c7_30244922', 'product_description');
?>

          </div>
        </div>
      </div>
    </div>
    <?php }?>
    
    
    
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144338565df8bd68e27bb7_76669825', 'product_tabs');
?>

    
</div>
  <!-- description-product-details-col -->

</div><!--product-page-col-1-->

<div class="col-md-3 product-page-col-2">
  <div class="product-actions">
    <div class="product-additional-info-2">
<section class="product-discountss product-front-tpl">
  <table class="table-product-discountss">
    <thead>
      <tr>
        <th>Quantity</th>
        <th>Price</th>
        <th class="hide hidden">Product price</th>
        <th class="hide hidden">Rule price</th>
        <th class="hide hidden">Price rule</th>
        <th>Delivery</th>
      </tr>
    </thead>
    <tbody>
    <?php if (count($_smarty_tpl->tpl_vars['price_rule']->value) > 0) {?>
      <?php if ($_smarty_tpl->tpl_vars['price_rule']->value != '') {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['price_rule']->value, 'value', false, NULL, 'value', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <tr>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['min_quantity'], ENT_QUOTES, 'UTF-8');?>
+</td>
          <td>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['value']->value['discount_type'] == 'percentage') {?>
              <?php echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['product_price']->value-(($_smarty_tpl->tpl_vars['value']->value['rule_price']*$_smarty_tpl->tpl_vars['currencyMultipler']->value)*$_smarty_tpl->tpl_vars['product_price']->value/100)), ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
             <?php echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['product_price']->value-($_smarty_tpl->tpl_vars['value']->value['rule_price']*$_smarty_tpl->tpl_vars['currencyMultipler']->value)), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
          </td>
          <td class="hide hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_price']->value, ENT_QUOTES, 'UTF-8');?>
</td>
          <td class="hide hidden"><?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['value']->value['rule_price']*$_smarty_tpl->tpl_vars['currencyMultipler']->value), ENT_QUOTES, 'UTF-8');?>
</td>
          <td class="hide hidden"><?php echo htmlspecialchars(print_r($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
    <?php }?>
    </tbody>
  </table>
</section>

<style type="text/css">
.product-variants>.product-variants-item select {
    max-width: 100%;
}
.product-discounts{
  display: none !important;
}
.product-discountss{
  margin-top: 15px !important;
}
.table-product-discountss {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.table-product-discountss td, #customers th {
  border: 1px solid #ddd;
  padding: 10px;
}
.table-product-discountss tr:nth-child(even){
  background-color: #f2f2f2;
}
.table-product-discountss tr:hover {
  background-color: #ddd;
}
.table-product-discountss th {
  padding: 10px;
  text-align: left;
  background-color: #0080c1;
  color: white;
}
section.part-number {}

section.part-number .box {
  display: inline-block;
  margin: 5px 3px 5px 0px;
}
.product-additional-info .social-sharing {
  display: none;
}
#product-availability {
    /*margin: 10px 10px 0;*/
    /*position: absolute;*/
    /*width: 300px;*/
    /*left: -70px;*/
    float: right;
    margin-top: -30px;
}
.product-actions .control-label{
  width: 70px;
}
.box-container {}



section.part-number .box input {
    display: block;
    width: 70px;
    width: 34px;
    padding: 5px;
    border: 2px solid #444444;
    font-weight: bold;
}
section.part-number .box:first-child input {
    width: 130px;
    width: 18%;
    max-width: 60px;
    text-align: center;
}

body#product form#add-to-cart-or-refresh {
    display: grid;
}
body#product .product-actions .product-additional-info {
    order: 2;
}
body#product .product-actions .product-add-to-cart {
    order: 3;
}

body#product form .product-quantity{
  display: inline-block;width: 70%;
}
body#product .product-actions form .control-label {
    float: left;
    display: inline-block;
    width: 80px;
    vertical-align: top;
    margin-top: 7px;
}
body#product form .product-quantity .qty {
    float: none;
    display: inline-block;
    margin: 0px;
    vertical-align: top;
}
body#product form .product-quantity .add {
    float: right;
    display: inline-block;
    margin: 0px;
    vertical-align: top;
    position: relative;
}
body#product .product-variants>.product-variants-item:last-child {
    width: 100%;
    display: block;
}

body#product .product-variants>.product-variants-item {
    display: inline-block;
    /*width: 45%;*/
    margin: 10px 0px;
}

body#product .product-variants>.product-variants-item:last-child span {
    width: 100%;
}   

/*new styling*/


.displayProductAdditionalInfo2 .panel-group{
    display:none;
   
}

.displayProductAdditionalInfo2 .price-request{
    display:none;
}



.product-additional-info .part-number{
    display:none;
    
}

.product-additional-info2 .description-product-details-col {
    display:none;
}


.displayProductAdditionalInfo2 .description-product-details-col {
    display:none;
}

.panel-group1{
    display:none;
}



.product-additional-info-2{
    display:none;
}

.description-product-details-col{

}

.class {
    display:none;
}

.panelg.panel-group{
    display:none;
}

/*.description-product-details-col{
    height:500px;
    width:100%;
    position:relative;
    top:100%;
    overflow:hidden;
}*/

/*.description-product-details-col:nth-child(3n+3){
    display:none;
}*/
.description-product-details-col:nth-child(-n+3) {
    display:none;
}




</style>
<?php }
/* {block 'product_description'} */
class Block_11234097315df8bd68e248c7_30244922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description' => 
  array (
    0 => 'Block_11234097315df8bd68e248c7_30244922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="product-description" style="padding-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

              </div>
            <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reference'} */
class Block_20229609145df8bd68e29514_45550247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                  <div class="product-manufacturer" style="padding-left: 10px;">
                    <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="img img-thumbnail manufacturer-logo" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                      </a>
                    <?php } else { ?>
                      <label ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                      <span>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
                      </span>
                    <?php }?>
                  </div>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) {?>
                  <div class="product-reference" style="padding-left: 10px;">
                    <label ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
                    <span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>
                <?php }?>
              <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
class Block_11520207725df8bd68e38805_02631352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
                  <div class="product-quantities" style="padding-left: 10px;">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                    <span data-stock="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>
                <?php }?>
              <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability_date'} */
class Block_10103436235df8bd68e3f909_17612231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
                  <div class="product-availability-date" style="padding-left: 10px;">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>
                <?php }?>
              <?php
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_out_of_stock'} */
class Block_18796452805df8bd68e43f33_88377376 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="product-out-of-stock" style="padding-left: 10px;">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                </div>
              <?php
}
}
/* {/block 'product_out_of_stock'} */
/* {block 'product_features'} */
class Block_3580019175df8bd68e460e4_50316709 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?>
                  <section class="product-features" style="padding-left: 10px;">
                    <p class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                    <dl class="data-sheet">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                        <dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt>
                        <dd class="value"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['value'],'htmlall' )));?>
</dd>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </dl>
                  </section>
                <?php }?>
              <?php
}
}
/* {/block 'product_features'} */
/* {block 'product_specific_references'} */
class Block_14756618085df8bd68e4f482_56433214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_references'])) {?>
                  <section class="product-features" style="padding-left: 10px;">
                    <p class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific References','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                      <dl class="data-sheet">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['specific_references'], 'reference', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['reference']->value) {
?>
                          <dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</dt>
                          <dd class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </dl>
                  </section>
                <?php }?>
              <?php
}
}
/* {/block 'product_specific_references'} */
/* {block 'product_condition'} */
class Block_2850719895df8bd68e56123_30279879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
                  <div class="product-condition" style="padding-left: 10px;">
                    <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
                    <link itemprop="itemCondition" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>
                <?php }?>
              <?php
}
}
/* {/block 'product_condition'} */
/* {block 'product_details'} */
class Block_2947372975df8bd68e28986_05807392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20229609145df8bd68e29514_45550247', 'product_reference', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11520207725df8bd68e38805_02631352', 'product_quantities', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10103436235df8bd68e3f909_17612231', 'product_availability_date', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18796452805df8bd68e43f33_88377376', 'product_out_of_stock', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3580019175df8bd68e460e4_50316709', 'product_features', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14756618085df8bd68e4f482_56433214', 'product_specific_references', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2850719895df8bd68e56123_30279879', 'product_condition', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_tabs'} */
class Block_144338565df8bd68e27bb7_76669825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_tabs' => 
  array (
    0 => 'Block_144338565df8bd68e27bb7_76669825',
  ),
  'product_details' => 
  array (
    0 => 'Block_2947372975df8bd68e28986_05807392',
  ),
  'product_reference' => 
  array (
    0 => 'Block_20229609145df8bd68e29514_45550247',
  ),
  'product_quantities' => 
  array (
    0 => 'Block_11520207725df8bd68e38805_02631352',
  ),
  'product_availability_date' => 
  array (
    0 => 'Block_10103436235df8bd68e3f909_17612231',
  ),
  'product_out_of_stock' => 
  array (
    0 => 'Block_18796452805df8bd68e43f33_88377376',
  ),
  'product_features' => 
  array (
    0 => 'Block_3580019175df8bd68e460e4_50316709',
  ),
  'product_specific_references' => 
  array (
    0 => 'Block_14756618085df8bd68e4f482_56433214',
  ),
  'product_condition' => 
  array (
    0 => 'Block_2850719895df8bd68e56123_30279879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <div class="panelg">
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #f1f1f1;">
          <h3 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
              <h3>Product Details</h3>
            </a>
          </h3>
        </div>
        <div id="collapseThree" class="panel-collapse collapse in">
          <div class="panel-body">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2947372975df8bd68e28986_05807392', 'product_details', $this->tplIndex);
?>

          </div>
        </div>
      </div>
    </div>
   </div>
    <?php
}
}
/* {/block 'product_tabs'} */
}
