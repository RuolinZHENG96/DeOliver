<div class="btn-group compact-hidden languages-info" id="c_langselect">
		<span class="btn-name">{l s='Languages' d='Shop.Theme.Global'}</span>
	<ul>

			<li class="c_list" id="c_en">
				<a href="#" class="dropdown-item">English</a>
			</li>
			<li class="c_list" id="c_fr">
				<a href="#" class="dropdown-item">Français</a>
			</li>
			<li class="current c_list" id="c_cn" >
				<a class="dropdown-item">Chinese</a>
			</li>
	</ul>
	<div id="c_popup_en">
        <p>Are your sure to go to the english website?</p>
    </div>
    <div id="c_popup_fr">
        <p>Are your sure to go to the french website?</p>
    </div>
</div>
<div class="user-info btn-group ">
    <span class="btn-name">{l s='Customer signin' d='Shop.Theme.Customeraccount'}</span>
    {if $logged}
  
	  
	  <a  class="login2 btn-xs dropdown-toggle" data-toggle="dropdown" href="{$my_account_url}"  title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" rel="nofollow">    
        
     <a href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}/({$customerName}) </a>
      </a>
      <ul>
    		<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" class="account" rel="nofollow">{l s='Account' d='Shop.Theme.Actions'} </a></li>		
    		<li><a href="{$link->getPageLink('order', true)}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.Actions'} </a></li>
       
		
   </ul>
    {else} 
	  <a  href="{$my_account_url}" title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
        rel="nofollow"  class="logout hidden-sm-down"> 
        <span class="hidden-sm-down text-top">{l s='Login/Register' d='Shop.Theme.Actions'}</span>
      </a>
	  <ul>
  		<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" class="account" rel="nofollow">{l s='Account' d='Shop.Theme.Actions'} </a></li>		
  		<li><a href="{$link->getPageLink('order', true)}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.Actions'} </a></li>
  		
	</ul> 
	
    {/if}
   
    
</div>

