<?php
/* Smarty version 3.1.33, created on 2019-11-26 18:28:30
  from '/home/telaso5/public_html/themes/wolf/templates/catalog/_partials/active_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcb7feb160f9_75550907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d10b6da62da106f09b4cdec1b05c477c5d7752' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/catalog/_partials/active_filters.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddcb7feb160f9_75550907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">  
  

  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10160967115ddcb7feb11b18_21330607', 'active_filters_title');
?>

    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2070290715ddcb7feb13ce5_05394180', 'active_filters_item');
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }?>
</section>
<?php }
/* {block 'active_filters_title'} */
class Block_10160967115ddcb7feb11b18_21330607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_10160967115ddcb7feb11b18_21330607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="h6 <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active-filter-title<?php } else { ?>hidden-xs-up<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
  <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_2070290715ddcb7feb13ce5_05394180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_2070290715ddcb7feb13ce5_05394180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li class="filter-block">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Global','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a>
          </li>
        <?php
}
}
/* {/block 'active_filters_item'} */
}
