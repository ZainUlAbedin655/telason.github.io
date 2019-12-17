<?php
/* Smarty version 3.1.33, created on 2019-07-17 07:55:43
  from '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/product-variants.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2e2bbf097e49_61569522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a0e03d597e7708ebdc3ad1e67b3aa746e86ae4' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/catalog/_partials/product-variants.tpl',
      1 => 1553510814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2e2bbf097e49_61569522 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-variants wolf-child-product-variants" style="overflow: hidden;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'id_attribute_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
?>
        <div class="clearfix product-variants-item  <?php if ($_smarty_tpl->tpl_vars['group']->value['name'] == 'Shell Size') {?>col-md-6 nopaddingl halfdropdown<?php }
if ($_smarty_tpl->tpl_vars['group']->value['name'] == 'Cable Entry') {?>col-md-6 nopaddingr halfdropdown<?php }?>" >
          <span class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select') {?>
              <select class="form-control edge" id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" style="width: 100%;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
?>
                      <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" data-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color') {?>
                  <ul id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
?>
                      <li class="float-xs-left input-container">
                        <label>
                          <input class="input-color edge" type="radio" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                          <span
                            <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>class="color" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>class="color texture" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
                          ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
                        </label>
                      </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio') {?>
                  <ul id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
?>
                      <li class="input-container float-xs-left">
                        <label>
                          <input class="input-radio edge" type="radio" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                          <span class="radio-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </label>
                      </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
            <?php }?>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}