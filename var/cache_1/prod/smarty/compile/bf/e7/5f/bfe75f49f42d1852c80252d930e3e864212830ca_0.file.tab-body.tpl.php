<?php
/* Smarty version 3.1.33, created on 2019-06-29 03:42:32
  from '/home/telaso5/public_html/modules/pricerule/views/tab-body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d16356876a190_28935681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfe75f49f42d1852c80252d930e3e864212830ca' => 
    array (
      0 => '/home/telaso5/public_html/modules/pricerule/views/tab-body.tpl',
      1 => 1555420560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d16356876a190_28935681 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
.rule-item {
    display: inline-block;
    width: 10%;
    vertical-align: top;
    margin: 0px 5px;
}
.rule-item.min-qty-item {
    /* width: 10%; */
}
.rule-item.discount-type-item {
    /* width: 5%; */
}
.rule-item.reduction-item {
    /* width: 5%; */
}
.rule-item.delivery-item {
    /* width: 5%; */
}
.rule-item.currency-item {
    /* width: 10%; */
}
.rule-item.price-item {
    /* width: 10%; */
}
.rule-item.delete-item,.rule-item.edit-item,.rule-item.add-item {
    width: 2%;
}
.rule-item.combination-item {
    width: 25%;
}
.rule-item-row{
  /*display:none*/
}
.rule-item-row.active{
  display: block;
}
.editable-field{
  padding: 4px 5px;
  outline: none!important;
  border: solid 2px transparent;
}
.editable-field.editnow {
    border: solid 2px #000;
}
</style>
<div class="row">
   <div class="col-md-12">
      <div class="container-fluid">
         <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <label>Select Combinations To Display Rules</label>
                    <select id="combination-rule-search" class="form-control combination-rule-search">
                      <option value="0">Select Combination</option>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'combination_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['combination_value']->value) {
