<?php
exit;
ini_set('max_execution_time', 0); //0=NOLIMIT
set_time_limit(0);
include('/home/telaso5/public_html/config/config.inc.php');
include('/home/telaso5/public_html/init.php');
//include('/home/telaso5/public_html/classes/PaymentModule.php');
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Core\Product\ProductExtraContentFinder;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Addon\Module\ModuleManagerBuilder;
use PrestaShopBundle\Form\Admin\Product\ProductCombination;
use PrestaShopBundle\Model\Product\AdminModelAdapter as ProductAdminModelAdapter;
//Something to write to txt log
$log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Date: ".json_encode($_REQUEST).PHP_EOL.
        "SERVER: ".json_encode($_SERVER).PHP_EOL.
        "-------------------------".PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                      //$this->module->validateOrder((int)$cart->id, Configuration::get('PS_OS_IPAYTOTAL'), $total, $this->module->displayName, null, $mailVars, (int)$currency->id, false, $customer->secure_key);
                        // Tools::redirect('index.php?controller=order-confirmation&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key);
                //$myObj = array('msg'=>$msg,'message'=>$message);
                //$logger->logDebug("10. success msg  ".json_encode($msg)." , message  ".json_encode($message)." ");
//$url = 'https://www.telason.com/index.php?controller=order&step=2&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key; 
			$step = Tools::getValue('step');
			$url = 'https://www.telason.com/index.php?controller=order-fail';
	        if(!empty($step) && $step == 2){
	            $id_cart        = Tools::getValue('id_cart');
	            $id_module      = Tools::getValue('id_module');
	            $key            = Tools::getValue('key');
	            $order_id       = Tools::getValue('order_id');
	            $status         = Tools::getValue('status');
	            $qstatus        = Tools::getValue('?status');
	            $reason         = Tools::getValue('reason');
	            $total          = Tools::getValue('total');
	            $currency          = Tools::getValue('currency');
	            if($status  == 'success' || $qstatus  == 'success'){
		            $url = 'https://www.telason.com/index.php?controller=order-confirmation&id_cart='.$id_cart.'&id_module='.$id_module.'&id_order='.$order_id.'&key='.$key;
		             $mailVars   = array('{check_name}' => Configuration::get('KEY_NAME'));
		             //$this->module->validateOrder($id_cart, Configuration::get('PS_OS_IPAYTOTAL'), $total, 'Payments by Credit Card', null, $mailVars, (int)$currency->id, false, $customer->secure_key);
		            /* echo '<pre>';
		             echo 'id_cart ';print_r($id_cart);echo '<br>';
		             echo 'PS_OS_IPAYTOTAL ';print_r(Configuration::get('PS_OS_IPAYTOTAL'));echo '<br>';
		             echo 'total ';print_r($total);echo '<br>';
		             echo 'mailVars ';print_r($mailVars);echo '<br>';
		             echo 'currency ';print_r($currency);echo '<br>';*/
		            PaymentModule::validateOrder($id_cart,Configuration::get('PS_OS_IPAYTOTAL'),$total,'Payments by Credit Card',null,$mailVars,$currency,false,$key);

		        }else{
		            $url = 'https://www.telason.com/index.php?controller=order-fail&id_cart='.$id_cart.'&id_module='.$id_module.'&id_order='.$order_id.'&key='.$key;
		        }
	        }         
			Tools::redirectLink($url);
     //$response_url ='https://www.telason.com/index.php?controller=order&step=2&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key;           