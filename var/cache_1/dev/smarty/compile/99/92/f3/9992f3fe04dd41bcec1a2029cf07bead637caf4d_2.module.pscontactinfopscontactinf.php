<?php
/* Smarty version 3.1.33, created on 2019-06-14 00:28:33
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d024171acbec0_27482353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1552549116,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d024171acbec0_27482353 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/telaso5/public_html/themes/wolf/modules/ps_contactinfo/ps_contactinfo.tpl -->


<div class="block-contact col-md-12 col-lg-12 links wrapper">

  

   		<h3 class="text-uppercase block-contact-title hidden-sm-down"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></h3>

      

		<div class="title clearfix hidden-md-up" data-target="#block-contact_list" data-toggle="collapse">

		  <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>

		  <span class="float-xs-right">

			  <span class="navbar-toggler collapse-icons">

				<i class="material-icons add">&#xE313;</i>

				<i class="material-icons remove">&#xE316;</i>

			  </span>

		  </span>

		</div>

	  

	  <ul id="block-contact_list" class="collapse">

  <li><div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div><div class="data">TELASON BACKSHELLS & ACCESSORIES</div></li>
  <!-- <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
 -->

      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>

        <li>

        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>

        <div class="data">

        
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>


        </div>

        </li>

      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>

        <li>

        <div class="icon"><i class="fa fa-fax" aria-hidden="true"></i></div>

        <div class="data">

        
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>


        </div>

        </li>

      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>

        <li>

        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>

        <div class="data">Email us: <span>sales@telason.com</span>

        <!-- 
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email us: [1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 -->

        </div>

        </li>

      <?php }?>

  </ul>



  

</div><!-- end /home/telaso5/public_html/themes/wolf/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
