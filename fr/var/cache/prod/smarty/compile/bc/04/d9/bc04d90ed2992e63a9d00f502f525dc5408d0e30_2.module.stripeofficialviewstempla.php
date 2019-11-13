<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:19
  from 'module:stripeofficialviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c4638ece34_03640799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc04d90ed2992e63a9d00f502f525dc5408d0e30' => 
    array (
      0 => 'module:stripeofficialviewstempla',
      1 => 1555694180,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c4638ece34_03640799 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SSL']->value) {?>
<div class="row stripe-payment">
  <div class="col-xs-12">
    <div class="payment_module" style="border: 1px solid #d6d4d4; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; padding-left: 15px; padding-right: 15px; background: #fbfbfb;">
      <input type="hidden" id="stripe-incorrect_number" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card number is incorrect.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-invalid_number" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card number is not a valid credit card number.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-invalid_expiry_month" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card\'s expiration month is invalid.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-invalid_expiry_year" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card\'s expiration year is invalid.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-invalid_cvc" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card\'s security code is invalid.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-expired_card" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card has expired.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-incorrect_cvc" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card\'s security code is incorrect.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-incorrect_zip" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card\'s zip code failed validation.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-card_declined" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card was declined.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-missing" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no card on a customer that is being charged.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-processing_error" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An error occurred while processing the car.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-rate_limit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An error occurred due to requests hitting the API too quickly. Please let us know if you\'re consistently running into this error.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-3d_declined" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The card doesn\'t support 3DS.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <input type="hidden" id="stripe-no_api_key" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There\'s an error with your API keys. If you\'re the administrator of this website, please go on the "Connection" tab of your plugin.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
      <div id="stripe-ajax-loader"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/ajax-loader.gif" alt="" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transaction in progress, please wait.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
</div>
      <form id="stripe-payment-form" action="#">

        <h3 class="stripe_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay by card','mod'=>'stripe_official'),$_smarty_tpl ) );?>
</h3>


        <div class="stripe-payment-errors"><?php if (isset($_GET['stripe_error'])) {
echo htmlspecialchars($_GET['stripe_error'], ENT_QUOTES, 'UTF-8');
}?></div>

        <!-- Used to display Element errors -->
        <div id="card-errors" role="alert"></div>


        <input type="hidden" id="stripe-publishable-key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['publishableKey']->value, ENT_QUOTES, 'UTF-8');?>
"/>

        <div class="form-row">
          <label for="card-element">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cardholder\'s Name','mod'=>'stripe_official'),$_smarty_tpl ) );?>

          </label><label class="required"> </label>
          <input name="cardholder-name" type="text"  autocomplete="off" class="stripe-name" data-stripe="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer_name']->value, ENT_QUOTES, 'UTF-8');?>
"/>
          <label for="card-element">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Number','mod'=>'stripe_official'),$_smarty_tpl ) );?>

          </label><label class="required"> </label>
          <div id="cardNumber-element">
            <!-- a Stripe Element will be inserted here. -->
          </div>
          <div class="block-left stripe-card-expiry">
            <label for="card-element">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiry date','mod'=>'stripe_official'),$_smarty_tpl ) );?>

            </label><label class="required"> </label>
            <div id="cardExpiry-element">
              <!-- a Stripe Element will be inserted here. -->
            </div>
          </div>
          <div class="stripe-card-cvc">
            <label for="card-element">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CVC/CVV','mod'=>'stripe_official'),$_smarty_tpl ) );?>

            </label><label class="required"> </label>
            <div id="cardCvc-element">
              <!-- a Stripe Element will be inserted here. -->
            </div>
          </div>

        </div>


        <div class="clear"></div>
        <img class="powered_stripe" alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/verified_by_visa.png"/>
        <img class="powered_stripe" alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/mastercard_securecode.png"/>
        <img class="powered_stripe" alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/powered_by_stripe.png"/>
      </form>
    </div>
  </div>
</div>
<div id="modal_stripe"  class="modal" style="display: none">
  <div id="result_3d"> </div></div>
<?php echo '<script'; ?>
 type="text/javascript">
  var mode = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripe_mode']->value, ENT_QUOTES, 'UTF-8');?>
;
  var currency_stripe = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_stripe']->value, ENT_QUOTES, 'UTF-8');?>
";
  var amount_ttl = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount_ttl']->value, ENT_QUOTES, 'UTF-8');?>
;
  var secure_mode = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secure_mode']->value, ENT_QUOTES, 'UTF-8');?>
;
  var baseDir = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['baseDir']->value, ENT_QUOTES, 'UTF-8');?>
";
  var billing_address = <?php echo $_smarty_tpl->tpl_vars['billing_address']->value;?>
;
  var module_dir = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
";
  var ajaxUrlStripe = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajaxUrlStripe']->value, ENT_QUOTES, 'UTF-8');?>
";
  ajaxUrlStripe = ajaxUrlStripe.replace(/&amp;/g, '&');
  var StripePubKey = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['publishableKey']->value, ENT_QUOTES, 'UTF-8');?>
";
  var stripeLanguageIso = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripeLanguageIso']->value, ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>
<?php } else { ?>
<div class="row stripe-payment">
  <div class="col-xs-12">
    <div class="payment_module" style="border: 1px solid #d6d4d4; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; padding-left: 15px; padding-right: 15px; background: #fbfbfb;">
      <p class="alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SSL is off, please activate it.','mod'=>'stripe_official'),$_smarty_tpl ) );?>
</p>
    </div>
  </div>
</div>
<?php }
}
}
