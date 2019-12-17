<?php
use PrestaShopBundle\Form\Admin\Product\ProductCombination;
use PrestaShopBundle\Model\Product\AdminModelAdapter as ProductAdminModelAdapter;
class BlockCurrencies extends Module
{
	function __construct()
	{
		$this->name = 'blockcurrencies';
		$this->tab = 'Blocks';
		$this->version = 0.4;
		parent::__construct(); // The parent construct is required for translations
        $this->context = Context::getContext();
		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('Currency block');
		$this->description = $this->l('Adds a block for selecting a currency <br />updated by www.marghoobsuleman.com');
	}
	function install()
	{
		if (!parent::install())
			return false;
		if (!$this->registerHook('top') OR !$this->registerHook('rightColumn') OR !$this->registerHook('myNewCoolHook') OR !$this->registerHook('myNewCoolHooks') OR !$this->registerHook('leftColumn'))
			return false;
		return true;
	}
	public function getContent()
	{
		$output = '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitBlockCurrencies'))
		{
			$dropdown = Tools::getValue('dropdown');
			if ($dropdown != 0 AND $dropdown != 1)
				$output .= '<div class="alert error">'.$this->l('Dropdown : Invalid choice.').'</div>';
			else
			{
				Configuration::updateValue('PS_DEFAULT_CURRENCY_DROPDOWN', intval($dropdown));
			}
			$labelenabled = Tools::getValue('labelenabled');
			if ($labelenabled != 0 AND $labelenabled != 1)
				$output .= '<div class="alert error">'.$this->l('labelenabled : Invalid choice.').'</div>';
			else
			{
				Configuration::updateValue('PS_DEFAULT_CURRENCY_LBLENABLED', intval($labelenabled));
			}
			$currencylabelposition = Tools::getValue('currencylabelposition');
			if ($currencylabelposition != 0 AND $currencylabelposition != 1)
				$output .= '<div class="alert error">'.$this->l('currencylabelposition : Invalid choice.').'</div>';
			else
			{
				Configuration::updateValue('PS_DEFAULT_CURRENCY_LBLPOSITION', intval($currencylabelposition));
			}			
			
			$labelsameline = Tools::getValue('labelsameline');
			if ($labelsameline != 0 AND $labelsameline != 1)
				$output .= '<div class="alert error">'.$this->l('labelsameline : Invalid choice.').'</div>';
			else
			{
				Configuration::updateValue('PS_DEFAULT_CURRENCY_SAMELINE', intval($labelsameline));
			}
				$output .= '<div class="conf confirm"><img src="../img/admin/ok.gif" alt="'.$this->l('Confirmation').'" />'.$this->l('Settings updated').'</div>';
		}
		
		return $output.$this->displayForm();
	}
	public function displayForm()
	{
		return '
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset>
				<legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
				
				<label>'.$this->l('Currency as a dropdown').'</label>
				<div class="margin-form">
					<input onclick="javascript:$(\'#module_preview\').attr(\'src\', \'../modules/blockcurrencies/img/preview-custom.jpg\');"  type="radio" name="dropdown" id="dropdown_on" value="1" '.(Tools::getValue('dropdown', Configuration::get('PS_DEFAULT_CURRENCY_DROPDOWN')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="dropdown_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input onclick="javascript:$(\'#module_preview\').attr(\'src\', \'../modules/blockcurrencies/img/preview-default.jpg\');" type="radio" name="dropdown" id="dropdown_off" value="0" '.(!Tools::getValue('dropdown', Configuration::get('PS_DEFAULT_CURRENCY_DROPDOWN')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="dropdown_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
					<p class="clear">'.$this->l('Display currency as a dropdown').'</p>
				</div>
				<div class="margin-form">
				<h2>'.$this->l('Preview').'</h2>
				<img id="module_preview" border="1" src="'.(Tools::getValue('dropdown', Configuration::get('PS_DEFAULT_CURRENCY_DROPDOWN')) ? '../modules/blockcurrencies/img/preview-custom.jpg" ' : '../modules/blockcurrencies/img/preview-default.jpg').'" />
				</div>
				<label>'.$this->l('Show/Hide Label').'</label>
				<div class="margin-form">
					<input type="radio" name="labelenabled" id="labelenabled_on" value="1" '.(Tools::getValue('labelenabled', Configuration::get('PS_DEFAULT_CURRENCY_LBLENABLED')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="labelenabled_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="labelenabled" id="labelEnabled_off" value="0" '.(!Tools::getValue('labelenabled', Configuration::get('PS_DEFAULT_CURRENCY_LBLENABLED')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="labelenabled_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
					<p class="clear">'.$this->l('Show/hide currency label.').'</p>
				</div>
				<label>'.$this->l('Set Label Position').'</label>
				<div class="margin-form">
					<input type="radio" name="currencylabelposition" id="currencylabelposition_on" value="1" '.(Tools::getValue('currencylabelposition', Configuration::get('PS_DEFAULT_CURRENCY_LBLPOSITION')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="currencylabelposition_on"> Before dropdown/currencies label </label>
					<input type="radio" name="currencylabelposition" id="currencylabelposition_off" value="0" '.(!Tools::getValue('currencylabelposition', Configuration::get('PS_DEFAULT_CURRENCY_LBLPOSITION')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="currencylabelposition_off"> After dropdown/currencies label </label>
				</div>		
				<label>'.$this->l('Label in new line').'</label>
				<div class="margin-form">
					<input type="radio" name="labelsameline" id="labelsameline_on" value="1" '.(Tools::getValue('labelsameline', Configuration::get('PS_DEFAULT_CURRENCY_SAMELINE')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="labelsameline_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /> </label>
					<input type="radio" name="labelsameline" id="labelsameline_off" value="0" '.(!Tools::getValue('labelsameline', Configuration::get('PS_DEFAULT_CURRENCY_SAMELINE')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="labelsameline_off"><img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
					<p class="clear">'.$this->l('Label can be in same line. Set no for same line').'</p>
				</div>							
				<center><input type="submit" name="submitBlockCurrencies" value="'.$this->l('Save').'" class="button" /></center>
			</fieldset>
		</form>';
	}
	/**
	* Returns module content for header
	*
	* @param array $params Parameters
	* @return string Content
	*/
	function hookTop($params)
	{
		global $smarty;
		$currencies = Currency::getCurrencies();
		if (!sizeof($currencies))
			return '';
		$smarty->assign('currencies', $currencies);
		$dropdown = intval(Configuration::get('PS_DEFAULT_CURRENCY_DROPDOWN')) == 1 ? true : false;
		$smarty->assign('currenciesAsDropDown', $dropdown);
		$labelEnabled = intval(Configuration::get('PS_DEFAULT_CURRENCY_LBLENABLED')) == 1 ? true : false;
		$smarty->assign('labelEnabled', $labelEnabled);
		$beforeCurrencies = intval(Configuration::get('PS_DEFAULT_CURRENCY_LBLPOSITION')) == 1 ? true : false;
		$smarty->assign('beforeCurrencies', $beforeCurrencies);
		
		$showInSameLine = intval(Configuration::get('PS_DEFAULT_CURRENCY_SAMELINE')) == 1 ? true : false;
		$smarty->assign('showInSameLine', $showInSameLine);
			
		return $this->display(__FILE__, 'blockcurrencies.tpl');
	}
	function hookLeftColumn($params)
	{
		return $this->hookTop($params);
	}
	function hookRightColumn($params)
	{
		return $this->hookTop($params);
	}
	function hookmyNewCoolHook(){
		$html = '';
		$information = '';
		$mail = Tools::getValue('mail');
		/*return 'hi there that is new hook';*/
		if(!empty($mail)){
			if($mail == 'success'){
				$information = '<div class="block-inquire-message block-success">Your inquirey has been received, one of our team will be in contact within 24 hours.</div>';
			}
			if($mail == 'fail'){
				$information = '<div class="block-inquire-message block-error">Your Inquire is failed . Please contact us at sales@telason.com</div>';
			}
		}
		$html = '
		<h2 class="h2">Inquiry Form</h2>
    <style>
		input[type=text], input[type=email], input[type=number], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		  resize: vertical;
		}
		input[type=submit] {
		  color: white;
		  border: none;
		  cursor: pointer;
		  margin-bottom: 10px;
		  padding: 8px 20px;
    	  background-color: #0A80BE;
    	  text-transform: uppercase;
     	  border: 2px solid #0A80BE;
		}
		input[type=submit]:hover {
			background-color: #fff;
    		color: #0A80BE;
    	}
	</style>
        <div>'.$information.'
  		<form action="https://www.telason.com/mailtest.php" method="post" get-data-mail="'.json_encode(Tools::getValue("mail")).'" get-data="'.json_encode(Tools::getValue("data")).'">
		    <label for="name">Name</label>
		    <input type="text" id="name" name="name" placeholder="Your name..">
		    <label for="email">Email</label>
    		<input type="email" placeholder="Enter Email" name="email" required>
    		<label for="cname">Company Name</label>
		    <input type="text" id="cname" name="companyname" placeholder="Your company name..">
		    <label for="pno">Phone Number</label>
		    <input type="number" id="pno" name="phonenumber" placeholder="Your phone number..">
		    <label for="country">Country</label>
		    <input type="text" id="country" name="country" placeholder="Your country..">
		    <label for="subject">Subject</label>
		    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
		    <input type="hidden" name="id_contact" id="customer_service" value="1">
		    <input type="hidden" name="site_url" id="site_url" value="'.$_SERVER["REQUEST_URI"].'">
		    <input type="submit" value="Submit">
  		</form>
		</div>';
		return $html;
	}
	public function sendEmail(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$companyname = $_POST['companyname'];
		$phonenumber = $_POST['phonenumber'];
		$country = $_POST['country'];
		$subject = $_POST['subject'];
		$formcontent="From: $name \n Message: $subject";
		$recipient = "seles@telason.com";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		echo "Thank You!";
	}
	function hookmyNewCoolHooks($params){
		 $id_product = (int)Tools::getValue('id_product');
		  $product = new Product($id_product);
		// gives all the combinations array of the related product-id.
		$combinations=$product->getAttributeCombinations($this->context->language->id);
		/*echo "<pre>"; print_r($combinations[0]['id_product_attribute']);*/
          $id_lang = $this->context->language->id;
          //gives us all the products array in which product id and combination id is placed.
		  $products = Product::getProducts($id_lang, 0, 100, 'id_product', 'asc');
         foreach ($products as $key => $value) {
		         	$product_ids = $value['id_product'];
		         	$product = new Product($product_ids);
				// gives all the combinations array of the related product-id.
				$combinations=$product->getAttributeCombinations($this->context->language->id);
				/*echo "<pre>"; print_r($combinations);echo "</pre>";*/
		  }
			  /*echo "<pre>"; print_r($products);*/
			  /*
			  $products = Product::getProducts($id_lang, 0, 5, 'id_product', 'asc');
			  $products_all = Product::getProductsProperties($id_lang, $products);
			  /*echo "<pre>"; print_r($products_all);*/
			  /*$cats = Category::getCategories($id_lang);*/
			 /* $products = Product::getProducts($id_lang);	*/
			  /*echo "<pre>"; print_r($products);*/
			  /*$products = Product::getProducts($id_lang, 0, 1000, $id_product , 'asc', false, false, false, true, null);*/
			  /*echo "<pre>"; print_r($id_lang);*/
			  /*$products = Product::getProducts($id_lang, 0, 1000, 'asc', 'asc');*/
			  /*$products_all = Product::getProductsProperties($id_lang, $products);*/
	          /*echo "<pre>"; print_r($products_all);*/
	          /*var_dump($products_all);*/
			
	       return '';
		}

}
?>