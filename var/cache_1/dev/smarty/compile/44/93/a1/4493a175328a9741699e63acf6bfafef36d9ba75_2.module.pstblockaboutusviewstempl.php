<?php
/* Smarty version 3.1.33, created on 2019-06-14 00:28:33
  from 'module:pstblockaboutusviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d024171a8d8d0_08867237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4493a175328a9741699e63acf6bfafef36d9ba75' => 
    array (
      0 => 'module:pstblockaboutusviewstempl',
      1 => 1553058831,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d024171a8d8d0_08867237 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/telaso5/public_html/modules/pst_blockaboutus/views/templates/hook/pst_blockaboutus.tpl -->


<div id="blockaboutus" class="col-lg-4 col-md-12 block links">

<div class="title clearfix hidden-md-up" data-target="#block-aboutus" data-toggle="collapse">

		  <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'About Us','d'=>'pst_blockaboutus'),$_smarty_tpl ) );?>
</span>

		  <span class="float-xs-right">

			  <span class="navbar-toggler collapse-icons">

				<i class="material-icons add">&#xE313;</i>

				<i class="material-icons remove">&#xE316;</i>

			  </span>

		  </span>

		</div>

<div id="block-aboutus" class="collapse">

<?php if ($_smarty_tpl->tpl_vars['pstblockaboutusinfos']->value['text'] != '') {?>

		<?php echo $_smarty_tpl->tpl_vars['pstblockaboutusinfos']->value['text'];?>


	<?php } else { ?>		

		<div class="header_logo hidden-md-down" id="_desktop_logo">

				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">

				<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" style="margin-left: 25%";>

				</a>

		</div>

		<span class="block-details">A Specialist Manufacturer Of Backshell Adaptors And Accessories.
Having a sole focus on Backshells and Accessories, TELASON defines itself by having a selective product group with a dedicated manufacturing resource that is not distracted by other connector lines or components. We only make Backshells!
</span>

	<?php }?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPstSocialfollow'),$_smarty_tpl ) );?>


</div>

</div>

<!-- end /home/telaso5/public_html/modules/pst_blockaboutus/views/templates/hook/pst_blockaboutus.tpl --><?php }
}
