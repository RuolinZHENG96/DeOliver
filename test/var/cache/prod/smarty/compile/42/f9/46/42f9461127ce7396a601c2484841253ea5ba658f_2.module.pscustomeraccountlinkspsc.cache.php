<?php
/* Smarty version 3.1.32, created on 2019-05-10 18:46:50
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd5ff5ac91794_61523111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1539887808,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5ff5ac91794_61523111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18042281085cd5ff5ac8bd59_50587193';
?>

<div id="block_myaccount_infos" class="links wrapper">
  <h3 class="myaccount-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  </h3>
  <ul class="account-list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_account_urls']->value, 'my_account_url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['my_account_url']->value) {
?>
        <li>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }
}
