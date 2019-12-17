<?php
/* Smarty version 3.1.33, created on 2019-07-13 10:32:05
  from '/home/telaso5/public_html/modules/pricerule/views/product-front-ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d290a65ddfb66_43689150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '115449cbc16a13652970301928d8bc3da9465edd' => 
    array (
      0 => '/home/telaso5/public_html/modules/pricerule/views/product-front-ajax.tpl',
      1 => 1552631261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d290a65ddfb66_43689150 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['combinations']->value) > 0) {?>
<section class="part-number product-front-ajax-tpl">
  <h3>Part Number</h3>
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
<?php }?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
 <div class="panel-group" id="accordion" style="margin-top: 8px;">
  <div class="panel panel-default">
    <div class="panel-heading datasheets">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <h4>Technical Datasheets</h4>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body" style="padding: 2px 10px;">
        <h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
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
<?php echo '<script'; ?>
 type="text/javascript">
  /*if(typeof createPartNumber != undefined)*/
  if(typeof $ != undefined){
    if($('#product-availability').length > 0 && $('section.part-number').length > 0){
      var availability = $('#product-availability').html();
      $('#product-availability').remove();
      $('section.part-number').append('<div id="product-availability">'+availability+'</div>');
    }
  }
<?php echo '</script'; ?>
>
</div><!--product-additional-info-->
<?php }
}
