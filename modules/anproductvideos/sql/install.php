<?php
/**
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
*  @author    Apply Novation (Artem Zwinger)
*  @copyright 2016-2017 Apply Novation
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

return Db::getInstance()->execute(
    'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'anproductvideos` (
        `id_anproductvideos` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `id_product` int(10) unsigned NOT NULL,
        `video` varchar(512) NOT NULL,
        `cover` varchar(512) DEFAULT NULL,
        `type` enum("youtube","vimeo","internal") NOT NULL,
        CONSTRAINT `'._DB_PREFIX_.'anproductvideos_pk_1` PRIMARY KEY (`id_anproductvideos`)
    ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;

    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'anproductvideos_shop` (
        `id_anproductvideos` int(10) unsigned NOT NULL,
        `id_shop` int(11) unsigned NOT NULL,
        CONSTRAINT `'._DB_PREFIX_.'anproductvideos_shop_pk` PRIMARY KEY (`id_anproductvideos`, `id_shop`),
        CONSTRAINT `'._DB_PREFIX_.'anproductvideos_shop_1` FOREIGN KEY (`id_anproductvideos`) REFERENCES `'._DB_NAME_.'`.`'._DB_PREFIX_.'anproductvideos`(`id_anproductvideos`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;

    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'anproductvideos_lang` (
        `id_anproductvideos` int(10) unsigned NOT NULL,
        `id_lang` int(10) unsigned NOT NULL,
        `title` varchar(255) DEFAULT NULL,
        `description` text,
        `sort_order` mediumint(8) unsigned NOT NULL,
        INDEX(`sort_order`),
        CONSTRAINT `'._DB_PREFIX_.'anproductvideos_lang_pk_1` PRIMARY KEY (`id_anproductvideos`, `id_lang`),
        CONSTRAINT `'._DB_PREFIX_.'anproductvideos_lang_1` FOREIGN KEY (`id_anproductvideos`) REFERENCES `'._DB_NAME_.'`.`'._DB_PREFIX_.'anproductvideos`(`id_anproductvideos`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;');
