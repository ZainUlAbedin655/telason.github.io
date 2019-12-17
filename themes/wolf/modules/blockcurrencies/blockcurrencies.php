<?php

class BlockCurrencies extends Module
{
	function __construct()
	{
		$this->name = 'blockcurrencies';
		$this->tab = 'Blocks';
		$this->version = 0.4;

		parent::__construct(); // The parent construct is required for translations

		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('Currency block');
		$this->description = $this->l('Adds a block for selecting a currency <br />updated by www.marghoobsuleman.com');
	}

	function install()
	{
		if (!parent::install())
			return false;
		if (!$this->registerHook('top') OR !$this->registerHook('rightColumn') OR !$this->registerHook('leftColumn'))
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
}

?>
