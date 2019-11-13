{*
* 2007-2015 PrestaShop
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
<div class="block_newsletter newsletter-box" id="newsletter_block_left">
<div class="textnews">
  <h3>{l s='Our Newsletter' d='Shop.Theme.Global'}</h3>
  {* <p>{l s='Subscribe now  to save 15 percents on any of our products' d='Shop.Theme.Global'}</p> *}
</div>
      <form action="{$urls.pages.index}#footer" method="post"  id="newsletter-input">
        <div  class="form-group">
              <input  name="email" type="text" class="form-control newsletter-input"
                value="{$value}"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
                aria-labelledby="block-newsletter-label"
              >
         	           <button type="submit" name="submitNewsletter" class="newsletter-btn  btn-shopnow btn">
		                    <span>{l s='Subscribe' d='Shop.Theme.Global'}</span>
		                </button>               
        <input type="hidden" name="action" value="0" />
      </div>
      </form>
</div>
{if $msg}
        <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
            {$msg}
        </div>
    {/if}