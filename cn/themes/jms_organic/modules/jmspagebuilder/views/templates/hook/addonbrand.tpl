{*
* 2007-2016 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">    	
	var brand_items = 3,
	    brand_itemsDesktop = {if $items_show}{$items_show|escape:'htmlall':'UTF-8'}{else}5{/if},
	    brand_itemsDesktopSmall = {if $items_show_md}{$items_show_md|escape:'htmlall':'UTF-8'}{else}4{/if},
	    brand_itemsTablet = {if $items_show_sm}{$items_show_sm|escape:'htmlall':'UTF-8'}{else}3{/if},
	    brand_itemsMobile = {if $items_show_xs}{$items_show_xs|escape:'htmlall':'UTF-8'}{else}2{/if};
        var p_nav_brand = {if $navigation == 1}true{else}false{/if};
	    var p_pag_brand = {if $pagination == 1}true{else}false{/if};
        var auto_play_brand = {if $autoplay == 1}true{else}false{/if};		
</script>
{if $addon_title}
<div class="addon-title  slider-title">
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}
<div class="brand-carousel">
	{foreach from=$brands item=brand}
	{if $brand.url != "home_6"}
		<div class="brand-item">	
			{if $brand.image}
			<a href="{if $link_enable == '1'}{$brand.url|escape:'html':'UTF-8'}{else}#{/if}" title="{$brand.title|escape:'html':'UTF-8'}">					
				<img src="{$image_url|escape:'html':'UTF-8'}{$brand.image|escape:'html':'UTF-8'}" alt="{$brand.title|escape:'html':'UTF-8'}" />
			</a>
			{/if}
		</div>
		{/if}
	{/foreach}
</div>