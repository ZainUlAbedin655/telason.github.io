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

var Video = function(id, id_product, id_shop, id_lang, video, type, cover, title, description, sort_order) {
	var self = this;

	this.id = id;
	this.id_product = id_product;
	this.id_shop = id_shop;
	this.id_lang = id_lang;
	this.video = video;
	this.type = type;
	this.cover = cover;
	this.title = title;
	this.description = description;
	this.sort_order = sort_order;
	this.data = null;

	this.update = function(callback) {
		jQuery.post(anproductvideos_controller_url, {
			action: 		'update',
			id: 			self.id,
			id_product: 	self.id_product,
			id_shop: 		self.id_shop,
			id_lang: 		self.id_lang,
			video: 			self.video,
			type: 			self.type,
			cover: 			self.cover,
			title: 			self.title,
			description: 	self.description,
			sort_order: 	self.sort_order,
		}).done(( data ) => {
			self.data = data;
            callback(self);
        });
		return self;
	};

	this.delete = function (callback) {
		jQuery.post(anproductvideos_controller_url, {
			action:   'delete',
			id: self.id
		}).then(callback);

		return self;
	};
}