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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="panel"><h3><i class="icon-list-ul"></i> {l s='HomePages List' d='Modules.JmsPagebuilder'}
	<span class="panel-heading-action">
		<a class="list-toolbar-btn" href="{$link->getAdminLink('AdminJmspagebuilderHomepages')|escape:'html':'UTF-8'}&configure=jmspagebuilder&addHome=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="rows">
		<div id="homepage_list" class="homepage">
			{foreach from=$homepages key=i item=homepage}
				<div id="homepage_{$homepage.id_homepage|escape:'html':'UTF-8'}" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-11">
							<h4 class="pull-left">#{$homepage.id_homepage|escape:'html':'UTF-8'} - {$homepage.title|escape:'html':'UTF-8'}</h4>
							<div class="btn-group-action pull-right">
								<a class="btn {if $homepage.active}btn-success{else}btn-danger{/if}"	href="{$link->getAdminLink('AdminJmspagebuilderHomepages')|escape:'html':'UTF-8'}&configure=jmspagebuilder&status_id_homepage={$homepage.id_homepage|escape:'html':'UTF-8'}" title="{if $homepage.active}Enabled{else}Disabled{/if}">
								<i class="{if $homepage.active}icon-check{else}icon-remove{/if}"></i>{if $homepage.active}Enabled{else}Disabled{/if}
								</a>
								<a class="btn btn-default"									href="{$link->getAdminLink('AdminJmspagebuilderHomepages')|escape:'html':'UTF-8'}&configure=jmspagebuilder&config_id_homepage={$homepage.id_homepage|escape:'html':'UTF-8'}">
									<i class="icon-sitemap"></i>
									{l s='Layout Config' d='Modules.JmsPagebuilder'}
								</a>
								<a class="btn btn-default"									href="{$link->getAdminLink('AdminJmspagebuilderHomepages')|escape:'html':'UTF-8'}&configure=jmspagebuilder&duplicate_id_homepage={$homepage.id_homepage|escape:'html':'UTF-8'}">
									<i class="icon-copy"></i>
									{l s='Duplicate' d='Modules.JmsPagebuilder'}
								</a>	
								<a class="btn btn-default"	href="{$link->getAdminLink('AdminJmspagebuilderHomepages')|escape:'html':'UTF-8'}&configure=jmspagebuilder&edit_id_homepage={$homepage.id_homepage|escape:'html':'UTF-8'}">
									<i class="icon-edit"></i>
									{l s='Edit' d='Modules.JmsPagebuilder'}
								</a>								
								<a class="btn btn-default"									href="{$link->getAdminLink('AdminJmspagebuilderHomepages')|escape:'html':'UTF-8'}&configure=jmspagebuilder&delete_id_homepage={$homepage.id_homepage|escape:'html':'UTF-8'}" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="icon-trash"></i>
									{l s='Delete' d='Modules.JmsPagebuilder'}
								</a>								
							</div>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>