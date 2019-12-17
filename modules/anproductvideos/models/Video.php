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

class Video extends ObjectModel
{
    public $id = 0;
    public $id_product = 0;
    public $id_shop = 0;
    public $video = '';
    public $type = '';
    public $cover = '';
    public $title = array();
    public $description = array();
    public $format = "mp4";
    public $sort_order = array();
    protected $id_lang = null;

    protected $types = array(
        'youtube',
        'vimeo',
        'internal'
    );

    public static $definition = array(
        'table' => 'anproductvideos',
        'primary' => 'id_anproductvideos',
        'multilang' => true,
        'multishop' => true,
        'fields' => array(
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'video' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 512, 'required' => true),
            'type' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255, 'required' => true),
            'cover' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 512),
            'title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 65535),
            'sort_order' => array('type' => self::TYPE_INT, 'lang' => true, 'validate' => 'isInt'),
        ),
    );

    public function setId($id)
    {
        $this->id = (int)$id;

        return $this;
    }

    public function setIdProduct($id)
    {
        $this->id_product = (int)$id;

        return $this;
    }

    public function setIdShop($id)
    {
        $this->id_shop = (int)$id;

        return $this;
    }

    public function setVideo($video)
    {
        $this->setFormat($this->parseFormat($video))
            ->setType($this->parseVideoType($video));

        $video = mb_ereg_replace("^(http:|https:)", "", $video);
        
        if (empty($this->video) && $this->id == 0) {
            $method = 'parse'.Tools::ucfirst($this->type);

            if (is_callable(array($this, $method))) {
                $this->{$method}($video);
            }
        }

        $this->video = $video;

        return $this;
    }

    protected function parseYoutube(&$video)
    {
        $video = mb_ereg_replace("/youtu.be/", "/www.youtube.com/embed/", $video);
        $video = mb_ereg_replace("watch\?v=", "embed/", $video);
        $video = mb_ereg_replace("www.youtube.com/v/", "www.youtube.com/embed/", $video);
        $video = mb_ereg_replace("&(.*)$", "", $video);

        return $this;
    }

    protected function parseInternal(&$video)
    {
        return $this;
    }

    protected function parseVimeo(&$video)
    {
        $video = mb_ereg_replace("/vimeo\.com", "/player.vimeo.com/video", $video);
        return $this;
    }

    public function setType($type)
    {
        if (in_array($type, $this->types)) {
            $this->type = $type;
        }

        return $this;
    }

    public function setFormat($format)
    {
        $this->format = (string)$format;

        return $this;
    }

    public function setCover($cover)
    {
        $this->cover = (string)$cover;

        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setDescription($desc)
    {
        $this->description = $desc;

        return $this;
    }

    public function setSortOrder($order)
    {
        if (is_string($order) || is_integer($order)) {
            if (isset($this->id_lang) && $this->id_lang != 0) {
                $this->sort_order[$this->id_lang] = (int)$order;
            } else {
                foreach (Language::getLanguages(1, 0, 1) as $id_lang) {
                    $this->sort_order[(int)$id_lang] = (int)$order;
                }
            }
        } else if (is_array($order)) {
            $this->sort_order = $order;
        }

        return $this;
    }

    public function __get($field)
    {
        return property_exists($this, $field) ? $this->{$field} : null;
    }

    public function __set($field, $value)
    {
        $method = 'set'.implode('', array_map(function ($entity) {
            return Tools::ucfirst($entity);
        }, explode("_", $field)));

        if (is_callable(array($this, $method))) {
            $this->{$method}($value);
        }
    }

    public function add($auto_date = true, $null_values = false)
    {
        $sort_order = Db::getInstance()->ExecuteS('SELECT max(avl.sort_order)+1 as sort FROM `'._DB_PREFIX_.'anproductvideos` as av LEFT JOIN `'._DB_PREFIX_.'anproductvideos_lang` as avl ON (avl.id_anproductvideos = av.id_anproductvideos) WHERE av.`id_product` = '.(int)$this->id_product);
        $this->setSortOrder(is_array($sort_order) && isset($sort_order[0]) && isset($sort_order[0]['sort']) ? (int)$sort_order[0]['sort'] : 0);
        return parent::add($auto_date, $null_values);
    }

    public function parseFormat($video)
    {
        $link = explode('.', $video);

        return $link[count($link) - 1];
    }

    public function parseVideoType($video)
    {
        if (mb_strpos($video, 'youtube') > 0 || mb_strpos($video, 'youtu.be')) {
            return 'youtube';
        } elseif (mb_strpos($video, 'vimeo') > 0) {
            return 'vimeo';
        } elseif (mb_strpos($video, 'img/cms') > 0) {
            return 'internal';
        } else {
            return 'undefined';
        }
    }

    /**
     * array_key_exists has incorrect behavior on objects
     */
    public function hydrate(array $data, $id_lang = null)
    {
        $this->id_lang = $id_lang;
        if (isset($data[$this->def['primary']])) {
            $this->id = (int)$data[$this->def['primary']];
        }

        foreach ($data as $key => $value) {
            $this->__set($key, $value);
        }
    }
}
