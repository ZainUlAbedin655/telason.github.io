<?php
exit;
include('/home/telaso5/public_html/config/config.inc.php');
include('/home/telaso5/public_html/init.php');

error_reporting(E_ALL);
echo "<pre>";
$query = 'SELECT `id_product`, `price_rule` FROM '._DB_PREFIX_.'product WHERE `price_rule` IS NOT NULL AND `price_rule` != ""';
$data = Db::getInstance()->ExecuteS($query);
foreach($data as $key => $value){
    $price_rules_json    = $value['price_rule'];
    $id_product    = $value['id_product'];
    $price_rules         = json_decode($price_rules_json,true);
    foreach($price_rules as $price_rule_key => $price_rule) {
        //$id_product         = $price_rule['id_product'];
        $combination        = $price_rule['combination'];
        $specific_price_id  = $price_rule['specific_price_id'];
        $data_rule          = array();
        $data_rule["specific_price_id"]     =  $price_rule['specific_price_id'];
        $data_rule["id_product"] = 0;
        if(isset($id_product) && !empty($id_product)){
            $data_rule["id_product"] =  $id_product;
        }
        $data_rule["combination"] = 0;
        if(isset($price_rule['combination']) && !empty($price_rule['combination'])){
            $data_rule["combination"] =  $price_rule['combination'];
        }
        $data_rule["min_quantity"] = 0;
        if(isset($price_rule['min_quantity']) && !empty($price_rule['min_quantity'])){
            $data_rule["min_quantity"] =  $price_rule['min_quantity'];
        }
        $data_rule["discount_type"] = 0;
        if(isset($price_rule['discount_type']) && !empty($price_rule['discount_type'])){
            $data_rule["discount_type"] =  $price_rule['discount_type'];
        }
        $data_rule["delivery_time"] = 0;
        if(isset($price_rule['delivery_time']) && !empty($price_rule['delivery_time'])){
            $data_rule["delivery_time"] =  $price_rule['delivery_time'];
        }
        $data_rule["currency"] = 0;
        if(isset($price_rule['currency']) && !empty($price_rule['currency'])){
            $data_rule["currency"] =  $price_rule['currency'];
        }
        $data_rule["rule_price"] = 0;
        if(isset($price_rule['rule_price']) && !empty($price_rule['rule_price'])){
            $data_rule["rule_price"] =  $price_rule['rule_price'];
        }
        $data_rule["reduction_rule_price"] = 0;
        if(isset($price_rule['reduction_rule_price']) && !empty($price_rule['reduction_rule_price'])){
            $data_rule["reduction_rule_price"] =  $price_rule['reduction_rule_price'];
        }
        $data_rule["ProductPrice"] = 0;
        if(isset($price_rule['ProductPrice']) && !empty($price_rule['ProductPrice'])){
            $data_rule["ProductPrice"] =  $price_rule['ProductPrice'];
        }
        $query_inner = 'SELECT `specific_price_id` FROM '._DB_PREFIX_.'price_rule WHERE `specific_price_id`='.(int)$specific_price_id.' AND `id_product`='.$id_product.' AND `combination`='.$combination;
        $specific_price_id_exists = (int)Db::getInstance()->getValue($query_inner);
            //insert 
        echo '<br>';
        //echo $query_inner;
        //print_r($specific_price_id_exists);
        if($specific_price_id_exists){
            Db::getInstance()->update('price_rule',$data_rule,'specific_price_id = '.$specific_price_id);//update  
        }else{
            Db::getInstance()->insert('price_rule',$data_rule);
        }
    }
}
echo 'All Table Data Done';
exit;