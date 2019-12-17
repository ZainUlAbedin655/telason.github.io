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

require_once _PS_MODULE_DIR_.'anproductvideos/models/Video.php';
require_once _PS_MODULE_DIR_.'anproductvideos/models/VideoCollection.php';

class Anproductvideos extends Module
{

    protected $versionPresta;
    protected $views_prefix_admin = '';
    protected $views_prefix_hook = '';
    public $views_path_admin = '';
    public $views_path_hook = '';
    protected $media_path = '';
    protected $messages = '';
    //Common configuration
    const VIEW_TYPE                         = 'ANPRODUCTVIDEOS_VIEW_TYPE';
    const VIEW_TYPE_GRID                    = 'grid';
    const VIEW_TYPE_LIST                    = 'list';
    const VIEW_TYPE_LONG                    = 'long';

    const DEFAULT_VIEW_TYPE                 = 'grid';

    //Youtube configuration
    const YOUTUBE_ALLOW_CONTROLS            = 'ANPRODUCTVIDEOS_YOUTUBE_ALLOW_CONTROLS';
    const YOUTUBE_ALLOW_AUTOPLAY            = 'ANPRODUCTVIDEOS_YOUTUBE_ALLOW_AUTOPLAY';
    const YOUTUBE_DISABLE_KEYBOARD_CONTROL  = 'ANPRODUCTVIDEOS_YOUTUBE_DISABLE_KEYBOARD_CONTROL';
    const YOUTUBE_FULL_SCREEN               = 'ANPRODUCTVIDEOS_YOUTUBE_FULL_SCREEN';
    const YOUTUBE_VIDEO_ANNOTATION          = 'ANPRODUCTVIDEOS_YOUTUBE_VIDEO_ANNOTATION';
    const YOUTUBE_INFO                      = 'ANPRODUCTVIDEOS_YOUTUBE_INFO';

    //Vimeo configuration
    const VIMEO_ALLOW_AUTOPLAY              = 'ANPRODUCTVIDEOS_VIMEO_ALLOW_AUTOPLAY';
    const VIMEO_BYLINE                      = 'ANPRODUCTVIDEOS_VIMEO_BYLINE';
    const VIMEO_LOOP                        = 'ANPRODUCTVIDEOS_VIMEO_LOOP';
    const VIMEO_TITLE                       = 'ANPRODUCTVIDEOS_VIMEO_TITLE';

    //Custom video player configuration
    const CUSTOM_PRELOAD                    = 'ANPRODUCTVIDEOS_CUSTOM_PRELOAD';
    const CUSTOM_AUTOPLAY                   = 'ANPRODUCTVIDEOS_CUSTOM_AUTOPLAY';
    const CUSTOM_LOOP                       = 'ANPRODUCTVIDEOS_CUSTOM_LOOP';

    const CONTROLLER_NAME                   = 'AdminAnProductVideos';

    public function __construct()
    {
        $this->name = 'anproductvideos';
        $this->tab = 'front_office_features';
        $this->version = '1.0.5';
        $this->versionPresta = (version_compare(_PS_VERSION_, '1.7.0.0', '<') ? '1.6' : '1.7');
        $this->author = 'anvanto';
        $this->need_instance = 1;
        $this->default_language = Language::getLanguage(Configuration::get('PS_LANG_DEFAULT'));
        $this->languages = Language::getLanguages();
        $this->bootstrap = true;
        $this->module_key = '1b4b87cb44f78c6aea55ef46637ed96e';

        parent::__construct();
        
        $this->views_prefix_admin = 'views/templates/admin/'.$this->versionPresta.'/';
        $this->views_prefix_hook = 'views/templates/hook/'.$this->versionPresta.'/';
        $this->views_path_admin = $this->local_path.$this->views_prefix_admin;
        $this->views_path_hook = $this->local_path.$this->views_prefix_hook;

        $this->displayName = $this->l('AN Product Videos');
        $this->description = $this->l('Add a video to the product page with AN Product Video. Help a user to learn a product more quickly and in more involving way');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall the module?');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

        $this->media_path = $this->local_path.'media';

        $this->messages = array(
            'update_order' => array(
                'success' => $this->l('The order has been updated successfully')
            ),
            'update' => array(
                'success' => $this->l('The video has been updated successfully')
            ),
            'delete' => array(
                'success' => $this->l('The video has been deleted successfully'),
                'assurance' => $this->l('Are you sure?')
            ),
            'add' => array(
                'success' => $this->l('The video has been added successfully'),
            ),
            'std' => array(
                'success' => $this->l('Process was completed successfully'),
                'error' => $this->l('An error occurred')
            ),
        );

        $this->context->smarty->assign(array(
            $this->name.'_msg' => Tools::jsonEncode($this->messages),
            'apv_configuration' => $this->getConfigFormValues(),
        ));
    }

