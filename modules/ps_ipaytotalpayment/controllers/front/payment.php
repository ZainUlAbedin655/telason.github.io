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

/**
 * @since 1.5.0
 */
class Ps_IpaytotalpaymentPaymentModuleFrontController extends ModuleFrontController
{
    public $ssl = true;

    /**
     * @see FrontController::initContent()
     */
    public function initContent(){
        parent::initContent();
        $step = Tools::getValue('step');
        if(!empty($step) && $step == 2){
            /*
            $this->context->smarty->assign(array(
                'status'    => $status,
                'reason'    => $reason,
                'order_id'  => $order_id,
                'key'       => $key,
                'id_module' => $id_module,
                'id_cart'   => $id_cart,
            ));
            $this->setTemplate('payment_return.tpl');*/
            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Date: ".json_encode($_REQUEST).PHP_EOL.
                    "SERVER: ".json_encode($_SERVER).PHP_EOL.
                    "-------------------------".PHP_EOL;
            file_put_contents('logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
            $url = 'https://www.telason.com/index.php?controller=order-fail';
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
                    $this->module->validateOrder($id_cart, Configuration::get('PS_OS_IPAYTOTAL'), $total, $this->module->displayName, null, $mailVars, $currency, false, $key);
                    Tools::redirect('index.php?controller=order-confirmation&id_cart='.$id_cart.'&id_module='.$id_module.'&id_order='.$order_id.'&key='.$key);
                    exit;
                }else{
                    $url = 'https://www.telason.com/index.php?controller=order-fail&id_cart='.$id_cart.'&id_module='.$id_module.'&id_order='.$order_id.'&key='.$key;
                }      
            Tools::redirectLink($url);          
        }else{
            $cart = $this->context->cart;
            if (!$this->module->checkCurrency($cart)) {
                Tools::redirect('index.php?controller=order');
            }
            $this->context->smarty->assign(array(
                'nbProducts'    => $cart->nbProducts(),
                'cust_currency' => $cart->id_currency,
                'currencies'    => $this->module->getCurrency((int)$cart->id_currency),
                'total'         => $cart->getOrderTotal(true, Cart::BOTH),
                'isoCode'       => $this->context->language->iso_code,
                'checkName'     => $this->module->checkName,
                'this_path'     => $this->module->getPathUri(),
                'this_path_check' => $this->module->getPathUri(),
                'this_path_ssl' => Tools::getShopDomainSsl(true, true).__PS_BASE_URI__.'modules/'.$this->module->name.'/'
            ));
            $this->setTemplate('payment_execution.tpl');
        }
    }
}
