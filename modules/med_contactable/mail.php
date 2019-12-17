<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');

//declare our assets 
	$name = stripcslashes(Tools::getValue('name'));
	$emailAddr = stripcslashes(Tools::getValue('email'));
	$comment = stripcslashes(Tools::getValue('message'));
	$subject = stripcslashes(Tools::getValue('subject'));
	$to = Configuration::get('PS_SHOP_EMAIL');
	$id_lang = Tools::getValue('id_lang');	
	$contactMessage =  
		"
		$comment 

		Name: $name

		IP: ".((version_compare(_PS_VERSION_, '1.3.0.0', '<'))?$_SERVER['REMOTE_ADDR']:Tools::getRemoteAddr());
		
		//send the email 
		if(Mail::Send($id_lang,
			'contact',
			$subject,
			array(
				'{message}' => nl2br($contactMessage),
				'{email}' =>  $emailAddr,
			),
			$to,
			null,
			$emailAddr,
			$name
		))
			echo('success'); //return success callback
	
?>