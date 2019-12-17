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

var VideoCollection = function() {
	var self = this;
	this.videos = new Array();

	this.update_order = function(callback) {
		var video_order = {};
		var id_lang = 0;

		self.videos.map(function (video) {
			video_order[video.id] = video.sort_order;
			id_lang = video.id_lang;
		});

		jQuery.post(anproductvideos_controller_url, {
			action: 'updateOrder',
			order:  video_order,
			id_lang: id_lang
		}).then(callback);

		return self;
	};

	this.push = function(video) {
		if (video instanceof Video) return self.videos.push(video);
		return self.videos.length;
	};

	this.each = function(callable) {
		if (!(callable instanceof Function)) return false;
		for (var i = 0; i < self.videos.length; i++) {
			self.videos[i] = callable(self.videos[i]);
		}

		return (callable instanceof Function) ? callable() : self;
	};

	this.update = function (callable) {
		for (var i = 0; i < self.videos.length; i++) {
			if (self.videos[i].video.length!=0) {
				self.videos[i].update();
			}
		}

		return (callable instanceof Function) ? callable() : self;
	};

	this.change_sorting = function (old_index, new_index) {
		var old_index_sort_oder = self.videos[old_index].sort_order || 0
		self.videos[old_index].sort_order = self.videos[new_index].sort_order || 0;
		self.videos[new_index].sort_order = old_index_sort_oder;

		return self;
	};
}