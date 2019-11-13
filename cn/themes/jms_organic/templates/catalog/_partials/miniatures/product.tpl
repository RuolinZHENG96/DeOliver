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
<div class="ajax_block_product ">
<div class="product-miniature js-product-miniature product-preview item-gutter-{$jpb_gutterwidth}" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
			   <div class="preview">
					{block name='product_thumbnail'}
					  <a href="{$product.url}" class="product-image {if isset($jpb_phover) && $jpb_phover == 'image_swap'}image_swap{else}image_blur{/if}">
						<img class=" product-img1 img-fluid"
						  src = "{$product.cover.bySize.large_default.url}"
						  alt = "{$product.cover.legend}"
						  data-full-size-image-url = "{$product.cover.large.url}"
						/>
						{if isset($jpb_phover) && $jpb_phover == 'image_swap' && $product.images.1}
							<img class="product-img2 img-fluid"
							  src = "{$product.images.1.bySize.large_default.url}"
							  alt = "{$product.images.1.legend}"
							  data-full-size-image-url = "{$product.images.1.large.url}"
							/>
						{/if}
						<div class="cover"></div>
					  </a>
					{/block}
					<div class="coner-topleft">
					{block name='product_flags'}
					        <ul class="product-flags">
					          {foreach from=$product.flags item=flag}
					            <li class="product-flag label-{$flag.type} label-box" >{$flag.label}</li>
					          {/foreach}
					        </ul>
					{/block}
					{if $product.discount_type === 'percentage'}
				                  <span class="discount-percentage price-percent-reduction">{$product.discount_percentage}</span>
				    {/if}
			    	</div>

						<div class="product-button">
							   <a data-link-action="quickview" class="quick-view product-btn hidden-xs" title="{l s='Add to quickview'}">
									   <span class="icon icon-quickview"></span>
						        </a>
						       {if isset($product.customization_required) && $product.customization_required=='1'}
							       <a href="{$product.url}" class="cart-button product-btn customize" title="{l s='Customization'}">
							         <span class="fa fa-cog"></span>
							       </a>
							     {else}
							        <a {if $product.quantity < 1}disabled{/if} class="ajax-add-to-cart product-btn cart-button {if $product.quantity < 1}disabled{/if}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}" title="{l s='Add to Cart'}">
									   <span class="text-addcart">	
									    <span class="fa fa-spin fa-spinner"></span>
										<span class="fa fa-check"></span></span>	
										<span class="text-outofstock">{l s='Out of Stock'}</span>			
						          </a>
					          {/if}
						</div>
					     {block name='product_variants'}
							{if $product.main_variants} 
						      <div class="color_to_pick_list">
									{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
							  </div>
							{/if}
					
					   {/block}
					  <a class="addToWishlist product-btn "  onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}" title="{l s='Add to Wishlist'}">
								  <span class="fa fa-heart-o"></span>
								  <span class="fa fa-heart"></span>
						</a>
					   
				</div>
						
		<div class="product-info">
		       	  
					{block name='product_name'}
						<a href="{$product.link|escape:'html'}" class="product-link">{$product.name|escape:'html':'UTF-8'}</a>
					{/block}
					 {block name='product_price_and_shipping'}
				          {if $product.show_price}
				            <div class="product-price-and-shipping">
				              {if $product.has_discount}
				                {hook h='displayProductPriceBlock' product=$product type="old_price"}

				                <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
				                <span class="regular-price old price">{$product.regular_price}</span>
				               
				              {/if}
				              {hook h='displayProductPriceBlock' product=$product type="before_price"}
				              <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
				              <span itemprop="price" class="price new">{$product.price}</span>
				              {hook h='displayProductPriceBlock' product=$product type='unit_price'}
				              {hook h='displayProductPriceBlock' product=$product type='weight'}
				            </div>
				          {/if}
				       {/block}				 

					<div class="list_info">
						<div class="list_description">
							{$product.description_short nofilter}
						 </div>
	                    <div class="list_button">
	                    	{if isset($product.customization_required) && $product.customization_required=='1'}
						       <a href="{$product.url}" class="cart-button add-to-cart btn-other ">
						      {l s='Customize' d='Shop.Theme.Catalog'}
						       </a>
						     {else}
								<a {if $product.quantity < 1}disabled{/if} class="ajax-add-to-cart product-btn add-to-cart btn-other {if $product.quantity < 1}disabled{/if}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">	
									    	
									   
										<span class="addtocart">{l s='Add to cart' d='Shop.Theme.Actions'}</span>	
									   <span class="outofstock">{l s='Out of Stock' d='Shop.Theme.Actions'}</span>
	                                   								   
								</a>
								{/if}	
								<a class="addToWishlist product-btn "  onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}" title="{l s='Add to Wishlist'}">
								  <span class="fa fa-heart-o"></span>
								</a>				
						</div>
						
					 </div>
					
					
			
		</div>
		
						
</div>
</div>