    protected function registerController()
    {
        $tab = new Tab();
        $tab->active = true;
            
        foreach ((array)Language::getLanguages(1, 0, 1) as $lang) {
            $tab->name[$lang] = 'anproductvideos';
        }

        $tab->class_name = self::CONTROLLER_NAME;
        $tab->module = $this->name;
        $tab->id_parent = -1;

        return (bool)$tab->add();
    }

    protected function unregisterController()
    {
        if ($_tab = (int)Tab::getIdFromClassName(self::CONTROLLER_NAME)) {
            $tab = new Tab($_tab);
            return $tab->delete();
        }

        return true;
    }

    public function install()
    {
        if (file_exists($this->local_path.'sql/install.php')) {
            include($this->local_path.'sql/install.php');
        } else {
            return false;
        } 

        foreach ($this->getDefaults() as $field => $value) {
            Configuration::updateValue($field, $value);
        }

        return parent::install()
            && $this->registerHook('header')
            && ($this->versionPresta == '1.6' ?
                $this->registerHook('displayFooterProduct') :
                $this->registerHook('displayProductExtraContent'))
            && $this->registerHook('actionAdminControllerSetMedia')
            && $this->registerHook('actionProductUpdate')
            && $this->registerHook('displayAdminProductsExtra')
            && $this->registerHook('backOfficeHeader')
            && $this->registerController();
    }

    protected function getDefaults()
    {
        return array(
            self::VIEW_TYPE => self::VIEW_TYPE_LIST,

            self::YOUTUBE_ALLOW_CONTROLS => 1,
            self::YOUTUBE_ALLOW_AUTOPLAY => 0,
            self::YOUTUBE_DISABLE_KEYBOARD_CONTROL => 1,
            self::YOUTUBE_FULL_SCREEN => 1,
            self::YOUTUBE_VIDEO_ANNOTATION => 1,
            self::YOUTUBE_INFO => 1,

            self::VIMEO_ALLOW_AUTOPLAY => 0,
            self::VIMEO_BYLINE => 0,
            self::VIMEO_LOOP => 0,
            self::VIMEO_TITLE => 1,

            self::CUSTOM_PRELOAD => 0,
            self::CUSTOM_AUTOPLAY => 0,
            self::CUSTOM_LOOP => 0
        );
    }

    public function uninstall()
    {
        if (file_exists($this->local_path.'sql/uninstall.php')) {
            include($this->local_path.'sql/uninstall.php');
        } else {
            return false;
        }

        return parent::uninstall()
            && $this->unregisterController()
            && $this->unregisterHook('header')
            && ($this->versionPresta == '1.6' ?
                $this->unregisterHook('displayFooterProduct') :
                $this->unregisterHook('displayProductExtraContent'))
            && $this->unregisterHook('actionAdminControllerSetMedia')
            && $this->unregisterHook('actionProductUpdate')
            && $this->unregisterHook('displayAdminProductsExtra')
            && $this->unregisterHook('backOfficeHeader');
    }

