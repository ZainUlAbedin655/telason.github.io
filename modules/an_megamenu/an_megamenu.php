<?php
/**
 * 2007-2017 PrestaShop.
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once _PS_MODULE_DIR_ . 'an_megamenu/classes/AnMenu.php';
require_once _PS_MODULE_DIR_ . 'an_megamenu/classes/AnDropdown.php';

/**
 * Class an_megamenu
 */
class an_megamenu extends Module
{
    /**
     * Composition classes
     */
    protected $compositeClasses = array(
        'AnMegaMenuConfigurator',
        'AnMegaMenuMenuConfigurator',
        'AnMegaMenuHooks',
        'AnMegaMenuAjaxHandler',
        'AnMegaMenuDropDownConfigurator',
    );

    /**
     * Composition cache
     */
    protected static $compositeCache = array();

    /**
     * @var string
     */
    protected $bg_img_folder = 'views/img/images/';

    /**
     * @var string
     */
    protected $html = '';

    /**
     * @var string
     */
    protected $currentIndex;

    /**
     * an_megamenu constructor.
     */
    public function __construct()
    {
        $this->name = 'an_megamenu';
        $this->tab = 'front_office_features';
        $this->version = '1.0.1';
        $this->author = 'Anvanto';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->tr('Anvanto Mega Menu');
        $this->description = $this->tr('Anvanto Mega Menu');
        $this->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
    }

    /**
     * Installation
     *
     * @return bool
     */
    public function install()
    {
        $sql = include _PS_MODULE_DIR_ . 'an_megamenu/sql/install.php';
        foreach ($sql as $query) {
            if (!Db::getInstance()->execute($query)) {
                return false;
            }
        }

        if (parent::install()) {
            foreach ($this->getMegaMenuHooks() as $hook) {
                if (!$this->registerHook($hook)) {
                    return false;
                }
            }
            return true;
        }

        return false;
    }

    /**
     * Uninstallation
     *
     * @return bool
     */
    public function uninstall()
    {
/*        $sql = include _PS_MODULE_DIR_ . 'an_megamenu/sql/uninstall.php';
        foreach ($sql as $query) {
            if (!Db::getInstance()->execute($query)) {
                return false;
            }
        } */
        return parent::uninstall();
    }

    /**
     * Translator
     *
     * @param $text
     * @param array $params
     * @param string $type
     * @return mixed
     */
    protected function tr($text, $params = array(), $type = 'Modules.AnMegaMenu.Admin')
    {
        return $this->getTranslator()->trans($text, $params, $type);
    }

    /**
     * @return mixed|void
     */
    public function __call($method, $args = array())
    {
        if (empty(static::$compositeCache)) {
            foreach ($this->compositeClasses as $class) {
                require_once _PS_MODULE_DIR_ . 'an_megamenu/composite/' . $class . '.php';
                static::$compositeCache[$class] = new $class();
            }
        }

        foreach (static::$compositeCache as $instance) {
            if (method_exists($instance, $method)) {
                return $instance->$method();
            }
        }

        $this->_clearCache('*');
    }

    /**
     * Get configuratino
     *
     * @return string
     */
    public function getContent()
    {
        return $this->getConfiguration();
    }
}
