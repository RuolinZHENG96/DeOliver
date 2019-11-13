{*
* 2007-2017 PrestaShop
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
*  @copyright  2007-2017 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script type="text/javascript">
	var h_items = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktop = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktopSmall = {if $items_show_md}{$items_show_md nofilter}{else}1{/if},
	    h_itemsTablet = {if $items_show_sm}{$items_show_sm nofilter}{else}1{/if},
	    h_itemsMobile = {if $items_show_xs}{$items_show_xs nofilter}{else}1{/if};
	    var h_nav = {if $navigation == 1}true{else}false{/if};
		var h_pag = {if $pagination == 1}true{else}false{/if};
		var h_auto_play = {if $autoplay == 1}true{else}false{/if};
</script>

<div class="jms-hotdeal hotdeal">
<div class="hotdeal-carousel">
		{foreach from=$products item=product key=k}	
			<div class="item">
			  <div class="product-preview" itemtype="http://schema.org/Product" data-id-product="{$product.id_product nofilter}" data-id-product-attribute="{$product.id_product_attribute nofilter}" >
				{block name='product_thumbnail'}

				<div class="preview">
				  <a href="{$product.url nofilter}" class="product-image">
					<img class="img-responsive product-img1 img-fluid"
					  src = "{$product.cover.bySize.large_default.url nofilter}"
					  alt = "{$product.cover.legend nofilter}"
					  data-full-size-image-url = "{$product.cover.large.url nofilter}"
					>
				  </a>	
				  {/block}
				 {block name='product_price_and_shipping'}
					{if $product.show_price}
					  <div class="content_price">

						{hook h='displayProductPriceBlock' product=$product type="before_price"}	
						<span class="textonly">{l s='Only' d='Shop.Theme.Global'}</span>
						<span itemprop="price" class="price new">{$product.price nofilter}</span>
						{hook h='displayProductPriceBlock' product=$product type='unit_price'}

						{hook h='displayProductPriceBlock' product=$product type='weight'}
					  </div>
					{/if}
				  {/block} 
				  </div>
				  
			

				<div class="product-info">
					{if $addon_desc}
	             	  <p class="addon-desc">{$addon_desc nofilter}</p>
		            {/if}
					 {if $product.discount_type === 'percentage'}
				                 <span class="discount-hotdeal"> {l s='Sale off' d='Shop.Theme.Global'}{$product.discount_percentage}</span>
				            {/if}
				  {block name='product_name'}
				   <a href="{$product.url nofilter}" class="product-link">{$product.name|truncate:30:'...' nofilter}</a>
				  {/block}
				  <div class="description_short">
						{$product.description_short nofilter}
				  </div>
				  <div class="countdown" id="countdown-{$hotdeals[$k].id_hotdeals nofilter}">{$hotdeals[$k].deals_time nofilter}</div>	
					  <div class="hotdeal-button">
								<a {if $product.quantity < 1}disabled{/if} class="ajax-add-to-cart product-btn cart-button btn-shopnow {if $product.quantity < 1}disabled{/if}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
									<span class="fa fa-spin fa-spinner"></span>
									<span class="fa fa-check"></span>
								    <span class="text-addcart">{l s='Add to cart' d='Shop.Theme.Actions'}	</span>		
								   <span class="text-outofstock">{l s='Out of stock' d='Shop.Theme.Actions'}</span>
                                  								   
							</a>
							<a class="addToWishlist product-btn"  onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}" title="{l s='Add to Wishlist'}">
							      <span class="fa fa-heart-o"></span>
							</a>					
							</div>
				</div>
  </div>
  </div>
		{/foreach}
</div>
</div>


                           

	