    public function getContent()
    {
        if (Tools::isSubmit('submitAnproductvideosModule')) {
            $this->postProcess();
        }

        return $this->renderForm();
    }

    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitAnproductvideosModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm($this->getConfigForm());
    }

    protected function getConfigForm()
    {
        return array(
            $this->getConfigFormCommon(),
            $this->getConfigFormYoutube(),
            $this->getConfigFormVimeo(),
//            $this->getConfigFormCustom()
        );
    }

    protected function getConfigFormCommon()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Common settings'),
                    'icon' => 'icon-cogs',
                ),
                
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->l('View type'),
                        'name' => self::VIEW_TYPE,
                        'is_bool' => true,
                        'hint' => $this->l('View type'),
                        'options' => array(
                            'query' => array_map(function ($i) {
                                return array('value' => $i, "name" => $i);
                            }, $this->getViewTypes()),
                            'id' => 'value',
                            'name' => 'name'
                        ),
                    ),
                ),
                
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            )
        );
    }

    protected function getConfigFormYoutube()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Youtube settings'),
                    'icon' => 'icon-youtube',
                ),
                
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Allow controls'),
                        'name' => self::YOUTUBE_ALLOW_CONTROLS,
                        'is_bool' => true,
                        'hint' => $this->l('Youtube controls setting'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Allow autoplay'),
                        'name' => self::YOUTUBE_ALLOW_AUTOPLAY,
                        'is_bool' => true,
                        'hint' => $this->l('Youtube autoplay setting'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Disable keyboard control'),
                        'name' => self::YOUTUBE_DISABLE_KEYBOARD_CONTROL,
                        'is_bool' => true,
                        'hint' => $this->l('Youtube disable keyboard control'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Full screen'),
                        'name' => self::YOUTUBE_FULL_SCREEN,
                        'is_bool' => true,
                        'hint' => $this->l('Youtube allow fullscreen mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Video annotation'),
                        'name' => self::YOUTUBE_VIDEO_ANNOTATION,
                        'is_bool' => true,
                        'hint' => $this->l('Youtube show video annotation'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Info'),
                        'name' => self::YOUTUBE_INFO,
                        'is_bool' => true,
                        'hint' => $this->l('Youtube info'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),

                'submit' => array(
                    'title' => $this->l('Save'),
                )
            )
        );
    }

    protected function getConfigFormVimeo()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Vimeo settings'),
                    'icon' => 'icon-vimeo',
                ),
                
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Allow autoplay'),
                        'name' => self::VIMEO_ALLOW_AUTOPLAY,
                        'is_bool' => true,
                        'hint' => $this->l('Vimeo allow autoplay'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Byline'),
                        'name' => self::VIMEO_BYLINE,
                        'is_bool' => true,
                        'hint' => $this->l('Vimeo byline setting'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Loop'),
                        'name' => self::VIMEO_LOOP,
                        'is_bool' => true,
                        'hint' => $this->l('Vimeo loop setting'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Title'),
                        'name' => self::VIMEO_TITLE,
                        'is_bool' => true,
                        'hint' => $this->l('Vimeo show video title'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),

                'submit' => array(
                    'title' => $this->l('Save'),
                )
            )
        );
    }

    protected function getConfigFormCustom()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Custom player settings'),
                    'icon' => 'icon-play',
                ),
                
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Preload'),
                        'name' => self::CUSTOM_PRELOAD,
                        'is_bool' => true,
                        'hint' => $this->l('Preload video in custom video player'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Autoplay'),
                        'name' => self::CUSTOM_AUTOPLAY,
                        'is_bool' => true,
                        'hint' => $this->l('Custom video player autoplay setting'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Loop'),
                        'name' => self::CUSTOM_LOOP,
                        'is_bool' => true,
                        'hint' => $this->l('Custom video player loop setting'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),

                'submit' => array(
                    'title' => $this->l('Save'),
                )
            )
        );
    }

    protected function getConfigFormValues()
    {
        return array_merge(
            $this->getConfigFormValuesPartial($this->getConfigFormCommonFields()),
            $this->getConfigFormValuesPartial($this->getConfigFormYoutubeFields()),
            $this->getConfigFormValuesPartial($this->getConfigFormVimeoFields()),
            $this->getConfigFormValuesPartial($this->getConfigFormCustomFields())
        );
    }

    protected function getConfigFormValuesPartial($fields)
    {
        $config = array();
        
        foreach ($fields as $field) {
            $config[$field] = $field !== self::VIEW_TYPE ? (int)Configuration::get($field) : (string)Configuration::get($field);
        }

        return $config;
    }

    protected function getViewTypes()
    {
        return array(
            self::VIEW_TYPE_GRID,
            self::VIEW_TYPE_LIST,
            self::VIEW_TYPE_LONG
        );
    }

    protected function getConfigFormCommonFields()
    {
        return array(
            self::VIEW_TYPE
        );
    }

    protected function getConfigFormYoutubeFields()
    {
        return array(
            self::YOUTUBE_ALLOW_CONTROLS,
            self::YOUTUBE_ALLOW_AUTOPLAY,
            self::YOUTUBE_DISABLE_KEYBOARD_CONTROL,
            self::YOUTUBE_FULL_SCREEN,
            self::YOUTUBE_VIDEO_ANNOTATION,
            self::YOUTUBE_INFO
        );
    }

    protected function getConfigFormVimeoFields()
    {
        return array(
            self::VIMEO_ALLOW_AUTOPLAY,
            self::VIMEO_BYLINE,
            self::VIMEO_LOOP,
            self::VIMEO_TITLE
        );
    }

    protected function getConfigFormCustomFields()
    {
        return array(
            self::CUSTOM_PRELOAD,
            self::CUSTOM_AUTOPLAY,
            self::CUSTOM_LOOP
        );
    }

    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }

        return Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules').'&conf=4&configure='.$this->name.'&tab_module='.$this->tab_module.'&module_name='.$this->name);
    }

    protected function renderAddForm()
    {
        $this->context->smarty->assign(array(
            'languages' => $this->context->controller->getLanguages()
        ));

        return $this->display(__FILE__, $this->views_prefix_admin.'product_tab_add_form.tpl');
    }

    public function hookBackOfficeHeader()
    {
        if (Dispatcher::getInstance()->getController() == 'AdminProducts') {
            $this->context->controller->addCSS($this->_path.'views/css/video-js.css');
            $this->context->controller->addJS($this->_path.'views/js/external/videojs-ie8.min.js');
            $this->context->controller->addJS($this->_path.'views/js/external/video.js');
            $this->context->controller->addJS($this->_path.'views/js/video.js');
            $this->context->controller->addJS($this->_path.'views/js/video_collection.js');
            $this->context->controller->addCSS($this->_path.'views/css/back.css');

            $this->context->controller->addJquery();
            $this->context->controller->addJqueryPlugin('fancybox');
            $this->context->controller->addJqueryUI('ui.sortable');
            $this->context->controller->addJS($this->_path.'views/js/back.js');
        }
    }

    public function hookHeader()
    {
        if ($this->context->controller instanceof ProductController) {
            if ($this->versionPresta == '1.6') {
                $this->context->controller->addCSS($this->_path . 'views/css/video-js.css');
                $this->context->controller->addJS($this->_path.'/views/js/external/videojs-ie8.min.js');
                $this->context->controller->addJS($this->_path.'/views/js/external/video.js');
                $this->context->controller->addJS($this->_path . '/views/js/front.js');
                $this->context->controller->addCSS($this->_path . '/views/css/front.css');
            } else {
                $this->context->controller->registerStylesheet("vjs-css", "modules/{$this->name}/views/css/video-js.css", array('priority' => 1));
                $this->context->controller->registerStylesheet("modules-anproductvideos-fecss", "modules/{$this->name}/views/css/front.css", array('priority' => 150));
                $this->context->controller->registerJavascript("vjs-iefix", "/modules/{$this->name}/views/js/external/videojs-ie8.min.js", array('position' => 'head', 'server' => 'remote', 'priority' => 1));
                $this->context->controller->registerJavascript("vjs", "/modules/{$this->name}/views/js/external/video.js", array('position' => 'head', 'server' => 'remote', 'priority' => 2));
                $this->context->controller->registerJavascript("modules-anproductvideos-fejs", "modules/{$this->name}/views/js/front.js", array('priority' => 200));
            }
        }
    }

    public function hookDisplayProductTab()
    {
        return $this->display(__FILE__, $this->views_prefix_hook.'product_tab_header.tpl');
    }

    public function hookDisplayProductTabContent($params = null)
    {
        return $this->hookProductFooter($params);
    }

    public function hookDisplayProductExtraContent($params = null)
    {
        list($id_product, $id_shop) = $this->getProductData($params);
        $videos = VideoCollection::getInstance(true, $this->context->language->id)->get($id_product, $id_shop);
        $lang_detected = false;

        foreach ($videos as $video) {
            if ($video->id_lang == $this->context->language->id) {
                $lang_detected = true;
            }
        }

        if ($videos->count() > 0) {
            $tabs = array(
                new PrestaShop\PrestaShop\Core\Product\ProductExtraContent()
            );

            if ($lang_detected) {
                $tabs[0]->setTitle($videos->count() > 1 ? $this->l('Videos') : $this->l('Video'))->setContent($this->displayVideos($params, $videos));
            }

            return $tabs;
        }

        return array();
    }

    public function hookProductFooter($params = null)
    {
        return $this->displayVideos($params);
    }

    protected function displayVideos($params, VideoCollection $videos = null)
    {
        $configuration = $this->getConfigFormValues();
        $view_type = in_array($configuration[self::VIEW_TYPE], $this->getViewTypes()) ? $configuration[self::VIEW_TYPE] : self::DEFAULT_VIEW_TYPE;

        list($id_product, $id_shop) = $this->getProductData($params);
        $videos = $videos === null || $videos->count() == 0 ? VideoCollection::getInstance(true, $this->context->language->id)->get($id_product, $id_shop) : $videos;

        if (Tools::file_exists_cache($this->views_path_hook.'view_type_'.$view_type.'.tpl')) {
            $this->context->smarty->assign(array(
                'id_lang' => $this->context->language->id,
                'id_shop' => $id_shop,
                'id_product' => $id_product,
                'videos' => array(
                    $this->context->language->id => $this->getVideoViewPartial($videos, 'video_part', 'hook')
                )
            ));

             return $this->display(__FILE__, $this->views_prefix_hook.'view_type_'.$view_type.'.tpl');
        }
    }

    public function hookDisplayAdminProductsExtra($params = null)
    {
        list($id_product, $id_shop) = $this->getProductData($params);
        $videos = array();

        foreach (Language::getLanguages(1, 0, 1) as $id_lang) {
            $collection = new VideoCollection((int)$id_lang);
            $videos[$id_lang] = $this->getVideoViewPartial($collection->get($id_product, $id_shop), 'product_tab_edit_form', 'admin', $id_lang);
        }

        if (Validate::isLoadedObject(new Product($id_product))) {
            $this->context->smarty->assign(array(
                'addform' => $this->renderAddForm(),
                'videos' => $videos,
                'id_lang' => $this->context->language->id,
                'id_shop' => $id_shop,
                'id_product' => $id_product,
                'languages' => Language::getLanguages(1, 0, 0),
                'default_language' => Language::getLanguage(Configuration::get('PS_LANG_DEFAULT')),
                'theme_url' => $this->context->link->getAdminLink(self::CONTROLLER_NAME),
                'tinymce_content_format' => Tools::jsonEncode(array('format' => 'raw'))
            ));

            return $this->display(__FILE__, $this->views_prefix_admin.'product_tab.tpl');
        } else {
            return $this->displayError($this->l('You must save this product before managing videos.'));
        }
    }

    public function getProductData($params = null)
    {
        return array(
            isset($params['id_product']) ? (int)$params['id_product'] : (int)Tools::getValue('id_product'),
            (int)Context::getContext()->shop->id
        );
    }

    protected function getVideoViewPartial($videos, $template, $type = 'admin', $id_lang = null)
    {
        if (!in_array($type, array('admin', 'hook'))) {
            $type = 'admin';
        }
        
        $views_prefix = $type == 'admin' ? $this->views_prefix_admin : $this->views_prefix_hook;
        $views_path = $type == 'admin' ? $this->views_path_admin : $this->views_path_hook;

        $view_parts = array();

        if (Tools::file_exists_cache($views_path.$template.'.tpl')) {
            foreach ($videos as $video) {
                $id_lang = $id_lang === null ? (int)$video->id_lang : (int)$id_lang;
                $this->context->smarty->assign(array(
                    'id' => $video->id,
                    'id_lang' => $id_lang,
                    'id_product' => $video->id_product,
                    'id_shop' => $video->id_shop,
                    'video' => $video->video,
                    'type' => $video->type,
                    'cover' => $video->cover,
                    'title' => $video->title,
                    'description' => $video->description,
                    'sort_order' => $video->sort_order[$id_lang],
                    'format' => $video->format,
                    'languages' => array_combine(array_column($this->languages,'id_lang'),$this->languages)
                ));

                $view_parts[] = $this->display(__FILE__, $views_prefix.$template.'.tpl');
            }
        }

        return $view_parts;
    }
}
