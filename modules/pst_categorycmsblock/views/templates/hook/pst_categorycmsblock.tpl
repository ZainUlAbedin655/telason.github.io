{**

* 2007-2018 PrestaShop

*

* NOTICE OF LICENSE

*

* This source file is subject to the Academic Free License (AFL 3.0)

* that is bundled with this package in the file LICENSE.txt.

* It is also available through the world-wide-web at this URL:

* http://opensource.org/licenses/afl-3.0.php

* If you did not receive a copy of the license and are unable to

* obtain it through the world-wide-web, please send an email

* to license@prestashop.com so we can send you a copy immediately.

*

* DISCLAIMER

*

* Do not edit or add to this file if you wish to upgrade PrestaShop to newer

* versions in the future. If you wish to customize PrestaShop for your

* needs please refer to http://www.prestashop.com for more information.

*

*  @author PrestaShop SA <contact@prestashop.com>

*  @copyright  2007-2018 PrestaShop SA

*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)

*  International Registered Trademark & Property of PrestaShop SA

*}

<div id="pst_categorycmsblock">

   <div class="container">

      <div class="row">

         {if $pstcategorycmsblockinfos.text != ""}

         {$pstcategorycmsblockinfos.text nofilter}

         {else}  		

         <ul class="pst-categorycmsblock-inner">

            <li class="pst-cat-item hb-animate-element right-to-left">

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="{$image_url}/cat_img1.jpg" alt="cat_img1" /></a>  -->

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Smart watch</span>

                  </span>

               </div>

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="{$image_url}/cat_img2.jpg" alt="cat_img2" /></a>  -->

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Wrist watch</span>

                  </span>

               </div>

            </li>

            <li class="pst-cat-item hb-animate-element bottom-to-top">

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="{$image_url}/cat_img3.jpg" alt="cat_img3" /></a>  -->

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Latest collection</span>

                  </span>

               </div>

            </li>

            <li class="pst-cat-item  hb-animate-element left-to-right">

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="{$image_url}/cat_img4.jpg" alt="cat_img4" /></a> --> 

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Sport watch</span>

                  </span>

               </div>

               <div class="pst-cat-item-inner">

                  <!-- <a href="#" class="pst-cat-img"><img src="{$image_url}/cat_img5.jpg" alt="cat_img5" /></a>  -->

                  <span class="pst-cat-details"> 

                  <span class="pst-cat-name" href="#">Analog watch</span>

                  </span>

               </div>

            </li>

         </ul>

         {/if}			

      </div>

   </div>

</div>