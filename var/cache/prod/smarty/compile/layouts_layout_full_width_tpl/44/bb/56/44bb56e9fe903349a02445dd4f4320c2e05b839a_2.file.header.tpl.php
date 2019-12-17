<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:35:04
  from '/home/telaso5/public_html/themes/wolf/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bd68387343_18940901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44bb56e9fe903349a02445dd4f4320c2e05b839a' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf/templates/_partials/header.tpl',
      1 => 1533163151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8bd68387343_18940901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5909114415df8bd6837f879_54581876', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10084323715df8bd683813c9_29745977', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5189855555df8bd68383170_31008882', 'header_top');
?>

<div class="nav-bar">
<div class="top-container container">
  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

</div>
</div><?php }
/* {block 'header_banner'} */
class Block_5909114415df8bd6837f879_54581876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_5909114415df8bd6837f879_54581876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_10084323715df8bd683813c9_29745977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_10084323715df8bd683813c9_29745977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav hidden-lg-up">
<div class="top-container container">
      <div class="nav-inner">  
		<div class="hidden-md-down">
			<div class="left-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

			</div>
			
			<div class="right-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

			</div>
		</div>
		
		<div class="hidden-lg-up text-xs-center mobile">
			<div class="float-xs-left" id="menu-icon">
				<i class="material-icons menu-open">&#xE5D2;</i>
				<i class="material-icons menu-close">&#xE5CD;</i>			  
			</div>
			<div class="float-xs-right" id="_mobile_cart"></div>
			<div class="float-xs-right" id="_mobile_user_info"></div>
			<div class="top-logo" id="_mobile_logo"></div>
			<div class="clearfix"></div>
		</div>
      </div>
</div>
</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_5189855555df8bd68383170_31008882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_5189855555df8bd68383170_31008882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-top">
	<div class="top-container container">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopSearch'),$_smarty_tpl ) );?>

			<div class="header_logo hidden-md-down" id="_desktop_logo">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				</a>
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

		
			<div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
					<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
					<div class="js-top-menu-bottom">				
						<div id="_mobile_pst_categorycmsblock"></div>		
						<div id="_mobile_currency_selector"></div>
						<div id="_mobile_language_selector"></div>
						<div id="_mobile_contact_link"></div>
					</div>
			</div>
	</div>
	</div>	
<?php
}
}
/* {/block 'header_top'} */
}
