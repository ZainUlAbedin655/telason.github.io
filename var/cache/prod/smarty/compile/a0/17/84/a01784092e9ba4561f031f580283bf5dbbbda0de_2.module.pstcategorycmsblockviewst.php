<?php
/* Smarty version 3.1.33, created on 2019-12-18 00:11:22
  from 'module:pstcategorycmsblockviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df8b7daaed067_15306325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01784092e9ba4561f031f580283bf5dbbbda0de' => 
    array (
      0 => 'module:pstcategorycmsblockviewst',
      1 => 1559039501,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df8b7daaed067_15306325 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="pst_categorycmsblock">

   <div class="container">

      <div class="row">

         <?php if ($_smarty_tpl->tpl_vars['pstcategorycmsblockinfos']->value['text'] != '') {?>

         <?php echo $_smarty_tpl->tpl_vars['pstcategorycmsblockinfos']->value['text'];?>


         <?php } else { ?>  		

         <ul class="pst-categorycmsblock-inner">

            <li class="pst-cat-item hb-animate-element right-to-left">

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cat_img1.jpg" alt="cat_img1" /></a>  -->

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Smart watch</span>

                  </span>

               </div>

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cat_img2.jpg" alt="cat_img2" /></a>  -->

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Wrist watch</span>

                  </span>

               </div>

            </li>

            <li class="pst-cat-item hb-animate-element bottom-to-top">

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cat_img3.jpg" alt="cat_img3" /></a>  -->

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Latest collection</span>

                  </span>

               </div>

            </li>

            <li class="pst-cat-item  hb-animate-element left-to-right">

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cat_img4.jpg" alt="cat_img4" /></a> --> 

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Sport watch</span>

                  </span>

               </div>

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cat_img5.jpg" alt="cat_img5" /></a>  -->

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Analog watch</span>

                  </span>

               </div>

            </li>

         </ul>

         <?php }?>			

      </div>

   </div>

</div><?php }
}
