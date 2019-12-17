<?php 
$result = array();
if(isset($_POST['data']) && !empty($_POST['data'])){
	include_once('../../config/config.inc.php');
	include_once('../../init.php');
	include_once('pricerule.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    $id_product         = $_POST['id_product'];
    $dataToSave         = json_decode(stripslashes($_POST['data']),true);
    $specific_price_id  = $dataToSave['specific_price_id'];
    if(!empty($specific_price_id) && $specific_price_id > 0){
        $result['specific_price_deleted'] =  $specific_price_id;
        if(!Db::getInstance()->delete('specific_price', 'id_specific_price = '.$specific_price_id)){
          $result['specific_price_deleted'] =  false;
        }
        $result['price_rule_deleted'] =  $specific_price_id;
        if(!Db::getInstance()->delete('price_rule', 'specific_price_id = '.$specific_price_id)){
          $result['specific_price_deleted'] =  false;
        }
    }
}else{
	$result['error'] = 'FAIL:: something has went wrong:: error';
}
echo json_encode($result);