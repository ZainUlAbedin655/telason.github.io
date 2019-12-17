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
echo "<pre>";
$sFileName = 'connector_a.xls';
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
$sheets[1]['BBA00'] = 87; //$61.10 // ok
$sheets[2]['BBA45'] = 88; //$88.60 // ok
$sheets[3]['BBA90'] = 89; //$78.21 // ok
$sheets[4]['SBA00'] = 90; //$61.10 // ok
$sheets[5]['SBA45'] = 91; //$88.60 // ok
$sheets[6]['SBA90'] = 92; //$78.21 // ok
$sheets[7]['TBA00'] = 93; //$72.76 // ok
$sheets[8]['TBA45'] = 94; //$105.50 // ok
$sheets[9]['TBA90'] = 95; //$93.13  // ok
$access_bnot = 7;
sheetsrun($excel,$sheets,$access_bnot,'a');