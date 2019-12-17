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

class VideoCollection extends PrestaShopCollection
{
    private static $__instance = null;

    public function __construct($id_lang = null)
    {
        return parent::__construct('Video', $id_lang);
    }

    public static function getInstance($force = false, $id_lang = null)
    {
        if (self::$__instance === null && $force) {
            self::$__instance = new self($id_lang);
        }

        return self::$__instance;
    }

    public function update()
    {
        Db::getInstance()->ExecuteS('START TRANSACTION;');

        for ($this->rewind(); $this->valid(); $this->next()) {
            if ($this->current()->update() === false) {
                Db::getInstance()->ExecuteS('ROLLBACK;');
                return false;
            }
        }

        return Db::getInstance()->ExecuteS('COMMIT;');
    }

    public function get($id_product, $id_shop = null)
    {
        $this->where('id_product', '=', $id_product)
            ->orderByLangSort();

        return $this;
    }

    public function orderByLangSort($way = 'ASC')
    {
        if (!in_array($way, array('ASC', 'DESC'))) {
            $way = 'ASC';
        }

        $this->query->orderBy('a'.$this->alias_iterator.'.sort_order '.$way);
        return $this;
    }

    public function getById($id)
    {
        $this->where(Video::$definition['primary'], 'in', array_filter((array)$id, function ($_id) {
            return $_id > 0;
        }));

        return $this;
    }

    public function attach(Video $video)
    {
        $this->results[] = $video;

        return $this;
    }

    public function rewind()
    {
        parent::rewind();
        return $this;
    }
}
