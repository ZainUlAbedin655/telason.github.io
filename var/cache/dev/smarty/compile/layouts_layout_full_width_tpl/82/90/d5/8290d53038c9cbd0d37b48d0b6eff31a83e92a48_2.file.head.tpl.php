<?php
/* Smarty version 3.1.33, created on 2019-11-26 18:29:32
  from '/home/telaso5/public_html/themes/wolf_child/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcb83cac8651_11369252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8290d53038c9cbd0d37b48d0b6eff31a83e92a48' => 
    array (
      0 => '/home/telaso5/public_html/themes/wolf_child/templates/_partials/head.tpl',
      1 => 1566807880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5ddcb83cac8651_11369252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/telaso5/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5285885375ddcb83caa60c6_60217920', 'head_charset');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19962892925ddcb83caa6950_28434587', 'head_ie_compatibility');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20503079785ddcb83caa70d9_47568335', 'head_seo');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2291210015ddcb83caac527_38658025', 'head_viewport');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3676092285ddcb83caad0f5_41467101', 'head_icons');
?>


<!-- Template added -->



<link href="https://fonts.googleapis.com/css?family=Share:400,700" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12815754205ddcb83caaedf6_27896111', 'stylesheets');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13832055855ddcb83caafdb2_08375571', 'javascript_head');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3774685625ddcb83cab11d0_23278710', 'hook_header');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16776047685ddcb83cab1dc8_26939203', 'hook_extra');
?>


<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['name'])) {?>


<?php echo '<script'; ?>
 type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
  "description": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
  "url" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8');?>
",
  "sku" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
",
  "image": "<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'],'-large_default',''), ENT_QUOTES, 'UTF-8');?>
",
  <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>"mpn": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",<?php }?>
    <?php if (empty($_smarty_tpl->tpl_vars['combinations']->value)) {?>
    "offers": {
        "@type": "Offer",
        "priceCurrency": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['iso_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
        "name": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
        "price": "",
        "priceValidUntil" : "01-01-2022",
        "image": "<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'],'-large_default',''), ENT_QUOTES, 'UTF-8');?>
",
        <?php if ($_smarty_tpl->tpl_vars['product']->value['ean13']) {?>
        "gtin13": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['ean13'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['upc']) {?>
        "gtin13": "0<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['upc'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
        <?php }?>
        "sku": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
",
        "availability":<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?> "http://schema.org/InStock"<?php } else { ?> "http://schema.org/OutOfStock"<?php }?>,
        "seller": {
            "@type": "Organization",
            "name": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
        }
    }
    <?php } else { ?>
    "offers": [
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'combination', true, 'id_product_combination');
$_smarty_tpl->tpl_vars['combination']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_product_combination']->value => $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->iteration++;
$_smarty_tpl->tpl_vars['combination']->last = $_smarty_tpl->tpl_vars['combination']->iteration === $_smarty_tpl->tpl_vars['combination']->total;
$__foreach_combination_1_saved = $_smarty_tpl->tpl_vars['combination'];
?>
        {
        "@type": "Offer",
        "name": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['reference'], ENT_QUOTES, 'UTF-8');?>
",
        "priceCurrency": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['iso_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
        "price": "<?php echo htmlspecialchars(round(Product::getPriceStatic($_smarty_tpl->tpl_vars['product']->value['id'],true,$_smarty_tpl->tpl_vars['id_product_combination']->value),'2'), ENT_QUOTES, 'UTF-8');?>
",
        "priceValidUntil" : "01-01-2022",
        "image": "<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'],'-large_default',''), ENT_QUOTES, 'UTF-8');?>
",
        "sku": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['reference'], ENT_QUOTES, 'UTF-8');?>
",
        "availability": <?php if ($_smarty_tpl->tpl_vars['combination']->value['quantity'] > 0) {?>"http://schema.org/InStock"<?php } else { ?>"http://schema.org/OutOfStock"<?php }?>,
        "url" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['combination']->value), ENT_QUOTES, 'UTF-8');?>
",
        "seller": {
            "@type": "Organization",
            "name": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"}
        } <?php if (!$_smarty_tpl->tpl_vars['combination']->last) {?>,<?php }?>          
     <?php
$_smarty_tpl->tpl_vars['combination'] = $__foreach_combination_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    ]
    <?php }?>
}
<?php echo '</script'; ?>
>
<?php }
}
/* {block 'head_charset'} */
class Block_5285885375ddcb83caa60c6_60217920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_5285885375ddcb83caa60c6_60217920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<meta charset="utf-8">

<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_19962892925ddcb83caa6950_28434587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_19962892925ddcb83caa6950_28434587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<meta http-equiv="x-ua-compatible" content="ie=edge">

<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_12089840175ddcb83caa7515_31368437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_14026939415ddcb83caa87d1_05394223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_6142203525ddcb83caa9662_58885411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_20503079785ddcb83caa70d9_47568335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_20503079785ddcb83caa70d9_47568335',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_12089840175ddcb83caa7515_31368437',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_14026939415ddcb83caa87d1_05394223',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_6142203525ddcb83caa9662_58885411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12089840175ddcb83caa7515_31368437', 'head_seo_title', $this->tplIndex);
?>
</title>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14026939415ddcb83caa87d1_05394223', 'head_seo_description', $this->tplIndex);
?>
">

  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6142203525ddcb83caa9662_58885411', 'head_seo_keywords', $this->tplIndex);
?>
">

  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>

    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">

  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>

    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">

  <?php }?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_2291210015ddcb83caac527_38658025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_2291210015ddcb83caac527_38658025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="HhRmZQZ_NmAM1jjFOLwYWSese1PYezltoBaR9G0VO7s" />
<meta name="google-site-verification" content="4UN1ajgBnUmUHg8pJvtVVD8AvZUKyniXe3Tn8q0QOSU" />
<meta name="msvalidate.01" content="0748985CE7BF724E909229C69CD694B3" />

<!-- Google Tag Manager -->
<?php echo '<script'; ?>
>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PBD7HK8');<?php echo '</script'; ?>
>
<!-- End Google Tag Manager -->

<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_3676092285ddcb83caad0f5_41467101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_3676092285ddcb83caad0f5_41467101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">

<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_12815754205ddcb83caaedf6_27896111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_12815754205ddcb83caaedf6_27896111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
?>

<?php
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_13832055855ddcb83caafdb2_08375571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_13832055855ddcb83caafdb2_08375571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
?>

<?php
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_3774685625ddcb83cab11d0_23278710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_3774685625ddcb83cab11d0_23278710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_16776047685ddcb83cab1dc8_26939203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_16776047685ddcb83cab1dc8_26939203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
