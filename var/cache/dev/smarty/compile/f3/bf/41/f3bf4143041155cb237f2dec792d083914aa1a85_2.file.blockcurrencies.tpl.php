<?php
/* Smarty version 3.1.33, created on 2019-07-24 20:55:43
  from '/home/telaso5/public_html/themes/wolf_child/modules/blockcurrencies/blockcurrencies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d381d0fe65ce4_07002508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3bf4143041155cb237f2dec792d083914aa1a85' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1554291300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d381d0fe65ce4_07002508 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block currencies module -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
blockcurrencies.js"><?php echo '</script'; ?>
>
<div id="currencies_block_top" style="float: right;">
	<form id="setCurrency" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_uri']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
    <?php if ($_smarty_tpl->tpl_vars['currenciesAsDropDown']->value) {?>
     <?php if ($_smarty_tpl->tpl_vars['beforeCurrencies']->value && $_smarty_tpl->tpl_vars['labelEnabled']->value) {?>
        <p  style="text-align:left;display:<?php if ($_smarty_tpl->tpl_vars['showInSameLine']->value) {?>block <?php } else { ?>inline-block <?php }?>">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl ) );?>

        </p>
        <?php }?>
    <select onchange="setCurrency(this.value)" style="display:inline-block">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'f_currency', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['f_currency']->value) {
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['id_currency'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['id_currency_cookie']->value)) {
if ($_smarty_tpl->tpl_vars['id_currency_cookie']->value == $_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?> selected<?php }
}?>>
                    
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    
                    <span style="float: right;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</span>
                </option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select> 
    <?php } else { ?>
		<ul>
        <?php if ($_smarty_tpl->tpl_vars['labelEnabled']->value && $_smarty_tpl->tpl_vars['beforeCurrencies']->value) {?>
        <li style="display:block; padding-top: 4px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl ) );?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['showInSameLine']->value) {?><br /><?php }?>
        <?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'f_currency', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['f_currency']->value) {
?>
				<li <?php if (isset($_smarty_tpl->tpl_vars['id_currency_cookie']->value)) {
if ($_smarty_tpl->tpl_vars['id_currency_cookie']->value == $_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }
}?> style="padding-top: 4px;">
                    <a href="javascript:setCurrency(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['id_currency'], ENT_QUOTES, 'UTF-8');?>
);" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    <img src="../../img/l/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['id_currency'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="">
                    <span style="float: right;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </a>
					<!-- <a href="javascript:setCurrency(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['id_currency'], ENT_QUOTES, 'UTF-8');?>
);" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a> -->
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
   <?php }?>
    <input type="hidden" name="id_currency" id="id_currency" value=""/>
    <input type="hidden" name="SubmitCurrency" value="" />
    <?php if ($_smarty_tpl->tpl_vars['labelEnabled']->value && !$_smarty_tpl->tpl_vars['beforeCurrencies']->value) {?>
        <p style="text-align:left;display:<?php if ($_smarty_tpl->tpl_vars['showInSameLine']->value) {?>block <?php } else { ?>inline-block <?php }?>">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcurrencies_sign']->value, ENT_QUOTES, 'UTF-8');?>

        </p>
	<?php }?>   
	</form>
</div>
<!-- /Block currencies module -->
<div class="contact-us">
    <p class="contact-us-p">Contact Us</p>
    <p class="contact-us-p" style="font-weight: bold;">UK +44 1213 680279</p>
    <p class="contact-us-p" style="font-weight: bold;">US +1 858 284 4388</p>
    <p class="contact-us-p" style="font-weight: bold;"><a href="mailto:sales@telason.com">sales@telason.com</a></p>
</div>
<?php }
}
