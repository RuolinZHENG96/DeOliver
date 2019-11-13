<?php
/**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

$query = "DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides` (
  `id_slide` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_suffix` varchar(100) NOT NULL,
  `bg_type` int(10) NOT NULL DEFAULT '1',
  `bg_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bg_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '#FFF',
  `slide_link` varchar(100) NOT NULL,
  `order` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_slide`)
) ENGINE=_MYSQL_ENGINE_ AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jms_slides` (`id_slide`, `title`, `class_suffix`, `bg_type`, `bg_image`, `bg_color`, `slide_link`, `order`, `status`) VALUES
(7, 'Home 1 - Slider 1', '', 1, 'e4e88556da75cfa11e1a76670ecc351f.jpg', '', '', 0, 1),
(21, 'Home 1 - Slider 2', '', 1, 'a676cfbdcf7d965f89414a03a703ad2c.jpg', '', '', 3, 1),
(22, 'Home 2 - Slider 1 ', '', 1, 'a676cfbdcf7d965f89414a03a703ad2c.jpg', '', '', 2, 1),
(23, 'Home 1 - Slider 2- (Copy)', '', 1, 'a676cfbdcf7d965f89414a03a703ad2c.jpg', '', '', 1, 1);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides_lang`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides_lang` (
  `id_slide` int(10) NOT NULL AUTO_INCREMENT,
  `id_lang` int(10) NOT NULL,
  PRIMARY KEY (`id_slide`,`id_lang`)
) ENGINE=_MYSQL_ENGINE_ AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jms_slides_lang` (`id_slide`, `id_lang`) VALUES
(7, 0),
(21, 0),
(22, 0),
(23, 0);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides_layers`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides_layers` (
  `id_layer` int(10) NOT NULL AUTO_INCREMENT,
  `id_slide` int(10) NOT NULL,
  `data_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_class_suffix` varchar(50) NOT NULL,
  `data_fixed` int(10) NOT NULL DEFAULT '0',
  `data_delay` int(10) NOT NULL DEFAULT '1000',
  `data_time` int(10) NOT NULL DEFAULT '1000',
  `data_x` int(10) NOT NULL DEFAULT '0',
  `data_y` int(10) NOT NULL DEFAULT '0',
  `data_in` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'left',
  `data_out` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'right',
  `data_ease_in` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'linear',
  `data_ease_out` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'linear',
  `data_step` int(10) NOT NULL DEFAULT '0',
  `data_special` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'cycle',
  `data_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_html` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_video` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_video_controls` int(10) NOT NULL DEFAULT '1',
  `data_video_muted` int(10) NOT NULL DEFAULT '0',
  `data_video_autoplay` int(10) NOT NULL DEFAULT '1',
  `data_video_loop` int(10) NOT NULL DEFAULT '1',
  `data_video_bg` int(10) NOT NULL DEFAULT '0',
  `data_font_size` int(10) NOT NULL DEFAULT '14',
  `data_line_height` int(10) NOT NULL,
  `data_style` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'normal',
  `data_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '#FFFFFF',
  `data_width` int(10) NOT NULL,
  `data_height` int(10) NOT NULL,
  `data_order` int(10) NOT NULL,
  `data_status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_layer`,`id_slide`)
) ENGINE=_MYSQL_ENGINE_ AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jms_slides_layers` (`id_layer`, `id_slide`, `data_title`, `data_class_suffix`, `data_fixed`, `data_delay`, `data_time`, `data_x`, `data_y`, `data_in`, `data_out`, `data_ease_in`, `data_ease_out`, `data_step`, `data_special`, `data_type`, `data_image`, `data_html`, `data_video`, `data_video_controls`, `data_video_muted`, `data_video_autoplay`, `data_video_loop`, `data_video_bg`, `data_font_size`, `data_line_height`, `data_style`, `data_color`, `data_width`, `data_height`, `data_order`, `data_status`) VALUES
(62, 7, 'organic store', '', 0, 1000, 1700, 450, 343, 'right', 'right', 'linear', 'linear', 0, '', 'text', '', '<span class=\"text-large\">organic store</span>', '', 0, 0, 0, 0, 0, 60, 78, 'normal', '#ffffff', 200, 50, 0, 1),
(63, 7, 'World\'s finest luxury natural and organic hair care productstreatments and  styling all in one onlin', '', 0, 1500, 2200, 434, 429, 'right', 'right', 'linear', 'linear', 0, '', 'text', '', '<span class=\"text-small center\">World\'s finest luxury natural and organic hair care productstreatments and<br /> styling all in one online store in Australia.</span>', '', 0, 0, 0, 0, 0, 16, 45, 'normal', '#ffffff', 200, 50, 0, 1),
(64, 7, 'shopnow', '', 0, 2200, 2700, 638, 517, 'right', 'left', 'linear', 'linear', 0, '', 'text', '', '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn\">Shop Now\r\n</a>\r\n', '', 0, 0, 0, 0, 0, 14, 26, 'normal', '#ffffff', 67, 19, 0, 1),
(87, 21, 'organic skin', '', 0, 1000, 1700, 450, 343, 'right', 'right', 'linear', 'linear', 0, '', 'text', '', '<span class=\"text-large\">organic skin</span>', '', 0, 0, 0, 0, 0, 60, 78, 'normal', '#ffffff', 200, 50, 0, 1),
(88, 21, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 434, 429, 'bottom', 'bottom', 'linear', 'linear', 0, '', 'text', '', '<span class=\"text-small center\">Organic Skin Care offers effective and professional natural, organic and <br />\r\nBiodynamic skin care products to leading worldwide.</span>', '', 0, 0, 0, 0, 0, 16, 45, 'normal', '#ffffff', 200, 50, 0, 1),
(89, 21, 'shopnow', '', 0, 2200, 2700, 638, 517, 'bottom', 'bottom', 'linear', 'linear', 0, '', 'text', '', '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn\">Shop Now\r\n</a>\r\n\r\n', '', 0, 0, 0, 0, 0, 15, 26, 'normal', '#111111', 67, 19, 0, 1),
(91, 22, 'organic hair', '', 0, 200, 700, 450, 343, 'bottomRight', 'bottomRight', 'linear', 'linear', 0, '', 'text', '', '<span class=\"text-large\">organic hair</span>', '', 0, 0, 0, 0, 0, 60, 78, 'normal', '#ffffff', 200, 50, 0, 1),
(92, 22, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 500, 1200, 434, 429, 'top', 'top', 'linear', 'linear', 0, '', 'text', '', '<span class=\"text-small center\">Want good hair care products without the icky ingredients. Look no further <br />\r\nthan these finds from natural and organic brands.</span>', '', 0, 0, 0, 0, 0, 16, 45, 'normal', '#ffffff', 200, 50, 0, 1),
(93, 22, 'shopnow', '', 0, 1000, 1700, 638, 517, 'right', 'left', 'linear', 'linear', 0, '', 'text', '', '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn\">Shop Now\r\n</a>\r\n', '', 0, 0, 0, 0, 0, 15, 26, 'normal', '#111111', 67, 19, 0, 1),
(113, 7, 'img', '', 0, 200, 900, 1089, 143, 'fade', 'fade', 'linear', 'linear', 0, '', 'image', 'organie11.png', '', '', 0, 0, 0, 0, 0, 14, 0, 'normal', '#FFFFFF', 402, 677, 0, 1),
(114, 21, 'img', '', 0, 200, 700, 1000, 277, 'left', 'right', 'linear', 'linear', 0, '', 'image', 'img2.png', '', '', 0, 0, 0, 0, 0, 14, 0, 'normal', '#FFFFFF', 548, 365, 0, 1),
(115, 22, 'img3', '', 0, 200, 700, 1053, 175, 'bottomLeft', 'bottomLeft', 'linear', 'linear', 0, '', 'image', 'img4.png', '', '', 0, 0, 0, 0, 0, 14, 0, 'normal', '#FFFFFF', 489, 634, 0, 1),
(116, 23, 'organic skin', '', 0, 0, 700, 319, 348, 'right', 'right', 'linear', 'linear', 0, '', 'text', '', '<span class=\"text-large\">organic beauty</span>', '', 0, 0, 0, 0, 0, 60, 78, 'normal', '#ffffff', 200, 50, 0, 1),
(117, 23, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 500, 1200, 333, 433, 'bottom', 'bottom', 'linear', 'linear', 0, '', 'text', '', '<span class=\"text-small center\">Want good hair care products without the icky ingredients. Look no further <br />\r\nthan these finds from natural and organic brands.</span>', '', 0, 0, 0, 0, 0, 16, 45, 'normal', '#ffffff', 200, 50, 0, 1),
(118, 23, 'shopnow', '', 0, 1000, 1700, 537, 517, 'bottom', 'bottom', 'linear', 'linear', 0, '', 'text', '', '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn\">Shop Now\r\n</a>\r\n\r\n', '', 0, 0, 0, 0, 0, 15, 26, 'normal', '#111111', 67, 19, 0, 1),
(120, 23, 'New Layer Image', '', 0, 0, 700, 1029, 196, 'bottomLeft', 'bottomLeft', 'linear', 'linear', 0, '', 'image', 'organie12.png', '', '', 0, 0, 0, 0, 0, 14, 0, 'normal', '#FFFFFF', 567, 524, 0, 1);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides_shop`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides_shop` (
  `id_slide` int(10) NOT NULL AUTO_INCREMENT,
  `id_shop` int(10) NOT NULL,
  PRIMARY KEY (`id_slide`,`id_shop`)
) ENGINE=_MYSQL_ENGINE_ AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jms_slides_shop` (`id_slide`, `id_shop`) VALUES
(7, 1),
(21, 1),
(22, 1),
(23, 1);
";
