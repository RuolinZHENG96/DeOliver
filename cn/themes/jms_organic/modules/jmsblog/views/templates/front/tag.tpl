{*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{extends file='page.tpl'}
{block name="page_content"}
{capture name=path}{$tag|escape:'html':'UTF-8'}{/capture}
<h1 class="page-heading">{l s='Tag' d='Modules.JmsBlog'} : {$tag}</h1>
{if isset($posts) AND $posts}		
	<div class="cat-post-list row">
		{foreach from=$posts item=post}
			{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
			{assign var=catparams value=['category_id' => $post.category_id, 'slug' => $post.category_alias]}				
			<div class="item col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<div class="blog-post">
					<div class="top-info">
					{if $post.link_video && $jmsblog_setting.JMSBLOG_SHOW_MEDIA}
						<div class="post-thumb">
							{$post.link_video}
						</div>
					{elseif $post.image && $jmsblog_setting.JMSBLOG_SHOW_MEDIA}
						<div class="post-thumb">
							<a href="{jmsblog::getPageLink('jmsblog-post', $params)}"  class="preview-image">
								<img src="{$image_baseurl|escape:'html':'UTF-8'}{$post.image|escape:'html':'UTF-8'}" alt=""/>
							</a>
							<a href="{jmsblog::getPageLink('jmsblog-post', $params)}" class="quickview">
							 <i class="fa-icon" aria-hidden="true"></i>
							</a>
						</div>
					{/if}
				</div>

						<ul class="post-meta">
					{if $jmsblog_setting.JMSBLOG_SHOW_CATEGORY}
					<li class="post-category"><span><a href="{jmsblog::getPageLink('jmsblog-category', $catparams)}">
					{l s='Category' mod='jmsblog'} : {$post.category_name|escape:'html':'UTF-8'}</a></li>
					{/if}
                    <h2 class="title-blog"><a href="{jmsblog::getPageLink('jmsblog-post', $params)|replace:'amp;':''}">{$post.title|escape:'htmlall':'UTF-8'}</a></h2>
					<li class="post-created">
						<span>{$post.created|escape:'html':'UTF-8'|date_format:"%b %e"}</span>
					    <span>{$post.created|escape:'html':'UTF-8'|date_format:"%Y"}</span>
					</li>
					{if $jmsblog_setting.JMSBLOG_SHOW_VIEWS}
					<li class="post-views"><i class="fa fa-eye" aria-hidden="true"></i><span>{l s='Views' mod='jmsblog'} :</span> {$post.views|escape:'html':'UTF-8'}</li>
					{/if}
					{if $jmsblog_setting.JMSBLOG_SHOW_COMMENTS}
					<li class="post-comments"><i class="fa fa-comments-o" aria-hidden="true"></i><span>{l s='Comments' mod='jmsblog'} :</span> {$post.comment_count|escape:'html':'UTF-8'}</li>
					{/if}	
				</ul>												
						
						<div class="post-intro">
							{$post.introtext nofilter}
						</div>
						<a class="btn btn-default blog-readmore btn-effect button-small" href="{jmsblog::getPageLink('jmsblog-post', $params)}">{l s='Read more' d='Modules.JmsBlog'}</a>
					</div>
			</div>
		{/foreach}
	</div>
{else}	
	{l s='Sorry, dont have any post in this tag' d='Modules.JmsBlog'}
{/if}
{/block}

