<?php
/* Smarty version 3.1.33, created on 2019-06-14 00:28:33
  from 'module:pstfooterlinkviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d024171a833a7_84029236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e9d0594300704689485f4a87009dcf26442412d' => 
    array (
      0 => 'module:pstfooterlinkviewstemplat',
      1 => 1533163151,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d024171a833a7_84029236 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/telaso5/public_html/modules/pst_footerlink/views/templates/hook/pst_footerlink.tpl -->
<!-- Block links module -->
<div id="links_block_footer" class="block links col-md-12 col-lg-4">
<h2 class="h1 products-section-title hidden-md-down">
				<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our product','mod'=>'pst_footerlink'),$_smarty_tpl ) );?>
</span>
			</h2>	
<div class="title clearfix hidden-md-up" data-target="#pst_footerlink" data-toggle="collapse">
		  <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our product','mod'=>'pst_footerlink'),$_smarty_tpl ) );?>
</span>
		  <span class="float-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			  </span>
		  </span>
		</div>
<div id="links_block_footer" class="">
	
	<ul id="pst_footerlink" class="block_content collapse">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pst_footerlink_links']->value, 'pst_footerlink_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pst_footerlink_link']->value) {
?>
		<?php if (isset($_smarty_tpl->tpl_vars['pst_footerlink_link']->value[$_smarty_tpl->tpl_vars['lang']->value])) {?> 
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pst_footerlink_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pst_footerlink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['pst_footerlink_link']->value['newWindow']) {?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pst_footerlink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8');?>
</a></li>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
</div>

<!-- /Block links module -->
<!-- end /home/telaso5/public_html/modules/pst_footerlink/views/templates/hook/pst_footerlink.tpl --><?php }
}
