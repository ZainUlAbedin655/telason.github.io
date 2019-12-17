<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
 //error_reporting(E_ALL); ini_set('display_errors', 1); 
/**
 * @since 1.5.0
 */
class Ps_IpaytotalpaymentValidationModuleFrontController extends ModuleFrontController{
    public function postProcess(){
         //$url = Context::getContext()->link->getModuleLink('ps_ipaytotalpayment', 'payment');
         /*$myObj = array('msg'=>4,'message'=>$url);
         $myJSON = json_encode($myObj);
        echo $myJSON;   
        exit;*/

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $logger = new FileLogger(0); //0 == debug level, logDebug() won’t work without this.
        //$logger->setFilename(_PS_ROOT_DIR_."/log/ipaytotalpayments.log");
        $logger->setFilename(_PS_ROOT_DIR_."/log/ipaytotalpayments_".date('j.n.Y').".log");
        $logger->logDebug("1. postProcess process start ".date('l jS \of F Y h:i:s A')." ");
        $logger->logDebug("2. POST Data ".json_encode($_POST)." ");
        $error=0;
        $mess="";
        if(isset($_POST['cardholder_name'])){
            if($_POST['cardholder_name']!=""){
                $cardholder_name= $_POST['cardholder_name']; 
            }else{
                $error=1;
                $mess .="Card Holder Name can't be blank.<br>";
            }
        }else{
          $cardholder_name=""; 
        }
        if(isset($_POST['cardholder_number'])){
            if($_POST['cardholder_number']!=""){
                $cardholder_number= $_POST['cardholder_number']; 
            }else{
                $error=1;
                $mess .="Card Number can't be blank.<br>";
            }
        }else{
            $cardholder_number=""; 
        }
        if(isset($_POST['card_expiry'])){
            if($_POST['card_expiry']!=""){
                 $card_expiry= $_POST['card_expiry']; 
                 $card_expiry=explode('/',$card_expiry);
                  $month=$card_expiry[0];
                  $year=$card_expiry[1];
            }else{
                $error=1;
                $mess .="Card Expiry can't be blank.<br>";
            }
        }else{
          $card_expiry=""; 
        }
        if(isset($_POST['card_code'])){
            if($_POST['card_code']!=""){
                $card_code= $_POST['card_code']; 
            }else{
                $error=1;
                $mess .="CVV can't be blank.<br>";
            }
        }else{
          $card_code=""; 
        }
        if($error==0){
            $logger->logDebug("3. error zero ");
            $cart = $this->context->cart;
            $sql = 'SELECT * FROM '._DB_PREFIX_.'address'." where active='1' and id_address='".$cart->id_address_invoice."' limit 0,1";
            $num=count(Db::getInstance()->ExecuteS($sql));
            if($num>0){
                if($results = Db::getInstance()->ExecuteS($sql)){
                       $id_address= $results[0]['id_address'];
                       $id_country= $results[0]['id_country'];
                       $sql_country = 'SELECT * FROM '._DB_PREFIX_.'country'." where active='1' and id_country='".$id_country."' limit 0,1";
                    if($results_country = Db::getInstance()->ExecuteS($sql_country)){
                        $country_iso_code= $results_country[0]['iso_code'];
                    }
                        $id_state= $results[0]['id_state'];
                        $sql_state = 'SELECT * FROM '._DB_PREFIX_.'state'." where active='1' and id_state='".$id_state."' limit 0,1";
                    if ($results_state = Db::getInstance()->ExecuteS($sql_state)){
                        $state_iso_code= $results_state[0]['iso_code'];
                    }
                        $firstname  = $results[0]['firstname'];
                        $lastname   = $results[0]['lastname'];
                        $address1   = $results[0]['address1'];
                        $address2   = $results[0]['address2'];
                        $postcode   = $results[0]['postcode'];
                        $phone      = $results[0]['phone'];
                        $city       = $results[0]['city'];
                       // echo"city--$city<br>";
                }
            }
            if($cart->id_customer == 0 || $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active){
                $logger->logDebug("4. redirect order step 1 ");
                Tools::redirect('index.php?controller=order&step=1');
            }
            $authorized = false;
            foreach (Module::getPaymentModules() as $module) {
                if ($module['name'] == 'ps_ipaytotalpayment') {
                    $authorized = true;
                    $logger->logDebug("5. authorized true ");
                    break;
                }
            }
            if(!$authorized) {
                $logger->logDebug("6. authorized false This payment method is not available");
                die($this->trans('This payment method is not available.', array(), 'Modules.Ipaytotalpayment.Shop'));
            }
            $customer = new Customer($cart->id_customer);
            $email=$customer->email;
            if (!Validate::isLoadedObject($customer)){
                $logger->logDebug("7. redirect order step 1 2");
                Tools::redirect('index.php?controller=order&step=1');
            }
            $currency   = $this->context->currency;
            $total      = (float)$cart->getOrderTotal(true, Cart::BOTH);
            $mailVars   = array('{check_name}' => Configuration::get('KEY_NAME'));
            $key_value  = $mailVars['{check_name}'];
            $url        = "https://ipaytotal.solutions/api/transaction"; //live 
           // $url        = "https://ipaytotal.solutions/api/test/transaction"; // test demo sandbox url 
            //$key = "Uru4AbZLW5WHcaPaNSD0ZzCdasDjhd6YMqVCydTtKGQO7hitwPydGpOAnkWJFumg";
            $key        = $key_value;
            $cart_type = $this->validatecard($cardholder_number);
            if($cart_type > 0){
                 //$response_url ='https://www.telason.com/index.php?controller=order&step=2&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key;
                 $response_url = 'https://www.telason.com/response_ipay.php';
                 $response_url = 'https://www.telason.com/response_ipay.php?step=2&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&total='.$total.'&currency='.(int)$currency->id.'&key='.$customer->secure_key.'&';
                 $response_url = Context::getContext()->link->getModuleLink('ps_ipaytotalpayment', 'payment');
                 $response_url .= '?step=2&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&total='.$total.'&currency='.(int)$currency->id.'&key='.$customer->secure_key.'&';
                $ip_address = $this->get_client_ip();
                $data = [
                    'api_key'       => $key,
                    'first_name'    => $firstname,
                    'last_name'     => $lastname,
                    'address'       => $address1,
                    'country'       => $country_iso_code,
                    'state'         => "AK", // if your country US then use only 2 letter state code.
                    'city'          => $city,
                    'zip'           => $postcode,
                    'email'         => $email,
                    'phone_no'      => $phone,
                    'card_type'     => $cart_type,//"3", // See your card type in list
                    'amount'        => $total,
                    'currency'      => "USD",
                    'card_no'       => $cardholder_number,
                    'ccExpiryMonth' => $month,
                    'ccExpiryYear'  => $year,
                    'cvvNumber'     => $card_code,
                    'sulte_apt_no'  => $this->module->currentOrder,
                    'response_url'  => $response_url,
                    'ip_address'    => $ip_address

                ]; 
                /*$data = [
                    'api_key' => $key,
                    'first_name' => "Joe",
                    'last_name' => 'soap',
                    'address' => "delhi",
                    'country' => "US",
                    'state' => "AK", // if your country US then use only 2 letter state code.
                    'city' => "Delhi",
                    'zip' => "234455",
                    'email' => "testingteam2@gmail.com",
                    'phone_no' => "233445555",
                    'card_type' =>"2", // See your card type in list
                    'amount' => "40",
                    'currency' => "USD",
                    'card_no' => "4111111111111111",
                    'ccExpiryMonth' => "03",
                    'ccExpiryYear' => "2020",
                    'cvvNumber' => "123",
                ];*/
                $logger->logDebug("8. Curl Data ".json_encode($data)." ");
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_HTTPHEADER,[
                    'Content-Type: application/json'
                ]);
                $response = curl_exec($curl);
                curl_close($curl);
                $responseData = json_decode($response); 
                $logger->logDebug("8.9. Curl Data ".json_encode($data)." ");
                $logger->logDebug("9. Curl Response ".json_encode($responseData)." ");
                               /* echo "<pre>";
                                print_r($response);
                                exit;*/
                $message = "";
                $msg =0;
                $status=$responseData->status;
                            /*echo "<pre>";
                            print_r($status);
                            exit;*/
                if($responseData->status == 'success'){
                    $msg=1;
                    // echo"xx---".Configuration::get('PS_OS_CHEQUE');
                    // ech
                    // echo"PS_OS_IPAYTOTAL---".Configuration::get('PS_OS_IPAYTOTAL');
                    //  die();
                    $message='index.php?controller=order-confirmation&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key;
                          $this->module->validateOrder((int)$cart->id, Configuration::get('PS_OS_IPAYTOTAL'), $total, $this->module->displayName, null, $mailVars, (int)$currency->id, false, $customer->secure_key);
                            // Tools::redirect('index.php?controller=order-confirmation&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key);
                    $myObj = array('msg'=>$msg,'message'=>$message);
                    $logger->logDebug("10. success msg  ".json_encode($msg)." , message  ".json_encode($message)." ");
                }else if($responseData->status == '3d_redirect'){
                    //$this->module->validateOrder((int)$cart->id, Configuration::get('PS_OS_IPAYTOTAL'), $total, $this->module->displayName, null, $mailVars, (int)$currency->id, false, $customer->secure_key);
                    $threed_redirect = $responseData->redirect_3ds_url;
                    $msg=9;
                    $logger->logDebug("10. redirect msg  ".json_encode($responseData)." ");
                    $myObj = array(
                        'msg'           => $msg,
                        'message'       => 'redirect',
                        'step'          => 2,
                        'id_cart'       => (int)$cart->id,
                        'id_module'     => (int)$this->module->id,
                        'id_order'      => (int)$this->module->currentOrder,
                        'key'           => $customer->secure_key,
                        'redirect_url'  => $threed_redirect,
                    );
                    $myJSON = json_encode($myObj);
                    echo $myJSON;
                   
                    //Tools::redirectLink($url);
                    die();
                    //Tools::redirect($responseData->redirect_3ds_url);
                    //exit; 
                    /*$msg=1;
                    $message='index.php?controller=order-confirmation&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key;
                          $this->module->validateOrder((int)$cart->id, Configuration::get('PS_OS_IPAYTOTAL'), $total, $this->module->displayName, null, $mailVars, (int)$currency->id, false, $customer->secure_key);
                    $myObj = array('msg'=>$msg,'message'=>$message);
                    $logger->logDebug("10. success msg  ".json_encode($msg)." , message  ".json_encode($message)." "); */   

                }else{
                    $msg =0;
                    if(isset($responseData->errors)){
                        $errors = $responseData->errors;
                        foreach($errors as $key => $value){
                            $value = $value[0];
                            $message .= $value."<br>";
                        }
                    }
                    if(isset($responseData->message)){
                        $message .= $responseData->message."<br>";
                    }
                }
                $logger->logDebug("11. after msg  ".json_encode($msg)." , message  ".json_encode($message)." ");
                $myObj = array('msg'=>$msg,'message'=>$message, 'data' =>json_encode($responseData));
                $myJSON = json_encode($myObj);
                echo $myJSON;
                die();
            }else{
                $msg = 2;
                $message = 'Fail Card Type Not Correct';
                $logger->logDebug("11. Fail msg  ".json_encode($msg)." , message  ".json_encode($message)." ");
                $myObj = array('msg'=>$msg,'message'=>$message);
                $myJSON = json_encode($myObj);
                echo $myJSON;
                die();
            }
        }else{
            $logger->logDebug("12. else after msg  ".json_encode($msg)." , mess  ".json_encode($mess)." ");
            $myObj = array('msg'=>$msg,'message'=>$mess);
            $myJSON = json_encode($myObj);
            echo $myJSON;        
        }
        die(); 
    }
    /* Luhn algorithm number checker - (c) 2005-2008 shaman - www.planzero.org *
     * This code has been released into the public domain, however please      *
     * give credit to the original author where possible.                      */
    public function validatecard($number){
        global $type;
        $cardtype = array(
            "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
            "mastercard" => "/^5[1-5][0-9]{14}$/",
            "amex"       => "/^3[47][0-9]{13}$/",
            "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
        );
        if (preg_match($cardtype['visa'],$number)){
        $type= "visa";
            return 2;
        }else if (preg_match($cardtype['mastercard'],$number)){
        $type= "mastercard";
            return 3;
        }else if (preg_match($cardtype['amex'],$number)){
        $type= "amex";
            return 1;
        }else if (preg_match($cardtype['discover'],$number)){
        $type= "discover";
            return 4;
        }else{
            return 0;
        } 
     }
     // Function to get the client IP address
    public function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}