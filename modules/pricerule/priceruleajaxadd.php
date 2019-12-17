<?php 
$result = array();
if(isset($_POST['data']) && !empty($_POST['data'])){
	include_once('../../config/config.inc.php');
	include_once('../../init.php');
	include_once('pricerule.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    $id_product = $_POST['id_product'];
    $dataToSave = json_decode(stripslashes($_POST['data']),true);
    $ProductPrice = Product::getPriceStatic($id_product,false,null,6,null,false,false);
    if($dataToSave['discount_type'] == "percentage"){
      $tempPrice = $ProductPrice - $dataToSave['rule_price'];
      $price_for_type = (($tempPrice/$ProductPrice)*100);
    }else{
      $price_for_type = $ProductPrice - $dataToSave['rule_price'];
    }
    $data = array(
                "reduction"             =>  $price_for_type,
                "reduction_type"        =>  $dataToSave['discount_type'], 
                "from_quantity"         =>  $dataToSave['min_quantity'],
                "id_currency"           =>  $dataToSave['rule_currency'],
                "id_product_attribute"  =>  $dataToSave['combination'],
                "id_product"            =>  $id_product,
                "is_custom"             =>  1,
                "id_shop"               =>  0,
                "reduction_tax"         =>  0,
                "price"                 =>  $ProductPrice   
            );
    $data_rule = array(
                "min_quantity"      =>  $dataToSave['min_quantity'],
                "discount_type"     =>  $dataToSave['discount_type'],
                "delivery_time"     =>  $dataToSave['delivery_time'],
                "currency"          =>  $dataToSave['rule_currency'],
                "combination"       =>  $dataToSave['combination'],
                "id_product"        =>  $id_product,
                "rule_price"        =>  $price_for_type,
                "reduction_rule_price" =>  $dataToSave['rule_price'],
                "ProductPrice"      =>  $ProductPrice
            );
      $specific_price_id = exists($id_product,$dataToSave['combination'],$dataToSave['min_quantity'],$price_for_type, 'specific_price');
     //insert 
      if($specific_price_id){
        Db::getInstance()->update('specific_price',$data,'id_specific_price = '.$specific_price_id.' AND id_product = '.$id_product);   
        $result['specific_price'] = 'Updated';
      }else{
        Db::getInstance()->insert('specific_price',$data);
        $specific_price_id = (int)Db::getInstance()->Insert_ID(); //insert
        $result['specific_price'] = 'Inserted';
        $result['specific_price_id'] = $specific_price_id;
      }
      if(!empty($specific_price_id) && $specific_price_id > 0){
        $price_rule_specific_price_id = exists($id_product,$dataToSave['combination'],$dataToSave['min_quantity'],$price_for_type, 'price_rule',$specific_price_id);
        if($price_rule_specific_price_id){
          $data_rule['specific_price_id'] = $price_rule_specific_price_id;
          Db::getInstance()->update('price_rule', $data_rule,' specific_price_id = ' .$dataToSave["specific_price_id"].' AND id_product = '.$id_product);
          $result['price_rule'] = 'Updated';
        }else{
          $data_rule['specific_price_id'] = $specific_price_id;
          Db::getInstance()->insert('price_rule',$data_rule);
          $price_rule_specific_price_id = (int)Db::getInstance()->Insert_ID(); //insert
          $result['price_rule'] = 'Inserted';
          $result['price_rule_specific_price_id'] = $price_rule_specific_price_id;
        }
      }
}else{
	$result['error'] = 'FAIL:: something has went wrong:: error';
}
echo json_encode($result);
function exists($product_id,$combination_id,$qty,$price, $table = 'specific_price',$specific_price_id = 0){
  if($table == 'specific_price'){
    return (int)Db::getInstance()->getValue('SELECT `id_specific_price` FROM '._DB_PREFIX_.'specific_price WHERE 
        `id_product`='.(int)$product_id.' AND 
        `id_product_attribute`='.$combination_id.' AND 
        `from_quantity`='.$qty);
  }
  if($table == 'price_rule'){
    return (int)Db::getInstance()->getValue('SELECT `specific_price_id` FROM '._DB_PREFIX_.'price_rule WHERE 
        `specific_price_id`='.(int)$specific_price_id);
  }
  return false;
}