<?php
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
echo "<pre>";
$sFileName = 'connector_f.xls';
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
//s$sheets[0]['00000'] = 0;
/*$sheets[1]['BBF00'] = 106; //$60.60 // ok*/
$sheets[2]['BBF45'] = 107; //$87.87 // ok
$sheets[3]['BBF90'] = 108; //$77.57 // ok
$sheets[4]['SBF00'] = 109; //$60.60 // ok
$sheets[5]['SBF45'] = 110; //$87.87 // ok
$sheets[6]['SBF90'] = 111; //$77.57 // ok
$sheets[7]['TBF00'] = 115; //$72.26 // ok
$sheets[8]['TBF45'] = 113; //$104.78 // ok
$sheets[9]['TBF90'] = 114; //$92.49  // ok
$access_bnot = 7;
sheetsrun($excel,$sheets,$access_bnot,'f');