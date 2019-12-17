<?php
/* Smarty version 3.1.33, created on 2019-07-19 10:45:00
  from '/home/telaso5/public_html/themes/wolf/templates/_partials/form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30f66c194b60_31388921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '793968d25d8013a14f37aef0c7cc80e116f1e658' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/_partials/form-fields.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5d30f66c194b60_31388921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12940285575d30f66c173c54_57464130', 'form_field_item_hidden');
?>


<?php } else { ?>

  <div class="form-group row <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?>has-error<?php }?>">
    <label class="col-md-3 form-control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
    </label>
    <div class="col-md-6<?php if (($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons')) {?> form-control-valign<?php }?>">

      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20707768225d30f66c177a65_14268770', 'form_field_item_select');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1179937645d30f66c17b461_69093215', 'form_field_item_country');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14599698095d30f66c17e967_93627393', 'form_field_item_radio');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15176902735d30f66c181bb9_52430206', 'form_field_item_checkbox');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13751762285d30f66c1840f3_12536091', 'form_field_item_date');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421281785d30f66c186fe6_33186904', 'form_field_item_birthday');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6733160775d30f66c18b059_99597578', 'form_field_item_password');
?>


      <?php } else { ?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12133555045d30f66c18d5e1_68198148', 'form_field_item_other');
?>


      <?php }?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4144933985d30f66c191b86_27273302', 'form_field_errors');
?>


    </div>

    <div class="col-md-3 form-control-comment">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8589451775d30f66c192a43_69464547', 'form_field_comment');
?>

    </div>
  </div>

<?php }
}
/* {block 'form_field_item_hidden'} */
class Block_12940285575d30f66c173c54_57464130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_hidden' => 
  array (
    0 => 'Block_12940285575d30f66c173c54_57464130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
">
  <?php
}
}
/* {/block 'form_field_item_hidden'} */
/* {block 'form_field_item_select'} */
class Block_20707768225d30f66c177a65_14268770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_select' => 
  array (
    0 => 'Block_20707768225d30f66c177a65_14268770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <select class="form-control form-control-select" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
          <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <?php
}
}
/* {/block 'form_field_item_select'} */
/* {block 'form_field_item_country'} */
class Block_1179937645d30f66c17b461_69093215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_country' => 
  array (
    0 => 'Block_1179937645d30f66c17b461_69093215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <select
          class="form-control form-control-select js-country"
          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        >
          <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <?php
}
}
/* {/block 'form_field_item_country'} */
/* {block 'form_field_item_radio'} */
class Block_14599698095d30f66c17e967_93627393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_radio' => 
  array (
    0 => 'Block_14599698095d30f66c17e967_93627393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
          <label class="radio-inline">
            <span class="custom-radio">
              <input
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
              >
              <span></span>
            </span>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>

          </label>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'form_field_item_radio'} */
/* {block 'form_field_item_checkbox'} */
class Block_15176902735d30f66c181bb9_52430206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_checkbox' => 
  array (
    0 => 'Block_15176902735d30f66c181bb9_52430206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <span class="custom-checkbox">
          <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
          <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
          <label><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label >
        </span>
        <?php
}
}
/* {/block 'form_field_item_checkbox'} */
/* {block 'form_field_item_date'} */
class Block_13751762285d30f66c1840f3_12536091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_date' => 
  array (
    0 => 'Block_13751762285d30f66c1840f3_12536091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input class="form-control" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');
}?>">
        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'])) {?>
          <span class="form-control-comment">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>
        <?php
}
}
/* {/block 'form_field_item_date'} */
/* {block 'form_field_item_birthday'} */
class Block_1421281785d30f66c186fe6_33186904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_birthday' => 
  array (
    0 => 'Block_1421281785d30f66c186fe6_33186904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/telaso5/public_html/vendor/smarty/smarty/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>

        <div class="js-parent-focus">
          <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');
$_prefixVariable78 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable79 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable80 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable81 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable82 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable83 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable84 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable78,'field_array'=>$_prefixVariable79,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_prefixVariable80,'month_empty'=>$_prefixVariable81,'year_empty'=>$_prefixVariable82,'start_year'=>$_prefixVariable83-100,'end_year'=>$_prefixVariable84),$_smarty_tpl);?>

        </div>
        <?php
}
}
/* {/block 'form_field_item_birthday'} */
/* {block 'form_field_item_password'} */
class Block_6733160775d30f66c18b059_99597578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_password' => 
  array (
    0 => 'Block_6733160775d30f66c18b059_99597578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="input-group js-parent-focus">
          <input
            class="form-control js-child-focus js-visible-password"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            type="password"
            value=""
            pattern=".{5,}"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
          <span class="input-group-btn">
            <button
              class="btn"
              type="button"
              data-action="show-password"
              data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
              data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
            >
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </button>
          </span>
        </div>
        <?php
}
}
/* {/block 'form_field_item_password'} */
/* {block 'form_field_item_other'} */
class Block_12133555045d30f66c18d5e1_68198148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_other' => 
  array (
    0 => 'Block_12133555045d30f66c18d5e1_68198148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input
          class="form-control"
          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
          value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'])) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        >
        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'])) {?>
          <span class="form-control-comment">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>
        <?php
}
}
/* {/block 'form_field_item_other'} */
/* {block 'form_field_errors'} */
class Block_4144933985d30f66c191b86_27273302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_errors' => 
  array (
    0 => 'Block_4144933985d30f66c191b86_27273302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, false);
?>
      <?php
}
}
/* {/block 'form_field_errors'} */
/* {block 'form_field_comment'} */
class Block_8589451775d30f66c192a43_69464547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_comment' => 
  array (
    0 => 'Block_8589451775d30f66c192a43_69464547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

      <?php }?>
      <?php
}
}
/* {/block 'form_field_comment'} */
}
