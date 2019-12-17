<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:45:57
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8bff536fb41_78261180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1574931128,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8bff536fb41_78261180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!-- Block search module TOP -->

<div id="search_widget" class="col-md-5 col-sm-12 search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">

	<!--<span class="search_button"></span>-->

	<div class="searchtoggle">            

	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">

		<input type="hidden" name="controller" value="search">

		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">

		<button type="submit">			

			<span class="pst-search-icon"></span>

		</button>

	</form>
	<span class="search-text"><a href="https://www.telason.com/330-can-t-find-what-you-need" style="color: #0A80BE;">Can’t Find What You Need?</a></spans>

	</div>

</div>

<!-- /Block search module TOP -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7840481525df8bff536f3c8_12817761', 'contact-us');
?>

<?php }
/* {block 'contact-us'} */
class Block_7840481525df8bff536f3c8_12817761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contact-us' => 
  array (
    0 => 'Block_7840481525df8bff536f3c8_12817761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="contact-us" >
    <p class="contact-us-p">Contact Us</p>
    <p class="contact-us-p" style="font-weight: bold;">UK +44 1213 680279</p>
    <p class="contact-us-p" style="font-weight: bold;">US +1 858 284 4388</p>
    <p class="contact-us-p" style="font-weight: bold;"><a href="mailto:sales@telason.com">sales@telason.com</a></p>
</div>

<?php
}
}
/* {/block 'contact-us'} */
}
