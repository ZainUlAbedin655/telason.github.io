<?php
/* Smarty version 3.1.33, created on 2019-11-26 18:28:30
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcb7fec01799_47884277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1533163151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddcb7fec01799_47884277 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/telaso5/public_html/themes/wolf/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
<div id="search_filters_wrapper" class="hidden-md-down block">
  <div id="search_filter_controls" class="hidden-lg-up">
      <span id="_mobile_search_filters_clear_all"></span> 
      <button class="btn btn-secondary ok">
        <i class="material-icons">&#xE876;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </button>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<!-- end /home/telaso5/public_html/themes/wolf/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}