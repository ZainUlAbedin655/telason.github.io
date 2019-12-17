<?php
exit;
include('/home/telaso5/public_html/config/config.inc.php');
include('/home/telaso5/public_html/init.php');

error_reporting(E_ALL);
echo "<pre>";
$id_product = 87;
$result = Db::getInstance()->ExecuteS('SELECT `price_rule` FROM '._DB_PREFIX_.'product WHERE id_product = ' . (int)$id_product);
$result2 = Db::getInstance()->ExecuteS('SELECT * FROM '._DB_PREFIX_.'price_rule WHERE id_product = ' . (int)$id_product);
foreach($result as $field) {
    $fields = $field['price_rule'];
}
print_r(json_decode($fields));
echo '$result2';
print_r(json_decode(json_encode($result2)));
echo "</pre>";
exit;