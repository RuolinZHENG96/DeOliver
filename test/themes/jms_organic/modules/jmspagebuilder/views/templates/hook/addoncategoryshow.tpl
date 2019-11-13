{if isset($id_cat) AND $id_cat}
{if $show_img == 1}
{assign var='categoryLink' value=$link->getcategoryLink($id_cat)}
<div class="wrapper-thumb">
	<div class="thumb effect">
		<a href="{$categoryLink nofilter}" title="{$name nofilter}" class="category_image">
			<img src="{$image_url nofilter}{$id_cat nofilter}_thumb.jpg" alt="{$name nofilter}" title="{$name nofilter}" class="img-responsive"/>
		</a>
	</div>
</div>
{/if}
<div class="info-cat">
<div class="parent-category">
		<a  title="{$name nofilter}">{$name nofilter}</a>
	</div>

{if $num_child != 0}
		<ul class="child-categories">
			{foreach from=$child item=c}
				{assign var='categoryLink' value=$link->getcategoryLink({$c.id_category}, '#')}
				<li>			
					<a href="{$categoryLink nofilter}" title="{$c.name nofilter}">{$c.name}</a>
				</li>
			{/foreach}
		</ul>
	{/if}
{else}
	<p>{l s='No categories' d='Shop.Theme.Global'}</p>
{/if}
</div>