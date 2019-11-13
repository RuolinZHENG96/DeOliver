{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
</div>
{/if}


<div class="home_categories">
	{if isset($categories) AND $categories}
	<div class="categories-carousel ">
		{foreach from=$categories item=category key=k}
		{assign var='categoryLink' value=$link->getcategoryLink($category.id_category, $category.link_rewrite)}
		<div class="main_content_categories">
			<div class="content_categories">		
				<div class="categories-wrapper box-{$k % 4}">
					<div class="categoy-image">
						<a href="{$categoryLink nofilter}">
							<img src="{$img_cat_dir}{$category.id_category}_thumb.jpg" alt="{$category.name}" title="{$category.name}" class="img-responsive img-fluid"/>
						</a>
					</div>
					<div class="category-info">
						<div>
						<div class="cat-name" ><a href="{$categoryLink nofilter}">{$category.name}</a></div>
						
						<div class="show-cat"><a class=" btn btn-default btn-banner btn-white btn-nobor" href="{$categoryLink nofilter}">{l s='Discovery'}</a></div>
					</div>
					</div>
				</div>
			</div>
		</div>
		{/foreach}
	</div>
	{else}
	<p>{l s='No categories' d='Shop.Theme.Global'}</p>
	{/if}
</div>