<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:19
  from '/home/deolive1/public_html/fr/themes/jms_organic/templates/checkout/_partials/steps/shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c4638c9181_98017075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e596371fddfdf0a92b8df0d9ec3a45eb8afb702' => 
    array (
      0 => '/home/deolive1/public_html/fr/themes/jms_organic/templates/checkout/_partials/steps/shipping.tpl',
      1 => 1555694451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c4638c9181_98017075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8031778675cf7c4638b08f8_88782724', 'step_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/_partials/steps/checkout-step.tpl');
}
/* {block 'delivery_options'} */
class Block_12235443805cf7c4638b4049_60952720 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="delivery-options">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery_options']->value, 'carrier', false, 'carrier_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['carrier_id']->value => $_smarty_tpl->tpl_vars['carrier']->value) {
?>
                  <div class="delivery-option">
                    <div class="col-sm-1">
                      <span class="custom-radio pull-xs-left">
                        <input type="radio" name="delivery_option[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
]" id="delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['delivery_option']->value == $_smarty_tpl->tpl_vars['carrier_id']->value) {?> checked<?php }?>>
                        <span></span>
                      </span>
                    </div>
                    <label for="delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="col-sm-11 delivery-option-2">
                      <div class="row">
                        <div class="col-sm-5 col-xs-12">
                          <div class="row">
                            <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                            <div class="col-xs-3">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                            </div>
                            <?php }?>
                            <div class="<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>col-xs-9<?php } else { ?>col-xs-12<?php }?>">
                              <span class="h6 carrier-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                          <span class="carrier-delay"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['delay'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                          <span class="carrier-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                      </div>
                    </label>
                    <div class="col-md-12 carrier-extra-content"<?php if ($_smarty_tpl->tpl_vars['delivery_option']->value != $_smarty_tpl->tpl_vars['carrier_id']->value) {?> style="display:none;"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['carrier']->value['extraContent'];?>

                    </div>
                    <div class="clearfix"></div>
                  </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php
}
}
/* {/block 'delivery_options'} */
/* {block 'step_content'} */
class Block_8031778675cf7c4638b08f8_88782724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step_content' => 
  array (
    0 => 'Block_8031778675cf7c4638b08f8_88782724',
  ),
  'delivery_options' => 
  array (
    0 => 'Block_12235443805cf7c4638b4049_60952720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="hook-display-before-carrier">
    <?php echo $_smarty_tpl->tpl_vars['hookDisplayBeforeCarrier']->value;?>

  </div>

  <div class="delivery-options-list">
    <?php if (count($_smarty_tpl->tpl_vars['delivery_options']->value)) {?>
      <form
        class="clearfix"
        id="js-delivery"
        data-url-update="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'selectDeliveryOption')),$_smarty_tpl ) );?>
"
        method="post"
      >
        <div class="form-fields">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12235443805cf7c4638b4049_60952720', 'delivery_options', $this->tplIndex);
?>

          <div class="order-options">
            <?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>
              <label>
                <input type="checkbox" name="recyclable" value="1" <?php if ($_smarty_tpl->tpl_vars['recyclable']->value) {?> checked <?php }?>>
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I would like to receive my order in recycled packaging.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
              </label>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['gift']->value['allowed']) {?>
              <span class="custom-checkbox">
                <input
                  class="js-gift-checkbox"
                  name="gift"
                  type="checkbox"
                  value="1"
                  <?php if ($_smarty_tpl->tpl_vars['gift']->value['isGift']) {?>checked="checked"<?php }?>
                >
                <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
                <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label >
              </span>

              <div id="gift" class="collapse<?php if ($_smarty_tpl->tpl_vars['gift']->value['isGift']) {?> in<?php }?>">
                <label for="gift_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you\'d like, you can add a note to the gift:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
                <textarea rows="2" cols="100" id="gift_message" name="gift_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
              </div>

            <?php }?>
          </div>
        </div>
        <button type="submit" class="continue btn btn-primary button-small pull-xs-right" name="confirmDeliveryOption" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      </form>
    <?php } else { ?>
      <p class="alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unfortunately, there are no carriers available for your delivery address.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</p>
    <?php }?>
  </div>

  <div id="hook-display-after-carrier">
    <?php echo $_smarty_tpl->tpl_vars['hookDisplayAfterCarrier']->value;?>

  </div>

  <div id="extra_carrier"></div>
<?php
}
}
/* {/block 'step_content'} */
}
