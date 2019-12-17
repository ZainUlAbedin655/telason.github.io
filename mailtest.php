<?php 
include('/home/telaso5/public_html/config/config.inc.php');
include('/home/telaso5/public_html/init.php');
use PrestaShop\PrestaShop\Adapter;
error_reporting(E_ALL);
if(isset($_POST) && !empty($_POST)){
	if(isset($_POST['id_contact']) && !empty($_POST['id_contact']) && $_POST['id_contact'] == '1'){
		$name 			= $_POST['name'];
		$email 			= $_POST['email'];
		$companyname 	= $_POST['companyname'];
		$phonenumber 	= $_POST['phonenumber'];
		$country 		= $_POST['country'];
		$message 		= $_POST['subject'];
		$site_url 		= $_POST['site_url'];
		if(strpos($site_url, '?') !== false) {
			$site_url = $site_url."&";
		}else{
			$site_url = $site_url."?";
		}
		$htmlTemplate = '';
		$var_list =array();
		$var_list['name'] 		= $name;
		$var_list['message'] 	= $message;
		$var_list['company'] 	= $companyname;
		$var_list['phone_number'] = $phonenumber;
		$var_list['country'] 	= $country;
		$var_list['email'] 		= $email;
		$var_list['shop_name'] 	= 'Telason';
		$var_list['shop_url'] 	= 'https://telason.com';
		$from 		= 'support@telason.com';
		$fromName 	= 'Inquiry';
		$subject 	= 'Testing';
		$to = array('ahsandev.creative@gmail.com','sales@telason.com','nick.cumming@telason.com');
		$toName = array('Ahsan','Sales','Nick');
		if(!Mail::Send(
		    1, //$idLang
		    'inquire', //$template
		    Mail::l('INQUIRY'), /// $subject
		    $var_list, /// $templateVars
		    $to,//'sales@telason.com',//'nick.cumming@telason.com',// person to send emails // $to
		    $toName, //  $toName
		    $from, // $from
		    $fromName, // $fromName
		    null
		)){

		    //echo 'An error occurred while sending the message.';
		    header("Location:".$site_url."mail=fail");
		}else{
			header("Location:".$site_url."mail=success");
			//echo 'Mail send Success';
		}
	}
}