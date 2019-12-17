<?php
/* Smarty version 3.1.33, created on 2019-06-14 00:28:33
  from 'module:pscurrencyselectorpscurre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0241719b4604_75338648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:pscurrencyselectorpscurre',
      1 => 1533163151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0241719b4604_75338648 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/telaso5/public_html/themes/wolf/modules/ps_currencyselector/ps_currencyselector.tpl -->
<div id="_desktop_currency_selector">
  <div class="currency-selector dropdown js-dropdown">
    <span  class="currency-title hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <!--<span class="expand-more _gray-darker hidden-md-down" data-toggle="dropdown"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</span>
    <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-md-down">
      <i class="material-icons expand-more">&#xE5CF;</i>
    </a>-->
    <ul class="hidden-md-down">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <select class="link hidden-lg-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
</div><!-- end /home/telaso5/public_html/themes/wolf/modules/ps_currencyselector/ps_currencyselector.tpl --><?php }
}
