<?php
/**
* 2007-2017 PrestaShop
*
* Jms Mega Menu module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

$query = "DROP TABLE IF EXISTS `_DB_PREFIX_jmsmegamenu`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jmsmegamenu` (
  `mitem_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(30) NOT NULL,
  `value` varchar(255) NOT NULL,
  `html_content` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `target` varchar(25) NOT NULL,
  `params` text NOT NULL,
  `ordering` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`mitem_id`)
) ENGINE=_MYSQL_ENGINE_ AUTO_INCREMENT=379 DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jmsmegamenu` (`mitem_id`, `id_shop`, `parent_id`, `type`, `value`, `html_content`, `active`, `target`, `params`, `ordering`) VALUES
(1, 1, 0, 'link', '#', '', 1, '_self', '{\"align\":\"left\",\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"232\"},{\"item\":\"233\"},{\"item\":\"234\"}]}]]}}', 0),
(3, 1, 0, 'category', '3', '', 1, '_self', '{\"class\":\"\",\"align\":\"center\",\"sub\":{\"fullwidth\":\"1\",\"width\":\"612\",\"row\":[[{\"width\":\"4\",\"items\":[{\"item\":\"260\"},{\"item\":\"261\"},{\"item\":\"262\"},{\"item\":\"263\"},{\"item\":\"264\"}]},{\"width\":\"4\",\"items\":[{\"item\":\"266\"},{\"item\":\"267\"},{\"item\":\"268\"},{\"item\":\"269\"},{\"item\":\"270\"}]},{\"width\":\"4\",\"items\":[{\"item\":\"272\"},{\"item\":\"273\"},{\"item\":\"274\"},{\"item\":\"275\"},{\"item\":\"276\"}]}]]}}', 1),
(5, 1, 0, 'link', 'index.php?fc=module&module=jmsblog&controller=post&post_id=1', '', 1, '_self', '{\"class\":\"\",\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"287\"},{\"item\":\"294\"},{\"item\":\"298\"},{\"item\":\"305\"},{\"item\":\"306\"}]}]]}}', 2),
(6, 1, 0, 'category', '3', '', 1, '_self', '{\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"249\"},{\"item\":\"250\"},{\"item\":\"253\"},{\"item\":\"378\"},{\"item\":\"372\"},{\"item\":\"254\"},{\"item\":\"256\"},{\"item\":\"307\"},{\"item\":\"257\"},{\"item\":\"258\"}]}]]}}', 3),
(7, 1, 0, 'link', 'index.php?controller=contact', '', 1, '_self', '{}', 4),
(232, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=1&jpb_skin=default', '', 1, '_self', '{\"title\":\"1\"}', 1),
(233, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=2&jpb_skin=color2', '', 1, '_self', '{\"title\":\"1\"}', 2),
(234, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=3&jpb_skin=color3', '', 1, '_self', '{\"title\":\"1\"}', 3),
(249, 1, 6, 'cms', '6', '', 1, '_self', '{\"title\":\"1\"}', 1),
(250, 1, 6, 'category', '12', '', 1, '_self', '{\"title\":\"1\"}', 2),
(251, 1, 250, 'category', '12', '', 1, '_self', '', 1),
(252, 1, 250, 'product', '13', '', 1, '_self', '', 2),
(253, 1, 6, 'cms', '4', '', 1, '_self', '{\"title\":\"1\"}', 3),
(254, 1, 6, 'link', 'index.php?controller=new-products', '', 1, '_self', '{\"title\":\"1\"}', 4),
(256, 1, 6, 'link', 'index.php?controller=search&orderby=position&orderway=desc&search_query=fresh', '', 1, '_self', '{\"title\":\"1\"}', 5),
(257, 1, 6, 'link', 'index.php?controller=prices-drop', '', 1, '_self', '{\"title\":\"1\"}', 8),
(258, 1, 6, 'link', 'index.php?controller=404', '', 1, '_self', '{\"title\":\"1\"}', 9),
(260, 1, 3, 'category', '12', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 0),
(261, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 1),
(262, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 2),
(263, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 3),
(264, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 4),
(266, 1, 3, 'category', '13', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 5),
(267, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 6),
(268, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 7),
(269, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 8),
(270, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 9),
(272, 1, 3, 'category', '13', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 10),
(273, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 11),
(274, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 12),
(275, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 13),
(276, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 14),
(287, 1, 5, 'jmsblog-category', '1', '', 1, '_self', '{\"title\":\"1\"}', 1),
(294, 1, 5, 'jmsblog-singlepost', '1', '', 1, '_self', '{\"title\":\"1\"}', 2),
(298, 1, 5, 'jmsblog-categories', 'jmsblog_categories', '', 1, '_self', '{\"title\":\"1\"}', 3),
(305, 1, 5, 'jmsblog-tag', 'organic', '', 1, '_self', '{\"title\":\"1\"}', 4),
(306, 1, 5, 'jmsblog-archive', '2018', '', 1, '_self', '{\"title\":\"1\"}', 5),
(307, 1, 6, 'link', 'index.php?controller=best-sales', '', 1, '_self', '{\"title\":\"1\"}', 10),
(372, 1, 6, 'link', 'index.php?controller=stores', '', 1, '_self', '{\"title\":\"1\"}', 11),
(378, 1, 6, 'link', 'index.php?controller=sitemap', '', 1, '_self', '{\"title\":\"1\"}', 12);

DROP TABLE IF EXISTS `_DB_PREFIX_jmsmegamenu_lang`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jmsmegamenu_lang` (
  `mitem_id` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menulink` varchar(255) NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jmsmegamenu_lang` (`mitem_id`, `id_lang`, `name`, `menulink`) VALUES
(1, 1, 'Home', '#'),
(1, 5, 'Home', '#'),
(1, 6, 'Home', ''),
(1, 7, 'Home', ''),
(3, 1, 'Shop', ''),
(3, 5, 'Shop', ''),
(3, 6, 'Latest', ''),
(3, 7, 'Latest', ''),
(5, 1, 'Blog', 'index.php?fc=module&module=jmsblog&controller=post&post_id=1'),
(5, 5, 'Blog', 'index.php?fc=module&module=jmsblog&controller=post&post_id=1'),
(5, 6, 'Blog', ''),
(5, 7, 'Blog', ''),
(6, 1, 'Pages', ''),
(6, 5, 'Pages', ''),
(6, 6, 'Pages', ''),
(6, 7, 'Pages', ''),
(7, 1, 'Contact', 'index.php?controller=contact'),
(7, 5, 'Contact', 'index.php?controller=contact'),
(7, 6, 'Contact', ''),
(7, 7, 'Contact', ''),
(1, 2, 'Home', '#'),
(3, 2, 'Shop', ''),
(5, 2, 'Blog', 'index.php?fc=module&module=jmsblog&controller=post&post_id=1'),
(6, 2, 'Pages', ''),
(7, 2, 'Contact', 'index.php?controller=contact'),
(1, 3, 'Home', '#'),
(3, 3, 'Shop', ''),
(5, 3, 'Blog', 'index.php?fc=module&module=jmsblog&controller=post&post_id=1'),
(6, 3, 'Pages', ''),
(7, 3, 'Contact', 'index.php?controller=contact'),
(1, 8, 'Home', ''),
(3, 8, 'Features', ''),
(5, 8, 'Blog', ''),
(6, 8, 'Pages', ''),
(7, 8, 'Contact', ''),
(1, 10, 'Home', ''),
(3, 10, 'Features', ''),
(5, 10, 'Blog', ''),
(6, 10, 'Pages', ''),
(7, 10, 'Contact', ''),
(232, 1, 'Home 1 ', 'index.php?settingpanel=1&jpb_homepage=1&jpb_skin=default'),
(232, 2, 'Home 1 - Default', 'index.php?settingpanel=1&jpb_homepage=1&jpb_skin=default'),
(232, 3, 'Home 1 - Default', 'index.php?settingpanel=1&jpb_homepage=1&jpb_skin=default'),
(232, 5, 'Home 1 - Default', 'index.php?settingpanel=1&jpb_homepage=1&jpb_skin=default'),
(233, 1, 'Home 2 ', 'index.php?settingpanel=1&jpb_homepage=2&jpb_skin=color2'),
(233, 2, 'Home 2 - Modern', 'index.php?settingpanel=1&jpb_homepage=2&jpb_skin=color2'),
(233, 3, 'Home 2 - Modern', 'index.php?settingpanel=1&jpb_homepage=2&jpb_skin=color2'),
(233, 5, 'Home 2 - Modern', 'index.php?settingpanel=1&jpb_homepage=2&jpb_skin=color2'),
(234, 1, 'Home 3', 'index.php?settingpanel=1&jpb_homepage=3&jpb_skin=color3'),
(234, 2, 'Home 3 - Hero Slider', 'index.php?settingpanel=1&jpb_homepage=3&jpb_skin=color3'),
(234, 3, 'Home 3 - Hero Slider', 'index.php?settingpanel=1&jpb_homepage=3&jpb_skin=color3'),
(234, 5, 'Home 3 - Hero Slider', 'index.php?settingpanel=1&jpb_homepage=3&jpb_skin=color3'),
(249, 1, 'Typography', ''),
(249, 2, 'Typography', ''),
(249, 3, 'Typography', ''),
(249, 5, 'Typography', ''),
(250, 1, 'Product Pages', ''),
(250, 2, 'Product Pages', ''),
(250, 3, 'Product Pages', ''),
(250, 5, 'Product Pages', ''),
(251, 1, 'Product List', ''),
(251, 2, 'Product List', ''),
(251, 3, 'Product List', ''),
(251, 5, 'Product List', ''),
(252, 1, 'Product Details', ''),
(252, 2, 'Product Details', ''),
(252, 3, 'Product Details', ''),
(252, 5, 'Product Details', ''),
(253, 1, 'About Us', ''),
(253, 2, 'About Us', ''),
(253, 3, 'About Us', ''),
(253, 5, 'About Us', ''),
(254, 1, 'New Products', 'index.php?controller=new-products'),
(254, 2, 'New Products', 'index.php?controller=new-products'),
(254, 3, 'New Products', 'index.php?controller=new-products'),
(254, 5, 'New Products', 'index.php?controller=new-products'),
(256, 1, 'Search Page', 'index.php?controller=search&orderby=position&orderway=desc&search_query=fresh'),
(256, 2, 'Search Page', 'index.php?controller=search&orderby=position&orderway=desc&search_query=fresh'),
(256, 3, 'Search Page', 'index.php?controller=search&orderby=position&orderway=desc&search_query=fresh'),
(256, 5, 'Search Page', 'index.php?controller=search&orderby=position&orderway=desc&search_query=fresh'),
(257, 1, 'Prices drop', 'index.php?controller=prices-drop'),
(257, 2, 'Prices drop', 'index.php?controller=prices-drop'),
(257, 3, 'Prices drop', 'index.php?controller=prices-drop'),
(257, 5, 'Prices drop', 'index.php?controller=prices-drop'),
(258, 1, '404 Page', 'index.php?controller=404'),
(258, 2, '404 Page', 'index.php?controller=404'),
(258, 3, '404 Page', 'index.php?controller=404'),
(258, 5, '404 Page', 'index.php?controller=404'),
(260, 1, 'Organic Skin', ''),
(260, 2, 'Organic Skin', ''),
(260, 3, 'Organic Skin', ''),
(260, 5, 'Organic Skin', ''),
(261, 1, 'Suspend Tempor', '#'),
(261, 2, 'Suspend Tempor', '#'),
(261, 3, 'Suspend Tempor', '#'),
(261, 5, 'Suspend Tempor', '#'),
(262, 1, 'Vestibulum Quam', '#'),
(262, 2, 'Vestibulum Quam', '#'),
(262, 3, 'Vestibulum Quam', '#'),
(262, 5, 'Vestibulum Quam', '#'),
(263, 1, 'Dolor Elementum', '#'),
(263, 2, 'Dolor Elementum', '#'),
(263, 3, 'Dolor Elementum', '#'),
(263, 5, 'Dolor Elementum', '#'),
(264, 1, 'Aenean Auctor', '#'),
(264, 2, 'Aenean Auctor', '#'),
(264, 3, 'Aenean Auctor', '#'),
(264, 5, 'Aenean Auctor', '#'),
(266, 1, 'organic hair ', ''),
(266, 2, 'organic hair ', ''),
(266, 3, 'organic hair ', ''),
(266, 5, 'organic hair ', ''),
(267, 1, 'Blandit Viverra', '#'),
(267, 2, 'Blandit Viverra', '#'),
(267, 3, 'Blandit Viverra', '#'),
(267, 5, 'Blandit Viverra', '#'),
(268, 1, 'Porta Cursus', '#'),
(268, 2, 'Porta Cursus', '#'),
(268, 3, 'Porta Cursus', '#'),
(268, 5, 'Porta Cursus', '#'),
(269, 1, 'Praesent Enim', '#'),
(269, 2, 'Praesent Enim', '#'),
(269, 3, 'Praesent Enim', '#'),
(269, 5, 'Praesent Enim', '#'),
(270, 1, 'Nunc Aliquam', '#'),
(270, 2, 'Nunc Aliquam', '#'),
(270, 3, 'Nunc Aliquam', '#'),
(270, 5, 'Nunc Aliquam', '#'),
(272, 1, 'organic other', ''),
(272, 2, 'organic other', ''),
(272, 3, 'organic other', ''),
(272, 5, 'organic other', ''),
(273, 1, 'Varius Lobortis', '#'),
(273, 2, 'Varius Lobortis', '#'),
(273, 3, 'Varius Lobortis', '#'),
(273, 5, 'Varius Lobortis', '#'),
(274, 1, 'Diam Rhoncus', '#'),
(274, 2, 'Diam Rhoncus', '#'),
(274, 3, 'Diam Rhoncus', '#'),
(274, 5, 'Diam Rhoncus', '#'),
(275, 1, 'Congue Tellus', '#'),
(275, 2, 'Congue Tellus', '#'),
(275, 3, 'Congue Tellus', '#'),
(275, 5, 'Congue Tellus', '#'),
(276, 1, 'Malesua Fames', '#'),
(276, 2, 'Malesua Fames', '#'),
(276, 3, 'Malesua Fames', '#'),
(276, 5, 'Malesua Fames', '#'),
(287, 1, 'Blog Category', ''),
(287, 2, 'Blog Category', ''),
(287, 3, 'Blog Category', ''),
(287, 5, 'Blog Category', ''),
(294, 1, 'Blog Single Post', ''),
(294, 2, 'Blog Single Post', ''),
(294, 3, 'Blog Single Post', ''),
(294, 5, 'Blog Single Post', ''),
(298, 1, 'Blog Categories', ''),
(298, 2, 'Blog Categories', ''),
(298, 3, 'Blog Categories', ''),
(298, 5, 'Blog Categories', ''),
(305, 1, 'Blog Tags', ''),
(305, 2, 'Blog Tags', ''),
(305, 3, 'Blog Tags', ''),
(305, 5, 'Blog Tags', ''),
(306, 1, 'Blog Archives', ''),
(306, 2, 'Blog Archives', ''),
(306, 3, 'Blog Archives', ''),
(306, 5, 'Blog Archives', ''),
(307, 1, 'Best Sales', 'index.php?controller=best-sales'),
(307, 2, 'Best Sales', 'index.php?controller=best-sales'),
(307, 3, 'Best Sales', 'index.php?controller=best-sales'),
(307, 5, 'Best Sales', 'index.php?controller=best-sales'),
(260, 4, 'Organic Skin', ''),
(261, 4, 'Suspend Tempor', '#'),
(262, 4, 'Vestibulum Quam', '#'),
(263, 4, 'Dolor Elementum', '#'),
(264, 4, 'Aenean Auctor', '#'),
(266, 4, 'organic hair ', ''),
(267, 4, 'Blandit Viverra', '#'),
(268, 4, 'Porta Cursus', '#'),
(269, 4, 'Praesent Enim', '#'),
(270, 4, 'Nunc Aliquam', '#'),
(272, 4, 'organic other', ''),
(273, 4, 'Varius Lobortis', '#'),
(274, 4, 'Diam Rhoncus', '#'),
(275, 4, 'Congue Tellus', '#'),
(276, 4, 'Malesua Fames', '#'),
(252, 4, 'Product Details', ''),
(306, 4, 'Blog Archives', ''),
(232, 4, 'Home 1 ', 'index.php?settingpanel=1&jpb_homepage=1&jpb_skin=default'),
(233, 4, 'Home 2 ', 'index.php?settingpanel=1&jpb_homepage=2&jpb_skin=color2'),
(234, 4, 'Home 3', 'index.php?settingpanel=1&jpb_homepage=3&jpb_skin=color3'),
(249, 4, 'Typography', ''),
(256, 4, 'Search Page', 'index.php?controller=search&orderby=position&orderway=desc&search_query=fresh'),
(372, 1, 'Our Store', 'index.php?controller=stores'),
(372, 2, 'Our Store', 'index.php?controller=stores'),
(372, 3, 'Our Store', 'index.php?controller=stores'),
(372, 4, 'Our Store', 'index.php?controller=stores'),
(287, 4, 'Blog Category', ''),
(294, 4, 'Blog Single Post', ''),
(305, 4, 'Blog Tags', ''),
(372, 5, 'Our Store', 'index.php?controller=stores'),
(251, 4, 'Product List', ''),
(250, 4, 'Product Pages', ''),
(378, 1, 'Site map', 'index.php?controller=sitemap'),
(378, 2, 'Site map', 'index.php?controller=sitemap'),
(378, 3, 'Site map', 'index.php?controller=sitemap'),
(378, 4, 'Site map', 'index.php?controller=sitemap'),
(378, 5, 'Site map', 'index.php?controller=sitemap'),
(257, 4, 'Prices drop', 'index.php?controller=prices-drop'),
(258, 4, '404 Page', 'index.php?controller=404'),
(307, 4, 'Best Sales', 'index.php?controller=best-sales'),
(5, 4, 'Blog', 'index.php?fc=module&module=jmsblog&controller=post&post_id=1'),
(6, 4, 'Pages', ''),
(7, 4, 'Contact', 'index.php?controller=contact'),
(3, 4, 'Shop', ''),
(1, 4, 'Home', '#'),
(254, 4, 'New Products', 'index.php?controller=new-products');
";
