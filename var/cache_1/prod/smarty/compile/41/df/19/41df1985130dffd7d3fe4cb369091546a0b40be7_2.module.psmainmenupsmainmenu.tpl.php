<?php
/* Smarty version 3.1.33, created on 2019-07-24 01:12:23
  from 'module:psmainmenupsmainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3707b7235640_69460557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:psmainmenupsmainmenu.tpl',
      1 => 1560416260,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3707b7235640_69460557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => '/home/telaso5/public_html/var/cache/prod/smarty/compile/41/df/19/41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.psmainmenupsmainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_14051193855d3707b72227f4_48424943',
  ),
));
$_smarty_tpl->_assignInScope('_counter', 0);?>

<div class="menu pst-top-menu col-md-12 col-lg-12  js-top-menu position-static hidden-md-down" id="_desktop_top_menu">	
    	<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>
			
    <div class="clearfix"></div>	
</div><?php }
/* smarty_template_function_menu_14051193855d3707b72227f4_48424943 */
if (!function_exists('smarty_template_function_menu_14051193855d3707b72227f4_48424943')) {
function smarty_template_function_menu_14051193855d3707b72227f4_48424943(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
      <ul class="top-menu" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>id="top-menu"<?php }?> data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
" style="direction: ltr;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
            <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current <?php }?> <?php if ($_smarty_tpl->tpl_vars['depth']->value === 2) {?> collapse-in <?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
" >
            <?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
              <a
                class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>dropdown-item<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> dropdown-submenu<?php }?>"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>
              >
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>

              </a>
                <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                                    <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
                  <?php if ($_smarty_tpl->tpl_vars['depth']->value >= 2) {?>
                  <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar1<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">
                  <i class="material-icons add" style="font-size: 15px;">&#xE145;</i>
                  <i class="material-icons remove" style="font-size: 15px;<?php if ($_smarty_tpl->tpl_vars['depth']->value == 2) {?>display: none<?php }?>">&#xE15B;</i>
                  </div>
                  <?php }?>
                <?php }?>
              <div <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> class="popover sub-menu js-sub-menu collapse"<?php } else { ?> class="collapse sub-menu-collapse <?php if ($_smarty_tpl->tpl_vars['depth']->value === 2) {?> in <?php }?>"<?php }?> id="exCollapsingNavbar1<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">
                <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

                <?php }?>
        				<div class="menu-banners">       
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['image_urls'], 'image_url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image_url']->value) {
?>
          				<div class="menu-banner">
          						<div class="menu-banners-inner">
          							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="" style="" />
          						</div>
          				</div>
  				          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  				      </div>
              </div>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }
}}
/*/ smarty_template_function_menu_14051193855d3707b72227f4_48424943 */
}
