<?php
/* Smarty version 3.1.33, created on 2019-07-24 01:15:58
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d37088e5f5c79_50668325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1551784404,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d37088e5f5c79_50668325 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_user_info">
    <ul class="expand-more">

  <li>

    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>

    <a

        class="account"

        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"

        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"

        rel="nofollow"

      >

        <i class="material-icons logged">&#xE7FF;</i>

        <span class="user-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>

      </a>

      <a

        class="logout"

        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"

        rel="nofollow"

      >

        <!-- <i class="fa fa-sign-out" aria-hidden="true"></i> -->

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>


      </a>      

    <?php } else { ?>

      <a

        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"

        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"

        rel="nofollow"

      >

       <!-- <i class="fa fa-sign-in" aria-hidden="true"></i> -->

        <span class="sign-in"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>

      </a>

    <?php }?>

  </li>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopLanguage'),$_smarty_tpl ) );?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopCurrency'),$_smarty_tpl ) );?>


  </ul>
  <!-- <div class="pst_userinfotitle"><span class="user-info-icon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></div> -->

  <div class="user-info">

  

  </div>

  

</div><?php }
}
