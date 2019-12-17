<?php

if (!defined('_PS_VERSION_'))
    exit;
// include_once 'classes\SpecificPrice.php';
use Symfony\Component\HttpKernel\KernelInterface;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use PrestaShopBundle\Form\Admin\Product\ProductCombination;
use PrestaShopBundle\Model\Product\AdminModelAdapter as ProductAdminModelAdapter;

class pricerule extends Module
{
    /* @var boolean error */
    protected $_errors = false;
    protected $container;
    /** @var self */
    private static $instance = null;
    public function __construct()
    {
        $this->name = 'pricerule';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'Creative';
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Price Rule Module');
        $this->description = $this->l('Module to set prices according to quantity.');

    }
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            global $kernel;
            if (!is_null($kernel) && $kernel instanceof KernelInterface) {
                self::$instance = $kernel->getContainer();
            }
        }
        return self::$instance;
    }
    public function install()
    {
        if (!parent::install() OR
            !$this->alterTable('add') OR                  
            // !$this->addHook() OR    //no need, just for reference              
            !$this->registerHook('actionAdminControllerSetMedia') OR
            !$this->registerHook('displayAdminProductsExtra') OR
            !$this->registerHook('displayHeader') OR
            // !$this->registerHook('displayCartExtraProductActions') OR
            !$this->registerHook('displayDeliveryTime') OR  //custom hook
            !$this->registerHook('actionProductSave') OR
            !$this->registerHook('displayProductAdditionalInfo') OR
            !$this->registerHook('displayProductAdditionalInfo2')) 
            return false;
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall() OR !$this->alterTable('remove'))
            return false;
        return true;
    }


    public function alterTable($method)
    {
        switch ($method) {
            case 'add':
            $sql = 'ALTER TABLE ' . _DB_PREFIX_ . 'product ADD `price_rule` LONGTEXT NOT NULL;ALTER TABLE ' . _DB_PREFIX_ . 'specific_price ADD `is_custom` INT DEFAULT 0';
            break;

            case 'remove':
            $sql = 'ALTER TABLE ' . _DB_PREFIX_ . 'product DROP COLUMN `price_rule`;ALTER TABLE ' . _DB_PREFIX_ . 'specific_price DROP COLUMN `is_custom`';
            break;
        }

        if(!Db::getInstance()->Execute($sql))
            return false;
        return true;
    }

    protected function addHook() {
        //not to be used in prestashop 1.7>, prestashop creates this entry if hook does not exist in ps_hooks table
        $check = Db::getInstance()->getRow('
            SELECT name
            FROM '._DB_PREFIX_.'hook
            WHERE name = "category"
            ');

        if (!$check) {
            $query = "INSERT INTO "._DB_PREFIX_."hook (`name`, `title`, `description`) VALUES ('displayDeliveryTime', 'DisplayDeliveryTime', 'Hooks with product to show its delivery time');";
            if(Db::getInstance()->Execute($query))
                return true;
            else
                return false;
        }
        else return true;
    }
    public function getCombinationName($id_product,$combination){
        $product = new Product($id_product);
        try{
            $combinations=$product->getAttributeCombinations($this->context->language->id);
            $combo_name = "";
            foreach( $combinations as $k => $v ){   
                if( !($v["id_product_attribute"]==$combination)){
                    unset($combinations[$k]);
                }else{
                    $combo_name .= $combo_name==""?$v['attribute_name']:"-".$v['attribute_name']; 
                }
            }
        }
        catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
        }
        //$key = array_search($combination, $combinations);
      return $combo_name;
  }
  public function ajaxProcessMyFunction(){
        // Get param
        $id_product = (int)Tools::getValue('id_product');
        $currentCombination = (int)Tools::getValue('currentCombination');

        // Response
        die(Tools::jsonEncode(array('id_product' => $id_product,'currentCombination' => $currentCombination)));
  }
  public function displayAjaxMyFunction(){
        // Get param
        $id_product = (int)Tools::getValue('id_product');
        $currentCombination = (int)Tools::getValue('currentCombination');

        // Response
        die(Tools::jsonEncode(array('id_product' => $id_product,'currentCombination' => $currentCombination)));
  }
   
  public function getCombinations($product,$idIndex = false, $page = 0, $limit = 5){
        //get combinations
       // echo "getCombination exit"; exit; 
    /*$modelMapper = new ProductAdminModelAdapter(
        $product,
        $this->get('prestashop.adapter.legacy.context'),
        $this->get('prestashop.adapter.admin.wrapper.product'),
        $this->get('prestashop.adapter.tools'),
        $this->get('prestashop.adapter.data_provider.product'),
        $this->get('prestashop.adapter.data_provider.supplier'),
        $this->get('prestashop.adapter.data_provider.warehouse'),
        $this->get('prestashop.adapter.data_provider.feature'),
        $this->get('prestashop.adapter.data_provider.pack'),
        $this->get('prestashop.adapter.shop.context'),
        $this->get('prestashop.adapter.data_provider.tax')
    );*/
    $combinations = $product->getAttributesResume($this->context->language->id);
    //$combinations = $modelMapper->getAttributesResume();
    $combinationList = array();
    if(is_array($combinations)){
         foreach($combinations as $combination) {
              $combinationList[] = ['id' => $combination['id_product_attribute'], 'name' => $combination['attribute_designation']];
            //$combinationList[] = $combination;
         }
        if($idIndex){
            $count = 0;
            $total      = count($combinationList); //total items in array     
            $totalPages = ceil( $total / $limit ); //calculate total pages
            if($page <= 0){
                $page       = max($page, 1); //get 1 page when $_GET['page'] <= 0
            }
            if($page > $totalPages){
                $page       = min($page, $totalPages); //get last page when $_GET['page'] > $totalPages
            }
            $offset = ($page - 1) * $limit;
            if($offset < 0){
                $offset = 0;
            }
            $combinationList = array_slice($combinationList, $offset, $limit);
        }
    } 
    return $combinationList;
} 
    /*
    *
    * prepares tab data for admin
    * 
    */
    public function prepareNewTab($id_product){
        $combination_id = 0;
        if(isset($_POST) && !empty($_POST)){
            if(isset($_POST['currentCombination']) && !empty($_POST['currentCombination'])){
                $combination_id = $_POST['currentCombination'];
            }
        }        
        $product            = new Product($id_product);
        $currencies         = Currency::getCurrencies(false, true, true);
        $combinations       = $this->getCombinations($product);
        $combinations_tmp   = $combinations;//$this->getCombinations($product,true);
        $price_rules_tmp    = json_decode($this->getCustomField($id_product,$combination_id));
        $price_rules        = $price_rules_tmp;
        $all_price_rule     = array();
        if(!empty($price_rules)){
            foreach($price_rules as $key => $rule){
                foreach($combinations_tmp as $key2 => $tmp_combination){
                    if($combination_id > 0){
                        if($rule->combination == $tmp_combination['id']){
                            $all_price_rule[] = $rule;
                        }
                    }else{
                        if($rule->combination == $tmp_combination['id'] && $rule->combination == $combination_id){
                            $all_price_rule[] = $rule;
                        }
                    }
                }
            }
        }
        $base_dir       = _PS_BASE_URL_.__PS_BASE_URI__;
        $product_price = Product::getPriceStatic($id_product,false);
        $this->context->smarty->assign(array(
            'price_rules_tmp'   => $price_rules_tmp,
            'price_rule'        => $all_price_rule,
            'base_dir'          => $base_dir,
            'currencies'        => $currencies,
            'combinations'      => $combinations,
            'combinations_tmp'  => $combinations_tmp,
            'id_product'        => $id_product,
            'product_price'     => $product_price,
        ));
    }
  /*
    *
    * prepares front end data for product page
    * 
    */
  public function prepareProductFront($id_product,$id_product_attribute, $productData = array())
  {
    $this->context->controller->addCSS($this->_path.'/css/pricerule.css');
    $currency_id = 2;
    if(isset($this->context->currency->id) && !empty($this->context->currency->id) && $this->context->currency->id != 0){
    	$currency_id = $this->context->currency->id;
    }
    $currencyMultipler = 1;
    if($currency_id == 3){
        $currencyMultipler = 0.8;
    }
    $product = new Product($id_product);
    $combinations=$product->getAttributeCombinations($this->context->language->id);
    $attributeGroups = $product->getAttributesGroups($this->context->language->id);
    $combArray = [];
    $combArrayIds = [];
    foreach( $combinations as $k => $v ){   
        if( !in_array($v["id_attribute"], $combArrayIds)){
            $combArrayIds[] = $v["id_attribute"];
            $combArray[ $v["group_name"] ][] = $v;
        }
    }
    
            // unset($final_combination[$key]);
            //show only those price rules which match the selected product attributes id
    $final_combination = array();
    if(isset($id_product_attribute) && !empty($id_product_attribute)){
        $final_combinations = json_decode($this->getCustomField($id_product,$id_product_attribute), true);
        if($final_combinations){
            foreach($final_combinations as $key => $comb_value){
                if(
                    ($comb_value['combination'] == $id_product_attribute) && ($comb_value['currency'] == $currency_id || empty($comb_value['currency']))
                ){
                    $final_combination[] = $final_combinations[$key];
                }
            }
        }
    }else{
      $final_combinations = json_decode($this->getCustomField($id_product), true);
       $id_product_attribute = false;
    	if($final_combinations){
            foreach($final_combinations as $key => $comb_value){
                if(($comb_value['currency'] == $currency_id) || empty($comb_value['currency'])){
                    $final_combination[] = $final_combinations[$key];
                }
            }
        }
        //$final_combination = $final_combinations;
    }
    //$combinationsproduct = $this->getCombinations($product);
    $product_price = Product::getPriceStatic($id_product,true,$id_product_attribute);
    if($product_price < 1){
        $product_price = $product->getPrice(false, null);
    }
    $this->context->smarty->assign(array(
        'price_rule'        => $final_combination,
        //'all_price_rules'   => $final_combinations,
        'currency_id'       => $currency_id,
        'product_price'     => json_decode($product_price),
        'pricerule'         => $this,
        'product_reference' => $product->reference,
        'combinations'      => $combArray,
        'attributeGroups'   => $attributeGroups,
        'product'           => $productData,
        'id_product_attribute' => $id_product_attribute,
        'currencyMultipler' => $currencyMultipler,
        //'combinationsproduct'=> $combinationsproduct,
    ));

}
/*
* prepares front end data for cart page(ALSO BEING USED AT ORDER PAGE AND PDF INVOICE) 
*/
public function prepareCartFront($id_product,$id_product_attribute, $cart_quantity){
    if($id_product_attribute <= 0 || $id_product_attribute == '' || empty($id_product_attribute)){
        $id_product_attribute = 0;
    }
    //$sql = 'SELECT price_rule FROM `ps_product` WHERE  `id_product`='.(int)$id_product;
    //$result = Db::getInstance()->getRow($sql);
    $specific_price_rule = json_decode($this->getCustomField($id_product,$id_product_attribute));  //json_decode($result['price_rule']);
    $delivery_time = 'Unknown';
    if($specific_price_rule){
        $last_min_quantity=0;
        foreach ($specific_price_rule as $key => $value) {
            if($value->combination==$id_product_attribute && $cart_quantity>=$value->min_quantity){
                if($last_min_quantity<$value->min_quantity){
                    $last_min_quantity = $value->min_quantity;
                    $delivery_time = $value->delivery_time;
                }
            }
        }
    }
    $product = new Product($id_product);
    $combinations=$product->getAttributeCombinations($this->context->language->id);
    $combArray = [];
    $combArrayIds = [];
    foreach( $combinations as $k => $v ){   
        if( !in_array($v["id_attribute"], $combArrayIds) && $v["id_product_attribute"]==$id_product_attribute){
            $combArrayIds[] = $v["id_attribute"];
            $combArray[ $v["group_name"] ][] = $v;
        }
    }
    $partnumber= array();
    $this->context->smarty->assign(array(
        'delivery_time' => $delivery_time,
        'combinations' => $combArray,
        'product' => $product
    ));
}
public function hookDisplayHeader($params){
    $this->context->controller->addCSS($this->_path.'css/pricerule.css', 'all');
    $this->context->controller->addJS($this->_path.'js/pricerule_custom.js');
}
public function getCustomField($id_product,$combination_id = 0){
        $result = array();
       // $result = Db::getInstance()->ExecuteS('SELECT `price_rule` FROM '._DB_PREFIX_.'product WHERE id_product = ' . (int)$id_product);
        if($combination_id > 0){
            $result = Db::getInstance()->ExecuteS('SELECT * FROM '._DB_PREFIX_.'price_rule WHERE id_product = ' . (int)$id_product.' && combination = ' . (int)$combination_id);
        }else{
            $result = Db::getInstance()->ExecuteS('SELECT * FROM '._DB_PREFIX_.'price_rule WHERE id_product = ' . (int)$id_product);
        }
        if(!$result){
            return array();
        }
        /*foreach($result as $field) {
            $fields = $field['price_rule'];
        }*/
        return json_encode($result); //$fields;
}
public function getFieldValue($id_product,$field)
{
    $result = Db::getInstance()->ExecuteS('SELECT '.$field.' FROM '._DB_PREFIX_.'product WHERE id_product = ' . (int)$id_product);
    if(!$result)
        return array();

    foreach ($result as $result_field) {
        $fields = $result_field[$field];
    }

    return $fields;
}
public function hookActionAdminControllerSetMedia($params){
        // add necessary javascript to products back office
    if($this->context->controller->controller_name == 'AdminProducts')
    {
        $this->context->controller->addJS($this->_path.'/js/pricerule.js');
    }
}
public function hookDisplayAdminProductsExtra($params){
    $this->prepareNewTab($params['id_product']);
    return $this->display(__FILE__, '/views/tab-body.tpl');    
}
public function hookActionProductSave($params){
        //echo '<pre>'; print_r($this); echo '</pre>';exit;
        /*
            $this->container = $this->getInstance();
            $id_product = (int)Tools::getValue('id_product');
            if($id_product){
        // $response = new JsonResponse();
                $adminProductWrapper = $this->container->get('prestashop.adapter.admin.wrapper.product');
                if(isset($_POST['remove_specific_prices'])){
                    $remove_specific_prices_array = explode(",", $_POST['remove_specific_prices']);
                    foreach($remove_specific_prices_array as $value_to_remove) {
                        $removed = $adminProductWrapper->deleteSpecificPrice($value_to_remove); 
                    }
                }
        // echo '<pre>'; print_r($_POST); echo '</pre>';exit;
                $price_rules = array();
                if(isset($_POST['min_quantity'])){
                    foreach ($_POST['min_quantity'] as $key => $value) {
                        $request['specific_price'] = array(
                            "sp_id_shop"=>0,
                            "sp_id_currency"=>$_POST['rule_currency'][$key],
                            "sp_id_country"=>'',
                            "sp_id_group"=>'',
                            "sp_id_product_attribute"=>$_POST['combination'][$key],
                            "sp_from"=>'',
                            "sp_to"=>'',
                            "sp_from_quantity"=>$_POST['min_quantity'][$key],
                            "leave_bprice"=>1,
                            "sp_reduction"=>$_POST['rule_price'][$key],
                            "sp_reduction_type"=>$_POST['discount_type'][$key],
                            "sp_reduction_tax"=>1,
                            "is_custom"=>1,
                ); //is_custom currently not saving to database 

                        if($_POST['discount_type'][$key]=="percentage"){
                            $price_for_type = $_POST['rule_price'][$key]/100 ;
                        }else
                        {
                            $price_for_type = $_POST['rule_price'][$key] ;
                        }
                        if(isset($_POST['specific_price_id'][$key])){
                    //check if specific price rule exists with this id 
                            $specific_price_idd = $this->exists($_POST['specific_price_id'][$key]);

                        }else{
                            $specific_price_idd = false;
                        }

                        if(!empty($specific_price_idd) && $specific_price_idd !== 0  && $specific_price_idd !== false){
                            if(!Db::getInstance()->update('specific_price', array('reduction'=> $price_for_type ,"reduction_type"=>$_POST['discount_type'][$key], 'from_quantity'=>$_POST['min_quantity'][$key],"id_currency"=>$_POST['rule_currency'][$key],"id_product_attribute"=>$_POST['combination'][$key]) ,' id_specific_price = ' .$specific_price_idd )){
                                // $this->context->controller->_errors[] = Tools::displayError('Error: ').mysql_error();
                            }else{
                                $price_rules[] = array(
                                    "specific_price_id"=>$specific_price_idd,
                                    "min_quantity"=>$_POST['min_quantity'][$key],
                                    "discount_type"=>$_POST['discount_type'][$key],
                                    "rule_price"=>$_POST['rule_price'][$key],
                                    "delivery_time"=>$_POST['delivery_time'][$key],
                                    "currency"=>$_POST['rule_currency'][$key],
                                    "combination"=>$_POST['combination'][$key],
                                );
                            }
                        }else{
                            $errors = $adminProductWrapper->processProductSpecificPrice($id_product,$request['specific_price']);
                    // $errors = $this->processProductSpecificPrice($id_product,$request['specific_price']);
                    // if(empty($errors)){
                            $specific_price_id = $this->getLastSpecificPriceId($id_product);
                        // print_r($specific_price_id);
                            $price_rules[] = array(
                                "specific_price_id"=>$specific_price_id['id_specific_price'],
                                "min_quantity"=>$_POST['min_quantity'][$key],
                                "discount_type"=>$_POST['discount_type'][$key],
                                "rule_price"=>$_POST['rule_price'][$key],
                                "delivery_time"=>$_POST['delivery_time'][$key],
                                "currency"=>$_POST['rule_currency'][$key],
                                "combination"=>$_POST['combination'][$key],
                            );
                    // }
                        }
                    }
                // print_r($request['specific_price']);
                    if(!empty($price_rules)){
                        if(!Db::getInstance()->update('product', array('price_rule'=> json_encode($price_rules)) ,' id_product = ' .$id_product)){
                            $this->context->controller->_errors[] = Tools::displayError('Error: ').mysql_error();
                        }
                    }
                }else{
                    Db::getInstance()->update('product', array('price_rule'=> json_encode(array())) ,' id_product = ' .$id_product );
                }
            
        // $this->prepareNewTab();
         // Hook::exec('displayAdminProductsExtra', array('id_product' => $id_product));
        // return $response;
            }*/
        }
