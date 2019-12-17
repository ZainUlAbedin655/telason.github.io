<?php
exit;
include('/home/telaso5/public_html/config/config.inc.php');
include('/home/telaso5/public_html/init.php');

error_reporting(E_ALL);
echo "<pre>";
$products = array();
$products[87] = ['BBA00']; //$61.10 // ok
$products[88] = ['BBA45']; //$88.60 // ok
$products[89] = ['BBA90']; //$78.21 // ok
$products[90] = ['SBA00']; //$61.10 // ok
$products[91] = ['SBA45']; //$88.60 // ok
$products[92] = ['SBA90']; //$78.21 // ok
$products[93] = ['TBA00']; //$72.76 // ok
$products[94] = ['TBA45']; //$105.50 // ok
$products[95] = ['TBA90']; //$93.13  // ok


$delivery_time = '5 weeks';
if(!empty($delivery_time)){
    Db::getInstance()->update('price_rule',array('delivery_time' => $delivery_time),'`id_product` IN (87,88,89,90,91,92,93,94,95)');//update  
}
$query = 'SELECT `id_product`,`delivery_time` FROM '._DB_PREFIX_.'price_rule WHERE `id_product` IN (87,88,89,90,91,92,93,94,95)';
$data = Db::getInstance()->ExecuteS($query);
echo '<pre>';
    print_r($data);
echo '</pre>';
echo 'Delivery_time Updated';
exit;