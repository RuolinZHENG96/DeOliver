{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
	<div id="js-product-list-top" class="filters-panel">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-5 col-xs-6 view-mode left clearfix inclue_left_sort">
				   <span class="text-mode"> {l s='View mode :' d='Shop.Theme.Catalog'}</span><a class="view-grid active" href="#">
					</a> 
					<a class="view-list" href="#">
					</a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-7 col-xs-6 right include_right_sort">
			
					{block name='sort_by'}
					{include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
				{/block}
			
			</div>
		</div>
	</div>
