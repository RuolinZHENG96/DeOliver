<div class="btn-group compact-hidden blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if} dropdown js-dropdown {if isset($jpb_addtocart) && $jpb_addtocart == 'ajax_cartbottom'}shoppingcart-bottom{/if} {if  isset($jpb_addtocart) && $jpb_addtocart == 'ajax_cartsidebar'}shoppingcart-sidebar{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
			<a href="#" class="dropdown-toggle cart-icon" data-toggle="dropdown">	
			<span class="ajax_cart_quantity">{$cart.products_count}</span>
				<span class="shoppingcart"></span>
			</a>
	<a href="#" class="d-none btn-xs tab-title dropdown-toggle" data-toggle="dropdown"> 
		<span>
			<span class="box-cart ajax_cart_quantity">{$cart.products_count} item(s) in your cart <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></span> 
		</span> 
	</a>
	<div class="dropdown-menu shoppingcart-box">
	   <div class="shoppingcart-content">
        <span class="ajax_cart_no_product" {if $cart.products_count != 0}style="display:none"{/if}>{l s='There is no product' d='Shop.Theme.Actions'}</span>
			<ul class="list products cart_block_list">
				{foreach from=$cart.products item=product}
					<li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
				{/foreach}
			</ul>
			</div>
			<div class="cart-prices">
			<div class="checkout-info">
					{foreach from=$cart.subtotals item="subtotal"}
						<div class="{$subtotal.type} cart-prices-line">	
							<span class="label">{$subtotal.label}</span>
							<span class="value">{$subtotal.value}</span>
						</div>
					{/foreach}
				<div class="cart-button">
					<a id="button_order_cart" class="btn-other btn" href="{$cart_url}" title="{l s='Check out' d='Shop.Theme.Global'}" rel="nofollow">
						{l s='Check out' d='Shop.Theme.Checkout'}
					</a> 
				</div>
			</div>
			</div>
	</div>
</div>
