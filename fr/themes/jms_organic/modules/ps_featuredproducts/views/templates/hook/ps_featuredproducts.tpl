<div class="row popular">
<section class="featured-products clearfix controlstyle2">
	<div class="addon-title">
		<h3 class="products-section-title">
			{l s='Popular Products' d='Shop.Theme.Catalog'}
		</h3>
	</div>
  <div class=" customs-carousel-product">
    {foreach from=$products item="product"}
    <div class="item ajax_block_product">
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
  </div>
    {/foreach}
  </div>
</section>
</div>