public function getLastSpecificPriceId($id_product, $id_product_attribute = false, $id_cart = false){
    return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT * FROM `'._DB_PREFIX_.'specific_price` WHERE `id_product` ='.(int)$id_product.' ORDER BY `id_specific_price` DESC ');
}
    /*
    *function to check if specific price rule exists by id
    */
public static function exists($specific_price_id=0){
    if($specific_price_id!=0){
        return (int)Db::getInstance()->getValue('SELECT `id_specific_price` FROM '._DB_PREFIX_.'specific_price WHERE `id_specific_price`='.(int)$specific_price_id);
    }
}
    /**
     * processProductSpecificPrice
     * Add/Update specific price
     *
     * @param int $id_product
     * @param array $specificPriceValues the posted values
     *
     * @return AdminProductsController instance
     */
    public function processProductSpecificPrice($id_product, $specificPriceValues)
    {
        $id_product_attribute = $specificPriceValues['sp_id_product_attribute'];
        $id_shop = $specificPriceValues['sp_id_shop'] ? $specificPriceValues['sp_id_shop'] : 0;
        $id_currency = $specificPriceValues['sp_id_currency'] ? $specificPriceValues['sp_id_currency'] : 0;
        $id_country = $specificPriceValues['sp_id_country'] ? $specificPriceValues['sp_id_country'] : 0;
        $id_group = $specificPriceValues['sp_id_group'] ? $specificPriceValues['sp_id_group'] : 0;
        $id_customer = !empty($specificPriceValues['sp_id_customer']['data']) ? $specificPriceValues['sp_id_customer']['data'][0] : 0;
        $price = isset($specificPriceValues['leave_bprice']) ? '-1' : $specificPriceValues['sp_price'];
        $from_quantity = $specificPriceValues['sp_from_quantity'];
        $reduction = (float)$specificPriceValues['sp_reduction'];
        $reduction_tax = $specificPriceValues['sp_reduction_tax'];
        $reduction_type = !$reduction ? 'amount' : $specificPriceValues['sp_reduction_type'];
        $reduction_type = $reduction_type == '-' ? 'amount' : $reduction_type;
        $from = $specificPriceValues['sp_from'];
        if (!$from) {
            $from = '0000-00-00 00:00:00';
        }
        $to = $specificPriceValues['sp_to'];
        if (!$to) {
            $to = '0000-00-00 00:00:00';
        }
        if (($price == '-1') && ((float)$reduction == '0')) {
            $this->errors[] = 'No reduction value has been submitted';
        } elseif ($to != '0000-00-00 00:00:00' && strtotime($to) < strtotime($from)) {
            $this->errors[] = 'Invalid date range';
        } elseif ($reduction_type == 'percentage' && ((float)$reduction <= 0 || (float)$reduction > 100)) {
            $this->errors[] = 'Submitted reduction value (0-100) is out-of-range';
        } elseif (true) {//$this->validateSpecificPrice($id_product, $id_shop, $id_currency, $id_country, $id_group, $id_customer, $price, $from_quantity, $reduction, $reduction_type, $from, $to, $id_product_attribute)
            $specificPrice = new SpecificPriceCustom();
            $specificPrice->id_product = (int)$id_product;
            $specificPrice->id_product_attribute = (int)$id_product_attribute;
            $specificPrice->id_shop = (int)$id_shop;
            $specificPrice->id_currency = (int)($id_currency);
            $specificPrice->id_country = (int)($id_country);
            $specificPrice->id_group = (int)($id_group);
            $specificPrice->id_customer = (int)$id_customer;
            $specificPrice->price = (float)($price);
            $specificPrice->from_quantity = (int)($from_quantity);
            $specificPrice->reduction = (float)($reduction_type == 'percentage' ? $reduction / 100 : $reduction);
            $specificPrice->reduction_tax = $reduction_tax;
            $specificPrice->reduction_type = $reduction_type;
            $specificPrice->from = $from;
            $specificPrice->to = $to;
                 // print_r($specificPrice);
            if (!$id = $specificPrice->add()) {
                $this->errors[] = 'An error occurred while updating the specific price.';
            }else
            {
                // print_r($id);

                return $id;
            }
        }
        return $this->errors;
    }
    /**
     * Validate a specific price
     */
    private function validateSpecificPrice($id_product, $id_shop, $id_currency, $id_country, $id_group, $id_customer, $price, $from_quantity, $reduction, $reduction_type, $from, $to, $id_combination = 0)
    {
        if (!Validate::isUnsignedId($id_shop) || !Validate::isUnsignedId($id_currency) || !Validate::isUnsignedId($id_country) || !Validate::isUnsignedId($id_group) || !Validate::isUnsignedId($id_customer)) {
            $this->errors[] = 'Wrong IDs';
        } elseif ((!isset($price) && !isset($reduction)) || (isset($price) && !Validate::isNegativePrice($price)) || (isset($reduction) && !Validate::isPrice($reduction))) {
            $this->errors[] = 'Invalid price/discount amount';
        } elseif (!Validate::isUnsignedInt($from_quantity)) {
            $this->errors[] = 'Invalid quantity';
        } elseif ($reduction && !Validate::isReductionType($reduction_type)) {
            $this->errors[] = 'Please select a discount type (amount or percentage).';
        } elseif ($from && $to && (!Validate::isDateFormat($from) || !Validate::isDateFormat($to))) {
            $this->errors[] = 'The from/to date is invalid.';
        } elseif (SpecificPrice::exists((int)$id_product, $id_combination, $id_shop, $id_group, $id_country, $id_currency, $id_customer, $from_quantity, $from, $to, false)) {
            $this->errors[] = 'A specific price already exists for these parameters.';
        } else {
            return true;
        }
        return false;
    }
    
    
    public function hookDisplayProductAdditionalInfo($params){  
            $product = array();
             if(isset($params['product']) && !empty($params['product'])){
                $product = $params['product'];
               // print_r($product);
             }
             //error_reporting(E_ALL);
             $this->prepareProductFront(Tools::getValue('id_product'),$params['product']['id_product_attribute'],$product);   
         if (Tools::getValue('action') == 'refresh'){
        	// return false;
            return $this->display(__FILE__, '/views/product-front-ajax.tpl');
         }else{
             return $this->display(__FILE__, '/views/product-front.tpl');
         }
         return $this->display(__FILE__, '/views/product-front.tpl');
         //return $this->display(__FILE__, '/views/product-variants.tpl');
     }
     
     
     
     public function hookDisplayProductAdditionalInfo2($params){  
            $product = array();
             if(isset($params['product']) && !empty($params['product'])){
                $product = $params['product'];
               // print_r($product);
             }
             //error_reporting(E_ALL);
             $this->prepareProductFront(Tools::getValue('id_product'),$params['product']['id_product_attribute'],$product);   
         if (Tools::getValue('action') == 'refresh'){
        	 //return false;
            return $this->display(__FILE__, '/views/views2/product-front2-ajax.tpl');
         }else{
             return $this->display(__FILE__, '/views/views2/product-front2.tpl');
         }
         return $this->display(__FILE__, '/views/views2/product-front2.tpl');
         //return $this->display(__FILE__, '/views/product-variants.tpl');
     }
     
     
     
     
     public function hookDisplayCartExtraProductActions($params){
        // echo json_encode($params['product']);
        $this->prepareCartFront((int)$params['product']['id_product'],(int)$params['product']['id_product_attribute'],(int)$params['product']['cart_quantity']);
        return $this->display(__FILE__, '/views/cart-delivery.tpl');
    }
    /*
    * CUSTOM HOOK FOR DISPLAYING DELIVERY TIME ON CART, ORDER AND PDF INVOICE 
    */
    public function hookdisplayDeliveryTime($params){
        if(isset($params['product'])){
            if(!isset($params['product']['product_attribute_id'])){
                $product_id = (int)$params['product']['id_product'];
                $id_product_attribute = (int)$params['product']['id_product_attribute'];
                $cart_quantity = (int)$params['product']['cart_quantity'];
            }else{
                $product_id = (int)$params['product']['product_id'];
                $id_product_attribute = (int)$params['product']['product_attribute_id'];
                $cart_quantity = (int)$params['product']['product_quantity'];
            }
            global $cookie, $smarty;
            $this->prepareCartFront($product_id,$id_product_attribute,$cart_quantity);
            return $this->display(__FILE__, '/views/cart-delivery.tpl');
        }
    }
}
?>