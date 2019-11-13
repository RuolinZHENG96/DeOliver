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
<aside class="blog-widget widget-tabs">	
	<div role="tabpanel">	
	        {if $widget_setting.JBW_SB_SHOW_POPULAR}
		   <h3 class="title_block"><span> {l s='Popular' d='Shop.Theme.Global'}</span></h3>
			{/if}	
			{if $widget_setting.JBW_SB_SHOW_POPULAR}
			<div class="tab-content">				
				{foreach from=$popularpost key=k item=post}	
					{assign var="show_view" value=$post.views + 1}	
					{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
					<article class="item-post clearfix">
							<a href="{jmsblog::getPageLink('jmsblog-post', $params)}" class="post-img">
							{if $post.image}
								<img src="{$image_baseurl|escape:'html'}thumb_{$post.image|escape:'html'}" class="img-fluid" />
							{else}	
								<img src="{$image_baseurl|escape:'html'}no-img.jpg" class="img-fluid" />
							{/if}
							<h6>{$post.title|escape:'html'}</h6>
							<p class="post-view"><i class="fa fa-eye"></i>{$show_view|escape:'html'}({l s='Views' mod='jmsblogwidget'})</p>
							</a>
					</article>
				{/foreach}				
			</div>
			{/if}  
		<ul class="nav nav-tabs">			
			{if $widget_setting.JBW_SB_SHOW_RECENT}
			<li class="nav-item {if !$widget_setting.JBW_SB_SHOW_POPULAR}active{/if}"><a href="#latestpost" aria-controls="latestpost" data-toggle="tab">{l s='Recent' d='Modules.JmsBlogwidget'}</a></li>
			{/if}
			{if $widget_setting.JBW_SB_SHOW_LATESTCOMMENT}
			<li class="nav-item "><a href="#latestcomment" aria-controls="latestpost" data-toggle="tab" class="active">{l s='Comments' d='Modules.JmsBlogwidget'}</a></li>
			{/if}
		  </ul>
		  <div class="tab-content">	
			{if $widget_setting.JBW_SB_SHOW_RECENT}
			<div class="tab-pane{if !$widget_setting.JBW_SB_SHOW_POPULAR} active{/if}" id="latestpost">				
				{foreach from=$latestpost key=k item=post}
					{assign var="show_view" value=$post.views + 1}
					{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
					<article class="item-post clearfix">
						<a href="{jmsblog::getPageLink('jmsblog-post', $params)}" class="post-img">
						{if $post.image}
							<img src="{$image_baseurl|escape:'html'}thumb_{$post.image|escape:'html'}" class="img-fluid" />
						{else}	
							<img src="{$image_baseurl|escape:'html'}no-img.jpg" class="img-fluid" />
						{/if}
						<h6>{$post.title|escape:'html'}</h6>
						<p class="post-view"><i class="fa fa-eye"></i>{$show_view|escape:'html'}({l s='Views' mod='jmsblogwidget'})</p>
						</a>
					</article>
				{/foreach}				
			</div>
			{/if}
			{if $widget_setting.JBW_SB_SHOW_LATESTCOMMENT}
			<div class="tab-pane active" id="latestcomment">
				{foreach from=$latestcomment key=k item=comment}
					<article class="comment-item">
						<img src="{$image_baseurl|escape:'html'}user.png" class="img-fluid">
						<h6>{$comment.customer_name}:</h6>
						<p>{$comment.comment}</p>
					</article>
				{/foreach}	
			</div>
			{/if}
		  </div>

	</div>
</aside>
{if $widget_setting.JBW_SB_SHOW_CATEGORYMENU}
	<aside class="blog-widget widget-categories">
		<h3 class="widget-title"><span>{l s='Categories'}</span></h3>
		<ul>
		{$category_menu nofilter}
		</ul>
	</aside>
	{/if}
{if $widget_setting.JBW_SB_SHOW_ARCHIVES}
<aside class="blog-widget widget-archives">
	<h3 class="widget-title"><span>{l s='Archives'}</span></h3>
	<ul>
	{foreach from=$archives item=archive}
		{assign var=aparams value=['archive' => $archive.postmonth]}
		<li><a href="{jmsblog::getPageLink('jmsblog-archive', $aparams)}">{$archive.postmonth }</a></li>
	{/foreach}
	</ul>
</aside>
{/if}
