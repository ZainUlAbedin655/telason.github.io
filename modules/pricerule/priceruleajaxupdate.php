<?php 
$result = array();
if(isset($_POST['data']) && !empty($_POST['data'])){
	include_once('../../config/config.inc.php');
	include_once('../../init.php');
	include_once('pricerule.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    $dataToSave = json_decode(stripslashes($_POST['data']),true);
    /*echo '<pre>';
      print_r($dataToSave);
    echo '<pre>';*/
    $arrayToUpdate = array();
    $arrayToUpdateSP = array();
    $id_product = $dataToSave['id_product'];
    $ProductPrice = Product::getPriceStatic($id_product,false,null,6,null,false,false);
    $price_for_type = $ProductPrice - $dataToSave['reduction_rule_price'];

    $arrayToUpdateSP['from_quantity']             = $dataToSave['min_quantity'];
    $arrayToUpdateSP['reduction']                 = $price_for_type;
    $arrayToUpdateSP['price']                     = $dataToSave['reduction_rule_price'];
    $arrayToUpdateSP['id_product_attribute']      = $dataToSave['combination'];

    $arrayToUpdate['min_quantity']                = $dataToSave['min_quantity'];
    $arrayToUpdate['delivery_time']               = $dataToSave['delivery_time'];
    $arrayToUpdate['rule_price']                  = $price_for_type;
    $arrayToUpdate['reduction_rule_price']        = $dataToSave['reduction_rule_price'];
    $arrayToUpdate['combination']                 = $dataToSave['combination'];

    $result['data'] = json_encode($arrayToUpdate);
    $result['datasp'] = json_encode($arrayToUpdateSP);
    /*    echo '<pre>';
      print_r($arrayToUpdate);
      print_r($arrayToUpdateSP);
      print_r($ProductPrice);
    echo '<pre>';
    exit;*/
    if(!empty($dataToSave['specific_price_id']) && $dataToSave['specific_price_id'] > 0){
       if(!Db::getInstance()->update('specific_price', $arrayToUpdateSP,' id_specific_price = ' .$dataToSave['specific_price_id'] )){
          $result['error'] = 'FAIL:: specific_price mysql_error:: error';
       }
      if(!Db::getInstance()->update('price_rule', $arrayToUpdate,' specific_price_id = ' .$dataToSave['specific_price_id'])){
          $result['error'] = 'FAIL:: price_rule mysql_error:: error';
      }
    }
}else{
	$result['error'] = 'FAIL:: something has went wrong:: error';
}
echo json_encode($result);