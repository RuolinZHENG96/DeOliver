<?php
/* Smarty version 3.1.32, created on 2019-10-03 02:16:14
  from '/home/deolive1/public_html/cn/themes/jms_organic/modules/contactform/views/templates/widget/contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94e96e54e068_82391658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd955019e31417c30bdf1f0cd2c0a329c86c66b' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/modules/contactform/views/templates/widget/contactform.tpl',
      1 => 1556367357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94e96e54e068_82391658 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="contact-form">
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>enctype="multipart/form-data"<?php }?>>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value) {?>
      <div class="col-xs-12 alert <?php if ($_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['messages'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    <?php }?>

    <section class="form-fields">

      <div class="form-group row">
        <div class="col-md-9 col-md-offset-3">
          <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
        <div class="col-md-6">
          <select name="id_contact" class="form-control form-control-select">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['contacts'], 'contact_elt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact_elt']->value) {
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_elt']->value['id_contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_elt']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
        <div class="col-md-6">
          <input
            class="form-control"
            name="from"
            type="email"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8');?>
"
            placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
          >
        </div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['contact']->value['orders']) {?>
        <div class="form-group row">
          <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
          <div class="col-md-6">
            <select name="id_order" class="form-control form-control-select">
              <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select reference','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['orders'], 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['id_order'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
          <span class="col-md-3 form-control-comment">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>

          </span>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>
        <div class="form-group row">
          <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
          <div class="col-md-6">
            <input type="file" name="fileUpload" class="filestyle">
          </div>
          <span class="col-md-3 form-control-comment">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>

          </span>
        </div>
      <?php }?>

      <div class="form-group row">
        <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
        <div class="col-md-9">
          <textarea
            class="form-control"
            name="message"
            placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How can we help?','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
            rows="3"
          ><?php if ($_smarty_tpl->tpl_vars['contact']->value['message']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['message'], ENT_QUOTES, 'UTF-8');
}?></textarea>
        </div>
      </div>

    </section>

    <footer class="form-footer text-xs-right">
      <button class="btn btn-default" type="submit" name="submitMessage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    </footer>

  </form>
</section>
<?php }
}