?>
                        <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['combination_value']->value['id'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['combination_value']->value['name'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</option>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
          </div>
         </div>
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 pb-1">
               <h2>Price Rule</h2>
               <p class="subtitle">Add the price rules for each quantity bracket. </p>
               <button id="add_more_rule" class="btn btn-primary-reverse btn-outline-primary light-button"  data-id_product="<?php ob_start();
echo $_smarty_tpl->tpl_vars['id_product']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
">
               <i class="material-icons">add_circle</i> Add More
               </button>
            </div>
            <div class="rule-item min-qty-item">
               <div class="form-group">
                  <label class="form-control-label">Min. Quantity</label>
               </div>
            </div>
            <div class="rule-item discount-type-item">
               <div class="form-group">
                  <label class="form-control-label">Discount Type</label>
               </div>
            </div>
            <div class="rule-item price-item">
               <div class="form-group">
                  <label class="form-control-label">Price</label>
               </div>
            </div>
            <div class="rule-item reduction-item">
               <div class="form-group">
                  <label class="form-control-label">Reduction</label>
               </div>
            </div>
            <div class="rule-item delivery-item">
               <div class="form-group">
                  <label class="form-control-label">Delivery</label>    
               </div>
            </div>
            <div class="rule-item currency-item">
               <div class="form-group">
                  <label class="form-control-label">Currency</label>    
               </div>
            </div>
            <div class="rule-item combination-item">
               <div class="form-group">
                  <label class="form-control-label">Combination</label>    
               </div>
            </div>
            <div class="rule-item edit-item">
               <div class="form-group">
                  <label class="form-control-label">Edit</label>    
               </div>
            </div>
            <div class="rule-item delete-item">
               <div class="form-group">
                  <label class="form-control-label">Delete</label>    
               </div>
            </div>
         </div>
      </div>
      <input type="hidden" name="remove_specific_prices" id="remove_specific_prices">
      <div class="container-fluid" id="rule_row_container" data-product-price="<?php ob_start();
echo $_smarty_tpl->tpl_vars['product_price']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">
         <?php if ($_smarty_tpl->tpl_vars['price_rule']->value != '') {?>
         <?php } else { ?>
         <div class="row row-data">
            <div class="rule-item min-qty-item">
               <div class="form-group">
                  <div class="input-group">
                     <input type="hidden" name="specific_price_id[]" value="0">
                     <input type="number" name="min_quantity[]" class="form-control" value="1">
                     <div class="input-group-append">
                        <span class="input-group-text">Unit(s)</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="rule-item discount-type-item">
               <fieldset class="form-group">
                  <select name="discount_type[]" class="custom-select">
                     <option value="amount" >€</option>
                     <option value="percentage">%</option>
                  </select>
               </fieldset>
            </div>
            <div class="rule-item price-item">
               <div class="form-group">
                  <div class="input-group">
                     <input type="number"  name="price[]" class="form-control" value="1">
                  </div>
               </div>
            </div>
            <div class="rule-item reduction-item">
               <div class="form-group">
                  <div class="input-group">
                     <input type="number"  name="rule_price[]" class="form-control" value="1">
                  </div>
               </div>
            </div>
            <div class="rule-item delivery-item">
               <div class="form-group">
                  <div class="input-group">
                     <input type="text"  name="delivery_time[]" class="form-control" value="">
                  </div>
               </div>
            </div>
            <div class="rule-item currency-item">
               <fieldset class="form-group">
                  <select name="rule_currency[]" class="custom-select">
                     <option value="">Select Currency</option>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency_value']->value) {
?>
                          <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['currency_value']->value['id_currency'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['currency_value']->value['name'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</option>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
               </fieldset>
            </div>
            <div class="rule-item combination-item">
               <fieldset class="form-group">
                  <select name="combination[]" class="custom-select">
                      <option value="0">Select Combination</option>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'combination_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['combination_value']->value) {
?>
                          <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['combination_value']->value['id'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['combination_value']->value['name'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</option>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
               </fieldset>
            </div>
            <div class="rule-item edit-item">
               <a class="btn tooltip-link edit-row"><i class="material-icons">edit</i></a>
            </div>
            <div class="rule-item delete-item">
               <a class="btn tooltip-link remove-row"><i class="material-icons">delete</i></a>
            </div>
         </div>
         <?php }?>
      </div>
   </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
   var base_dir = "";
   var currencies = "";
   var combinations = "";
   $(document).ready(function(){
     var id_product  = '<?php ob_start();
echo $_smarty_tpl->tpl_vars['id_product']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
';
     combinations = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['combinations']->value ));?>
';
     currencies   = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['currencies']->value ));?>
';
     base_dir     = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_dir']->value,'htmlall','UTF-8' ));?>
";
     $("#combination-rule-search").change(function(){
        var currentCombination = $(this).val();
         showcombinations(currentCombination,id_product);  
     });
     showcombinations(0,id_product);
     function showcombinations(currentCombination,id_product){
        $('.rule-item-row').removeClass('active');
        $('.rule-item-row[data-item="'+currentCombination+'"]').addClass('active');
        $.ajax({
            type: 'POST',
            url: 'https://telason.com/modules/pricerule/priceruleajax.php',
            data: {
              ajax: true,
              controller: 'pricerule',
              action: 'myFunction',
              token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['token']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
',
              currentCombination:currentCombination,
              id_product:id_product
            },
            success: function(data){
                var obj = jQuery.parseJSON(data);
                console.log(obj);
                $('#rule_row_container').html('');
                $('#rule_row_container').html(obj.html);
            }
        });
     }
     $('#rule_row_container').on('click', '.edit-row',function(event){
      var ithis = $(this);
      var iparent = ithis.parents('.rule-item-row.row.row-data');
      var editablefield = iparent.find('.editable-field');
       if(ithis.hasClass('savenow')){
          var AllEditables =  editablefield;
          var dataToSave = {};
          dataToSave['id_product']        = iparent.attr('data-product');
          dataToSave['specific_price_id'] = ithis.attr('data-id');
          dataToSave['combination']       = iparent.attr('data-item');
          $.each(AllEditables, function( index, value ){
              var dbfield = $(this).attr('db-field');
              var valuetext = $(this).text();
              dataToSave[dbfield] = valuetext;
          });
          $.ajax({
            type: 'POST',
            url: 'https://telason.com/modules/pricerule/priceruleajaxupdate.php',
            data: {
              ajax: true,
              controller: 'pricerule',
              action: 'myFunctionupdate',
              token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['token']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
',
              data:JSON.stringify(dataToSave),
              id_product:id_product
            },success: function(data){
                
            }
          });
          editablefield.attr('contenteditable',false);
          ithis.removeClass('savenow');
          ithis.find('i').text('edit');
          editablefield.removeClass('editnow');
       }else{
          ithis.addClass('savenow');
          ithis.find('i').text('save');
          editablefield.addClass('editnow');
          editablefield.attr('contenteditable',true);
       }
    });
    $('#rule_row_container').on('click', '.add-item', function (event){
       $(this).find('.material-icons').html('refresh');
       var itemrow = $(this).parents('.rule-item-row');
       var newcombinationid = itemrow.find('.combination-item').find('select').val();
       itemrow.attr('data-item',newcombinationid);
       var ruleDate = {}
       ruleDate['min_quantity']   = itemrow.find('.min-qty-item').find('input').val();
       ruleDate['discount_type']  = itemrow.find('.discount-type-item').find('select').val();
       ruleDate['rule_price']     = itemrow.find('.price-item').find('input').val();
       ruleDate['delivery_time']  = itemrow.find('.delivery-item').find('input').val();
       ruleDate['rule_currency']  = itemrow.find('.currency-item').find('select').val();
       ruleDate['combination']    = newcombinationid;
       console.log(ruleDate);
       $.ajax({
            type: 'POST',
            url: 'https://telason.com/modules/pricerule/priceruleajaxadd.php',
            data: {
              ajax: true,
              controller: 'pricerule',
              action: 'myFunctionadd',
              token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['token']->value;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
',
              data:JSON.stringify(ruleDate),
              id_product:id_product
            },success: function(data){
                
            }
        });
    });
    $('#rule_row_container').on('click', '.remove-row', function (event) {
      if($(this).data('id') !=""){
        $(this).closest("div.row-data").remove();
        var specific_price_id = $(this).data('id');
        var ruleDate = {};
        var itemrow = $(this).parents('.rule-item-row');
        var newcombinationid = itemrow.find('.combination-item').find('select').val();
       ruleDate['specific_price_id']   = specific_price_id;
       ruleDate['combination']    = newcombinationid;
       console.log(ruleDate);
        $.ajax({
            type: 'POST',
            url: 'https://telason.com/modules/pricerule/priceruleajaxremove.php',
            data: {
              ajax: true,
              controller: 'pricerule',
              action: 'myFunctionremove',
              token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['token']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
',
              data:JSON.stringify(ruleDate),
              id_product:id_product
            },success: function(data){
                
            }
        });
      }
    });
   });
<?php echo '</script'; ?>
><?php }
}
