<?php
/* Smarty version 3.1.33, created on 2019-07-24 01:10:21
  from 'module:pstbannercmsblockviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d37073de05660_32298129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '470b3bd1334eb4f814cfc56ae48e2a0a6a48fbeb' => 
    array (
      0 => 'module:pstbannercmsblockviewstem',
      1 => 1554891293,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d37073de05660_32298129 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="pst_cmsbannerblock" class="pst_cmsbannerblock "> 

<div class="container">

<div class= "row">

	<?php if ($_smarty_tpl->tpl_vars['pstbannercmsblockinfos']->value['text'] != '') {?>

		<?php echo $_smarty_tpl->tpl_vars['pstbannercmsblockinfos']->value['text'];?>


	<?php } else { ?>				

		

		<ul class="pst-cmsblock-wrapper">

			<li class="pst-cmsblock-item col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 hb-animate-element right-to-left ">

				<div class="pst-wrapper-cms-block">

					<a href="https://telason.com/213-connector-designator-code-h" class="pst-cms-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cms-banner1.jpg" alt="cms-banner1"> </a>

					<div class="pst-cmsblock-details">

					  <span class="text1">STOCK AVAILABLE – FAST DELIVERY</span>

						<span class="text2">D38999 Backshells</span>

						<a href="https://telason.com/213-connector-designator-code-h" class="pst-cmsblock-btn">Order Here</a>

					</div>

				</div>

			</li>

			<li class="pst-cmsblock-item col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 hb-animate-element top-to-bottom  ">

				<div class="pst-wrapper-cms-block">

					<a href="https://telason.com/48-banding-straps" class="pst-cms-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cms-banner2.jpg" alt="cms-banner2"></a>

					<div class="pst-cmsblock-details">

					  <span class="text1">STOCK AVAILABLE – FAST DELIVERY</span>

						<span class="text2">Termination Bands</span>

						<a href="https://telason.com/48-banding-straps" class="pst-cmsblock-btn">Order Here</a> 

					</div>

				</div>

			</li>

			<li class="pst-cmsblock-item col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 hb-animate-element left-to-right ">

				<div class="pst-wrapper-cms-block">

					<a href="https://telason.com/home/137-rj45-circular-backshell-emirfi-sheilded-screened.html" class="pst-cms-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cms-banner3.jpg" alt="cms-banner3"></a>

					<div class="pst-cmsblock-details">

					   <span class="text1">STOCK AVAILABLE – FAST DELIVERY</span>

						<span class="text2">RJF Circular Backshells</span>

						<a href="https://telason.com/home/137-rj45-circular-backshell-emirfi-sheilded-screened.html" class="pst-cmsblock-btn">Order Here</a> 

					</div> 

				</div>

			</li>

		</ul>

	<?php }?>

</div>

</div>

</div><?php }
}
