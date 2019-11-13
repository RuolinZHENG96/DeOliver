{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 
{assign 'list_city' [
'	Abbotsford	'	,
'	Alert	'	,
'	Amherst	'	,
'	Amos	'	,
'	Antigonish	'	,
'	Arctic Bay	'	,
'	Argentia	'	,
'	Arviat	'	,
'	Athabasca	'	,
'	Atikokan	'	,
'	Attawapiskat	'	,
'	Baddeck	'	,
'	Baie-Comeau	'	,
'	Baker Lake	'	,
'	Banff	'	,
'	Barrie	'	,
'	Bathurst	'	,
'	Belleville	'	,
'	Berens River	'	,
'	Big Beaverhouse	'	,
'	Biggar	'	,
'	Brandon	'	,
'	Brochet	'	,
'	Brockville	'	,
'	Brooks	'	,
'	Buchans	'	,
'	Burns Lake	'	,
'	Burwash Landing	'	,
'	Calgary	'	,
'	Cambridge Bay	'	,
'	Campbell River	'	,
'	Camrose	'	,
'	Cap-Chat	'	,
'	Cape Dorset	'	,
'	Cartwright	'	,
'	Cat Lake	'	,
'	Channel-Port aux Basques	'	,
'	Chapleau	'	,
'	Charlottetown	'	,
'	Chesterfield Inlet	'	,
'	Chicoutimi	'	,
'	Chilliwack	'	,
'	Churchill	'	,
'	Cobalt	'	,
'	Cochrane	'	,
'	Coral Harbour	'	,
'	Corner Brook	'	,
'	Cornwall	'	,
'	Courtenay	'	,
'	Cranbrook	'	,
'	Creston	'	,
'	Dauphin	'	,
'	Dawson Creek	'	,
'	Dease Lake	'	,
'	Deer Lake	'	,
'	Deer Lake	'	,
'	Délįne	'	,
'	Digby	'	,
'	Dolbeau	'	,
'	Drummondville	'	,
'	Dryden	'	,
'	Eastmain	'	,
'	Edmonton	'	,
'	Edmundston	'	,
'	Ennadai	'	,
'	Flin Flon	'	,
'	Fort Chipewyan	'	,
'	Fort Good Hope	'	,
'	Fort McMurray	'	,
'	Fort McPherson	'	,
'	Fort Nelson	'	,
'	Fort Resolution	'	,
'	Fort Saint John	'	,
'	Fort Severn	'	,
'	Fort Simpson	'	,
'	Fort Smith	'	,
'	Forteau Bay	'	,
'	Fredericton	'	,
'	Gander	'	,
'	Gaspé	'	,
'	Geraldton	'	,
'	Gillam	'	,
'	Gimli	'	,
'	Gjoa Haven	'	,
'	Grande Prairie	'	,
'	Grise Fiord	'	,
'	Halifax	'	,
'	Hall Beach	'	,
'	Hamilton	'	,
'	Happy Valley	'	,
'	Hay River	'	,
'	Hearst	'	,
'	Hinton	'	,
'	Holman	'	,
'	Hopedale	'	,
'	Hudson Bay	'	,
'	Igloolik	'	,
'	Inukjuak	'	,
'	Inuvik	'	,
'	Iqaluit	'	,
'	Island Lake	'	,
'	Ivujivik	'	,
'	Jasper	'	,
'	Joliette	'	,
'	Kamloops	'	,
'	Kangirsuk	'	,
'	Kapuskasing	'	,
'	Kelowna	'	,
'	Kenora	'	,
'	Kimmirut	'	,
'	Kindersley	'	,
'	Kingston	'	,
'	Kitchener	'	,
'	Kugluktuk	'	,
'	Kuujjuaq	'	,
'	La Ronge	'	,
'	La Sarre	'	,
'	La Scie	'	,
'	Lac La Biche	'	,
'	Lake Louise	'	,
'	Lansdowne House	'	,
'	Lethbridge	'	,
'	Lillooet	'	,
'	Little Current	'	,
'	Liverpool	'	,
'	London	'	,
'	Łutselk’e	'	,
'	Lynn Lake	'	,
'	Marathon	'	,
'	Matagami	'	,
'	Meadow Lake	'	,
'	Medicine Hat	'	,
'	Melville	'	,
'	Mingan	'	,
'	Moncton	'	,
'	Mont-Laurier	'	,
'	Montréal	'	,
'	Moose Jaw	'	,
'	Moosonee	'	,
'	Nain	'	,
'	Nanaimo	'	,
'	Natashquan	'	,
'	Nelson	'	,
'	Nelson House	'	,
'	New Bella Bella	'	,
'	New Glasgow	'	,
'	New Liskeard	'	,
'	Nipigon	'	,
'	Norman Wells	'	,
'	North Battleford	'	,
'	North Bay	'	,
'	Norway House	'	,
'	Orangeville	'	,
'	Orillia	'	,
'	Oshawa	'	,
'	Ottawa	'	,
'	Owen Sound	'	,
'	Oxford House	'	,
'	Pangnirtung	'	,
'	Parry Sound	'	,
'	Paulatuk	'	,
'	Peace River	'	,
'	Pembroke	'	,
'	Penticton	'	,
'	Peterborough	'	,
'	Pond Inlet	'	,
'	Port Hardy	'	,
'	Port Hope Simpson	'	,
'	Port-Menier	'	,
'	Powell River	'	,
'	Prince Albert	'	,
'	Prince George	'	,
'	Prince Rupert	'	,
'	Pukatawagan	'	,
'	Québec	'	,
'	Quesnel	'	,
'	Radisson	'	,
'	Rankin Inlet	'	,
'	Red Deer	'	,
'	Red Lake	'	,
'	Regina	'	,
'	Repulse Bay	'	,
'	Resolute	'	,
'	Revelstoke	'	,
'	Rigolet	'	,
'	Rimouski	'	,
'	Rivière-du-Loup	'	,
'	Rouyn-Noranda	'	,
'	Saint Anthony	'	,
'	Saint John	'	,
'	Saint John’s	'	,
'	Saint-Augustin	'	,
'	Saint-Georges	'	,
'	Saint-Jérôme	'	,
'	Salluit	'	,
'	Sandspit	'	,
'	Sarnia	'	,
'	Saskatoon	'	,
'	Schefferville	'	,
'	Selkirk	'	,
'	Sept-Îles	'	,
'	Shamattawa	'	,
'	Shawinigan-Sud	'	,
'	Shelburne	'	,
'	Sherbrooke	'	,
'	Smithers	'	,
'	Steinbach	'	,
'	Stephenville	'	,
'	Stettler	'	,
'	Stony Rapids	'	,
'	Sudbury	'	,
'	Swift Current	'	,
'	Sydney	'	,
'	Taloyoak	'	,
'	Terrace	'	,
'	The Pas	'	,
'	Thessalon	'	,
'	Thompson	'	,
'	Thunder Bay	'	,
'	Timmins	'	,
'	Tofino	'	,
'	Toronto	'	,
'	Trepassey	'	,
'	Trois-Rivières	'	,
'	Trout River	'	,
'	Tsiigehtchic	'	,
'	Tuktoyaktuk	'	,
'	Uranium City	'	,
'	Val-d’Or	'	,
'	Vancouver	'	,
'	Vegreville	'	,
'	Victoria	'	,
'	Victoriaville	'	,
'	Watson Lake	'	,
'	Wawa	'	,
'	West Dawson	'	,
'	Wetaskiwin	'	,
'	Weyburn	'	,
'	Whitehorse	'	,
'	Wiarton	'	,
'	Williams Lake	'	,
'	Windsor	'	,
'	Windsor	'	,
'	Winnipeg	'	,
'	Yarmouth	'	,
'	Yellowknife	'	,
'	Yorkton	'	
]}

{block name="address_form"}
  <div class="js-address-form">
    {include file='_partials/form-errors.tpl' errors=$errors['']}

    {block name="address_form_url"}
    <form
      method="POST"
      action="{url entity='address' params=['id_address' => $id_address]}"
      data-id-address="{$id_address}"
      data-refresh-url="{url entity='address' params=['ajax' => 1, 'action' => 'addressForm']}"
    >
    {/block}

      {block name="address_form_fields"}
        <section class="form-fields">
          {block name='form_fields'}
            {foreach from=$formFields item="field"}
                {if $field["name"] eq "city"}
                    <div class="form-group row" id="city">
                        <label class="col-md-3 form-control-label required">
                                  {l s='City'}
                        </label>
                        <div class="col-md-6">
                            <select class="form-control form-control-select" id="select-city" required="">
                              <option value="" disabled="" selected="">-- please choose --</option>
                              {foreach from=$list_city item="mycity"}
                              <option value="">{$mycity}</option>
                              {/foreach}
                            </select>
                        </div>
                        <div class="col-md-3 form-control-comment">
                        </div>
                  </div>

                {/if}
                  {block name='form_field'}
                    {form_field field=$field}
                  {/block}
              
            {/foreach}
          {/block}
        </section>
      {/block}

      {block name="address_form_footer"}
      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        {block name='form_buttons'}
          <button class="btn btn-primary float-xs-right" type="submit" class="form-control-submit">
            {l s='Save' d='Shop.Theme.Actions'}
          </button>
        {/block}
      </footer>
      {/block}

    </form>
  </div>
{/block}
