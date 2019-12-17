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

class AdminAnProductVideosController extends ModuleAdminController
{
    public function ajaxProcessUpdate()
    {
        $response = false;
        $template = false;
        $values = $this->getVideoFromPost();
        
        if ($values['id'] != 0) {
            $video = VideoCollection::getInstance(true)->getById($values['id'])->getFirst();
        } else {
            $video = new Video();
        }

        if ($video !== false) {
            $video->id_product = $values['id_product'];
            $video->id_shop = $values['id_shop'];
            $video->setVideo($values['video']);
            $video->cover = $values['cover'];

            foreach ((array)$values['title'] as $id_lang => $title) {
                $video->title[(int)$id_lang] = $title;
            }

            foreach ((array)$values['description'] as $id_lang => $description) {
                $video->description[(int)$id_lang] = $description;
            }

            $video->sort_order[(int)$values['id_lang']] = (int)$values['sort_order'];
            $response = (bool)$video->save();

            $languages = Language::getLanguages(true, false, true);
            foreach ($languages as $language) {
                $this->context->smarty->assign(array(
                    'id' => $video->id,
                    'id_lang' => $language,
                    'id_product' => $video->id_product,
                    'id_shop' => $video->id_shop,
                    'video' => $video->video,
                    'type' => $video->type,
                    'cover' => $video->cover,
                    'title' => $video->title[$language],
                    'description' => $video->description[$language],
                    'sort_order' => $video->sort_order[$language],
                    'format' => $video->format
                ));
                $template[$language] = $this->context->smarty->fetch($this->module->views_path_admin . 'product_tab_edit_form.tpl');
            }

        }

        $this->setJsonResponse(array(
            'success' => $response,
            'template' => json_encode($template)
        ));
    }

    public function ajaxProcessDelete()
    {
        $video = new Video((int)(Tools::getValue('id')));

        $this->setJsonResponse(array(
            'success' => (bool)$video->delete()
        ));
    }

    public function ajaxProcessUpdateOrder()
    {
        $video_order = (array)Tools::getValue('order');
        $id_lang = (int)Tools::getValue('id_lang', 0);
        $collection = new VideoCollection();
        $response = true;

        foreach ($collection->getById(array_keys($video_order)) as $video) {
            foreach ($video_order as $id => $_sort_order) {
                if ($video->id == $id) {
                    $video->sort_order[$id_lang] = $_sort_order;

                    if ($video->save() === false) {
                        $response = false;
                    }
                }
            }
        }

        return $this->setJsonResponse(array(
            'success' => $response
        ));
    }

    protected function setJsonResponse($data)
    {
        header("Content-Type: application/json; charset=utf8");
        die(Tools::jsonEncode($data));
    }

    protected function getVideoFromPost()
    {
        return array(
            'id' => (int)Tools::getValue('id', null),
            'id_product' => (int)Tools::getValue('id_product', null),
            'id_shop' => (int)Tools::getValue('id_shop', null),
            'id_lang' => (int)Tools::getValue('id_lang', null),
            'video' => Tools::getValue('video', null),
            'type' => Tools::getValue('type', null),
            'cover' => Tools::getValue('cover', null),
            'title' => Tools::getValue('title', null),
            'description' => Tools::getValue('description', null),
            'sort_order' => Tools::getValue('sort_order', null),
        );
    }
}
