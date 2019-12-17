<?php 
$to = array('hkhan5028@gmail.com','sales@telason.com','nick.cumming@telason.com','dev@telason.com');
foreach ($to as $key => $email) {
	mail($email,'Testing PHP MAIL', 'Testing PHP MAIL'.json_encode($to));
}		