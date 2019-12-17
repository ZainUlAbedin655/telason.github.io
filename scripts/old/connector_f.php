<?php
exit;
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
$sheets[0]['00000'] = 0;
$sheets[1]['BBF00'] = 106; //$60.60 // ok
$sheets[2]['BBF45'] = 107; //$87.87 // ok
$sheets[3]['BBF90'] = 108; //$77.57 // ok
$sheets[4]['SBF00'] = 109; //$60.60 // ok
$sheets[5]['SBF45'] = 110; //$87.87 // ok
$sheets[6]['SBF90'] = 111; //$77.57 // ok
$sheets[7]['TBF00'] = 115; //$72.26 // ok
$sheets[8]['TBF45'] = 113; //$104.78 // ok
$sheets[9]['TBF90'] = 114; //$92.49  // ok
foreach($sheets as $sheetkey => $sheet){ 
    $bnot = 0;
    if($sheetkey > 6){
        $bnot = 1;
    }
    foreach($sheet as $referStatic => $productIDStatic){
        if($productIDStatic > 0) {
            $data = $excel->sheets[$sheetkey]['cells'];
            unset($data[0]);
            unset($data[1]);
            unset($data[2]);
            $headers = $data[3];
            unset($data[3]);
            $qty_heads = array();
            $qty_heads[8-$bnot]   = $headers[8-$bnot]; //'+1'
            $qty_heads[9-$bnot]   = $headers[9-$bnot]; //'+2'
            $qty_heads[10-$bnot]  = $headers[10-$bnot]; //'+5'
            $qty_heads[11-$bnot]  = $headers[11-$bnot]; //'+10'
            $qty_heads[12-$bnot]  = $headers[12-$bnot]; //'+20'
            $qty_heads[13-$bnot]  = $headers[13-$bnot]; //'+35'
            $qty_heads[14-$bnot]  = $headers[14-$bnot]; //'+50' 
            $qty_heads[15-$bnot]  = $headers[15-$bnot]; //'+100'
            $qty_heads[16-$bnot]  = $headers[16-$bnot]; //'+250'
            $combination    = array();
            $product_id     = '';    
            foreach($data as $key => $item){
                if(empty($item[1]) || empty($item[2])){
                    continue;
                }
                $addZeroS   = '';
                $addZeroE   = '';
                $addNone    = '';
                $addString  = '';
                $accessoryB = false;
                //echo $item[4] .'<br>';
                //echo strlen($item[4]) .'<br>';
                if(strlen($item[4]) == 1){
                    $addZeroS = '0';
                }
                 if(strlen($item[5]) == 1){
                    $addZeroE = '0';
                }
                $accessory      = false; 
                if($bnot == 0){
                    if(strlen($item[6]) == ""){
                        $addNone = 'None';
                        $accessoryB = false;
                    }
                    if(strlen($item[6]) == 1){
                        if($item[6] == 'B'){
                            $addString = ' : Band Strap | Termination Band | Looped';
                        }
                        if($item[6] == 'S'){
                            $addString = ' : Spring Clip | Constant Force Spring';
                        }
                        $accessoryB = true;
                    }
                    $accessory      = $addNone.$item[6].$addString;
                }else{
                    // if there is not accessory col in sheet means there is NONE 
                    //$accessory      = false;
                    $addNone    = 'None';
                    $accessoryB = false;
                    $accessory  = $addNone;
                }
                
                $shell          = $addZeroS.$item[4];
                $entry          = $addZeroE.$item[5].' : ID '.$item[5].'.00mm';
                $finish_codes   = $item[7-$bnot];
                //USD Start from 8 and end at 16 
                //GBP start from 18 and end at 26
                // alot of work todo here  // separte each combination data here from item  // then pass to function 
                $item[3] = str_replace('O','0',$item[3]);
                $ref                = trim(trim($item[1]).trim($item[2]).trim($item[3]));
                $combination[$key][$ref] = array();
                $shell_id           = getAttributeIdByValueShell($shell);
                $entry_id           = getAttributeIdByValueEntry($entry);
                $accesory_id = '';
                if($accessory){
                    $accesory_id        = getAttributeIdByValueAcessory($accessory);
                }
                $combination[$key][$ref]['finish_codes']  = $finish_codes;
                $finish_codes = explode(',', $combination[$key][$ref]['finish_codes']);
                $finish_codes[] = 'S';
                $qty = array();
                if(empty($ref)){
                    continue;
                }
                $product_id = getProductIdByReference($ref);
                if($ref == $referStatic && $product_id == $productIDStatic){
                    $product = new Product($product_id);
                    $ProductPrice = $product->price;
                    //$combination[$key][$ref]['product_id']  = $product_id;
                    foreach($finish_codes as $code){
                        //$code ='W'; 
                        $codeDesc = getCodeDesc($code);
                       // $codeDesc =': 6061 T6 Aluminium | Electroless Nickel';
                       //$combination = getCombinationByProductId($product_id,$shell,$entry,$code,$accessory);
                            $code_attribute_id = getAttributeIdByValueFinish($code.$codeDesc);
                                $attributeIds =array();
                                if(!empty($shell_id)){
                                    $attributeIds[] = $shell_id;
                                }
                                if(!empty($code_attribute_id)){
                                    $attributeIds[] = $code_attribute_id;
                                }
                                if(!empty($entry_id)){
                                    $attributeIds[] = $entry_id;
                                }
                                if(!empty($accesory_id)){
                                    $attributeIds[] = $accesory_id;
                                }
                                $impactMultipler = 1;
                                if($code == 'S'){
                                    $impactMultipler = 3.6;
                                }       
                                $combinationId = 0;
                                try{
                                    
                                    $combination[$key][$ref][$code]['full_code'] = $code.$codeDesc;
                                    $combination[$key][$ref][$code]['code_attribute_id'] = $code_attribute_id;  
                                    $combination[$key][$ref][$code]['shell']       = $shell;
                                    $combination[$key][$ref][$code]['shell_attribute_id']    = $shell_id;
                                    $combination[$key][$ref][$code]['entry']       = $entry;
                                    $combination[$key][$ref][$code]['entry_attribute_id']    = $entry_id;
                                    $combination[$key][$ref][$code]['finish_code'] = $code;
                                    $combination[$key][$ref][$code]['entry_attribute_id']    = $entry_id;
                                    if(!empty($accessory)){
                                        $combination[$key][$ref][$code]['accessory']   = $accessory;
                                        $combination[$key][$ref][$code]['accesory_attribute_id']    = $accesory_id;
                                    }
                                    $combination[$key][$ref][$code]['attributeIds']    = $attributeIds;
                                    $qtyCounter = 0;
                                    $qty1Price = $ProductPrice;
                                    foreach($qty_heads as $key2 => $qty_head){
                                        $realPrice = str_replace('$','',$item[$key2]);
                                        $realPrice = (float)$realPrice;
                                        $qtyCounter++;
                                        $codeSImpact = 0;
                                        if($code == 'S' && $accessoryB == true){
                                            $codeSImpact = getCodeSMultipler($qty_head);
                                        }
                                        if($qtyCounter == 1 && $qty_head == '1+'){
                                            $qty1Price = (($realPrice - $codeSImpact) * $impactMultipler) + $codeSImpact;
                                        }
                                        $combination[$key][$ref][$code]['qty'][$qty_head]['price']['usd'] = (($realPrice- $codeSImpact) * $impactMultipler) + $codeSImpact;
                                        //$combination[$key][$ref][$code]['qty'][$qty_head]['price']['gbp'] = $item[$key2+10];
                                    }
                                    $combination[$key][$ref][$code]['qty1Price'] = $qty1Price;
                                    $combinationId = (int) Product::getIdProductAttributesByIdAttributes($product_id,$attributeIds);
                                }catch(\Exception $e){
                                    //unset($combination[$key]);
                                    $combinationId = 0;
                                }
                                if($combinationId == 0 || $combinationId == false || empty($combinationId)){
                                    $combinationId = createNewCombination($product,$attributeIds,$ProductPrice,$qty1Price);
                                }else{
                                    //update combination price 
                                    $combinationId = updateCombination($product,$attributeIds,$ProductPrice,$qty1Price,$combinationId);
                                }
                                $combination[$key][$ref][$code]['combination_id']   =  $combinationId;
                                $combination[$key][$ref][$code]['product_id']       = $product_id;
                                $combination[$key][$ref][$code]['impactMultipler']  = $impactMultipler;
                                if($combinationId == 0 || $combinationId == false || empty($combinationId)){
                                    unset($combination[$key]);
                                }
                        //array_push($a,$combination);
                    }
                    
                }else{
                    echo 'Static Ids do not match Ids in code'.$ref.' == '.$referStatic .'&&'. $product_id .' == '. $productIDStatic;
                    exit;
                }
            }
            if(!empty($combination)){
                $rules = array();
                foreach($combination as $key => $refer){
                    foreach($refer as $key => $finish_codes){
                        unset($finish_codes['finish_codes']);
                        foreach($finish_codes as $code => $combinationData){
                            foreach($combinationData['qty'] as $qty => $combination_item){
                                foreach($combination_item as $key => $prices){
                                    foreach($prices as $currency => $price){
                                        $post_update = array();
                                        $post_update['product_id']      = $combinationData['product_id'];
                                        $post_update['combination_id']  = $combinationData['combination_id'];
                                        $post_update['min_quantity']    = str_replace('+', '', $qty);
                                        $currency_id = '';
                                        /*if($currency == 'usd'){
                                            $currency_id = 2;
                                        }
                                        if($currency == 'gbp'){
                                            $currency_id = 3;
                                        }*/
                                        $post_update['rule_currency']   = $currency_id;
                                        $post_update['combination']     = $combinationData['combination_id'];
                                        $post_update['rule_price']      = $price;
                                        $post_update['discount_type']   = 'amount';//'percentage';
                                        $post_update['delivery_time']   = getQtyDeliveryTime($qty,$productIDStatic);//'5 weeks.';
                                        $post_update['qty1Price']       = $combinationData['qty1Price'];

                                        $rules[] = updateRules($post_update);
                                    }
                                }
                            }
                        }
                    }
                }
                $product_id = $productIDStatic;
                if(!empty($rules) && !empty($product_id)){
                    Db::getInstance()->update('product', array('price_rule'=> json_encode($rules)) ,'id_product = ' .$product_id);
                }
            }
        }
    }
}
echo '</pre>';
function updateRules($post_update){
            $id_product = $post_update['product_id'];
            //$ProductPrice = Product::getPriceStatic($id_product,false, $post_update['combination']);
            $ProductPrice = $post_update['qty1Price'];
            if($post_update['discount_type'] == "percentage"){
                $tempPrice = $ProductPrice - $post_update['rule_price'];
                $price_for_type = (($tempPrice/$ProductPrice)*100);
            }else{
                $price_for_type = $ProductPrice - $post_update['rule_price'];
                //$price_for_type = $post_update['rule_price'];
            }
            $data = array(
                "reduction"             =>  $price_for_type,
                "reduction_type"        =>  $post_update['discount_type'], 
                "from_quantity"         =>  $post_update['min_quantity'],
                "id_currency"           =>  $post_update['rule_currency'],
                "id_product_attribute"  =>  $post_update['combination'],
                "id_product"            =>  $post_update['product_id'],
                "is_custom"             =>  1,
                "id_shop"               =>  0,
                "reduction_tax"         =>  0,
                "price"                 =>  number_format($post_update['qty1Price'],5)   
            );
            $data_rule = array(
                "min_quantity"      =>  $post_update['min_quantity'],
                "discount_type"     =>  $post_update['discount_type'],
                "delivery_time"     =>  $post_update['delivery_time'],
                "currency"          =>  $post_update['rule_currency'],
                "combination"       =>  $post_update['combination'],
                "id_product"        =>  $post_update['product_id'],
                "rule_price"        =>  $price_for_type,
                "reduction_rule_price" =>  $post_update['rule_price'],
                "ProductPrice"      =>  $ProductPrice
            );
            $specific_price_id = exists($post_update['product_id'],$post_update['combination'],$post_update['min_quantity'],$price_for_type);
            //insert 
            if($specific_price_id){
                Db::getInstance()->update('specific_price',$data,'id_specific_price = '.$specific_price_id);//update   
            }else{
                Db::getInstance()->insert('specific_price',$data);
                $specific_price_id = (int)Db::getInstance()->Insert_ID(); //insert
            }
            $data_rule["specific_price_id"]  =  $specific_price_id;
        echo 'combinations data_rule ';
        print_r($data_rule);
    return $data_rule;
}
/*
*function to check if specific price rule exists by id
*/
function exists($product_id,$combination_id,$qty,$price){
    return (int)Db::getInstance()->getValue('SELECT `id_specific_price` FROM '._DB_PREFIX_.'specific_price WHERE 
        `id_product`='.(int)$product_id.' AND 
        `id_product_attribute`='.$combination_id.' AND 
        `from_quantity`='.$qty);
}
function getCustomField($id_product){
    $result = Db::getInstance()->ExecuteS('SELECT price_rule FROM '._DB_PREFIX_.'product WHERE id_product = ' . (int)$id_product);
    if(!$result)
        return array();
    foreach ($result as $field) {
        $fields = $field['price_rule'];
    }
    return $fields;
}
//error_reporting(E_ALL);
function getCodeDesc($code){
    $codeDesc = '';
    switch ($code) {
        case 'F':
        $codeDesc = ' : 6061 T6 Aluminium | Electroless Nickel';
            break;
        case 'W':
        $codeDesc = ' : 6061 T6 Aluminium | Olive Drab Zinc Nickel Over Electroless Nickel';
            break;
        case 'ZN':
        $codeDesc = ' : 6061 T6 Aluminium | Black Zinc Nickel Over Electroless Nickel';
            break;
        case 'S':
        $codeDesc = ' : Stainless Steel | Passivated';
            break;
                    
    }
    return $codeDesc;
} 
function getCodeSMultipler($qty){
    $CodeSMultipler = 1;
    switch ($qty) {
        case '1+':
        case '2+':
        case '5+':
        $CodeSMultipler = 6;
            break;
        case '10+':
        $CodeSMultipler = 4.8;
            break;
        case '20+':
        $CodeSMultipler = 3.8;
            break;
        case '35+':
        $CodeSMultipler = 3.05;
            break;
        case '50+':
        case '100+':
        case '250+':
        $CodeSMultipler = 2.7;
            break;            
    }
    return $CodeSMultipler;
} 
function getQtyDeliveryTime($qty, $product_id){
    $DeliveryTime = 'Same Day';
    /*if(!empty($qty)){
        switch ($qty) {
            case ($qty < 10): 
            $DeliveryTime = 'Same Day'; 
                break;
            case ($qty < 100): 
            $DeliveryTime = '2 Weeks';
                break;
            case ($qty >= 100): 
            $DeliveryTime = '4 Weeks';
                break;              
        }
    }*/
   /* $Products3weeks = array(96,98,99,101,102,104);
    if($qty <= 20 && in_array($product_id, $Products3weeks)){
    	$DeliveryTime = '3 Weeks';
    }else{
    	$DeliveryTime = '5 Weeks';
    }
    */
    $DeliveryTime = '5 Weeks';
    return $DeliveryTime;
}

function getProductIdByReference($refer){
    if(!empty($refer)){
        $query = "SELECT `id_product` FROM `ps_product` WHERE `reference` = '".$refer."'";
        $result = Db::getInstance()->getValue($query);
        if(!empty($result)){
            return $result;
        }
    }
    return false;
}
function getAttributeIdByValueShell($shell){
    //echo 'search for Shell '.$shell.' <br>';
    $query = "SELECT `id_attribute` FROM `ps_attribute_lang` WHERE `name` = '".$shell."' ";
    $result = Db::getInstance()->getValue($query);
    return $result;
}
function getAttributeIdByValueEntry($entry){
    //echo 'search for Entry '.$entry.' <br>';
    $query = "SELECT `id_attribute` FROM `ps_attribute_lang` WHERE `name` = '".$entry."' ";
    $result = Db::getInstance()->getValue($query);
    return $result;
}
function getAttributeIdByValueAcessory($accessory){
     //echo 'search for Acessor '.$accessory.' <br>';
    $query = "SELECT `id_attribute` FROM `ps_attribute_lang` WHERE `name` = '".$accessory."' ";
    $result = Db::getInstance()->getValue($query);
    return $result;
}
function getAttributeIdByValueFinish($finish){
     //echo 'search for Finish '.$finish.' <br>';
    $query = "SELECT `id_attribute` FROM `ps_attribute_lang` WHERE `name` = '".$finish."' ";
    $result = Db::getInstance()->getValue($query);
    return $result;
}

function createNewCombination($product,$combinationAttributes,$ProductPrice,$qty1Price){
    if(!$product->productAttributeExists($combinationAttributes)){
        //$attribute_price_impact = 0; 
        $attribute_wholesale_price  = number_format((float)($qty1Price), 5);
        //$qty1Price = (float)$qty1Price;
        /*if($attribute_wholesale_price == $qty1Price){
            $attribute_price_impact = 0.0;
        }else if($attribute_wholesale_price > $qty1Price){
            $attribute_price_impact = $attribute_wholesale_price - $qty1Price;
        }else{
            $attribute_price_impact = $qty1Price - $attribute_wholesale_price;
        }*/
        /*echo '<br> attribute_wholesale_price '; print_r($attribute_wholesale_price);
                        echo '<br> attribute_price_impact '; print_r($attribute_price_impact);
                        echo '<br> qty1Price '; print_r($qty1Price);
                        echo '<br> combinationAttributes '; print_r($combinationAttributes);*/
        try{              
            $id_product_attribute = $product->addCombinationEntity(
               $attribute_wholesale_price,
               $attribute_wholesale_price,
               0,   //$attribute_weight * $attribute_weight_impact,
               0,   //// $attribute_unity * $attribute_unit_impact,
               0,    //// $attribute_ecotax,
               0,   // 0,
               0,   // $id_image_attr,
               '',   // $attribute_reference,
               null,    // null,
               0,   // $attribute_ean13,
               0,   // $attribute_default,
               '',   // $attribute_location,
               0,   // $attribute_upc,
               1,   // $attribute_minimal_quantity,
               array(), // array(),
               0   // $available_date_attribute
            );
            foreach ($combinationAttributes as $attribute_to_add) {
                Db::getInstance()->execute('INSERT IGNORE INTO '._DB_PREFIX_.'product_attribute_combination (id_attribute, id_product_attribute)
                            VALUES ('.(int)$attribute_to_add.','.(int)$id_product_attribute.')', false);
            }
        }catch(Exception $e){
                       
        }
        return $id_product_attribute;
    }else{
        return false;// combination already exist
    }
}
function updateCombination($product,$combinationAttributes,$ProductPrice,$qty1Price,$id_product_attribute= 0){
    if($product->productAttributeExists($combinationAttributes)){
        $attribute_wholesale_price  = (float)($qty1Price);
        if($id_product_attribute > 0 && !empty($id_product_attribute)){
            Db::getInstance()->update('product_attribute', array('wholesale_price'=> $attribute_wholesale_price,'price' => $attribute_wholesale_price),' id_product_attribute = ' .$id_product_attribute );
        }
        return $id_product_attribute;
    }
    return 0;
}