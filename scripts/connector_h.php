<?php
exit;
ini_set('max_execution_time', 0); //0=NOLIMIT
set_time_limit(0);
include('/home/telaso5/public_html/config/config.inc.php');
include('/home/telaso5/public_html/init.php');
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Core\Product\ProductExtraContentFinder;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Addon\Module\ModuleManagerBuilder;
use PrestaShopBundle\Form\Admin\Product\ProductCombination;
use PrestaShopBundle\Model\Product\AdminModelAdapter as ProductAdminModelAdapter;
include 'excel_reader.php'; // include the class
include 'common.php'; // include the class
error_reporting(E_ALL);
$sFileName = 'conector-h30.xls';
if (file_exists($sFileName)){
    if(!is_readable($sFileName)) {
        die('The file ' . $sFileName . ' is not readable');
    }
}else{
    die('The file ' . $sFileName . ' was not found');
}
    $excel = new PhpExcelReader; // creates object instance of the class
    $excel->read($sFileName); // reads and stores the excel file data
    // Test to see the excel data stored in $sheets property
    
$sheets = array();
//$sheets[0]['00000'] = 0;
// $sheets[2]['BBH00'] = 96; //$61.10 // ok
// $sheets[3]['BBH45'] = 97; //$88.60 // ok
// $sheets[4]['BBH90'] = 98;
// $sheets[5]['SBH00'] = 99;
// $sheets[6]['SBH45'] = 100; //$88.60 // ok
// $sheets[7]['SBH90'] = 101;
// $sheets[8]['TBH00'] = 102; //$61.10 // ok
// $sheets[9]['TBH45'] = 103; //$88.60 // ok
// $sheets[10]['TBH90'] = 104;


/*$sheets[1]['SBH00'] = 99;*/ //$61.10 // ok
/*$sheets[5]['SBH45'] = 100; //$88.60 // ok
$sheets[6]['SBH90'] = 101;
$sheets[7]['TBH00'] = 102; //$61.10 // ok
$sheets[8]['TBH45'] = 103; //$88.60 // ok
$sheets[9]['TBH90'] = 104;*/
$access_bnot = 8;
//exit;
sheetsrun($excel,$sheets,$access_bnot,'h');