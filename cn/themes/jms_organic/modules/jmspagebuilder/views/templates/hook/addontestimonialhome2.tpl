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
	*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
	*  International Registered Trademark & Property of PrestaShop SA
	*}

	<script type="text/javascript">
		var items = 3,
		itemsDesktop = {if $items_show}{$items_show|escape:'htmlall':'UTF-8'}{else}1{/if},
		itemsDesktopSmall = {if $items_show_md}{$items_show_md|escape:'htmlall':'UTF-8'}{else}1{/if},
		itemsTablet = {if $items_show_sm}{$items_show_sm|escape:'htmlall':'UTF-8'}{else}1{/if},
		itemsMobile = {if $items_show_xs}{$items_show_xs|escape:'htmlall':'UTF-8'}{else}1{/if};

	</script>

	<div id="testimonial">
		<div class="slider-nav ">
			{foreach from=$testimonials item=testimonial}
			{foreach from=$testimonials item=testimonial}
			{if $show_image}
			<div class="testimonial-img">           
				<img class="img-responsive img-fluid" src="{$image_url|escape:'html':'UTF-8'}resized_{$testimonial.image|escape:'html':'UTF-8'}" alt="img-testimonial"/>          
			</div>
			{/if}
			{/foreach}
			{/foreach}
		</div>
		<div class="slider-for">
			{foreach from=$testimonials item=testimonial}
			<div class="testimonial-box">

				<div class="testimonial-comment" >
					{$testimonial.comment|truncate:220:'...'|escape:'html':'UTF-8'} 
				</div>
				<div class="info_people">
					{if $show_time}
					<div class="testimonial-date">      
						{$testimonial.posttime|escape:'html':'UTF-8'}     
					</div>
					{/if}
					<div class="testimonial-author">
						{$testimonial.author|escape:'html':'UTF-8'}
					</div>
					{if $show_office}
					<div class="show_office">/ {$testimonial.office|escape:'html':'UTF-8'}</div>
					{/if}
				</div>

			</div>  
			{/foreach}
		</div> 
		</div>



