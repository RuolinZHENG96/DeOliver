<?php
/* Smarty version 3.1.32, created on 2019-10-03 00:23:08
  from '/home/deolive1/public_html/cn/backoffice/themes/default/template/helpers/tree/tree_toolbar_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94ceec6d0231_94137375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c51cae6b82c852419673a3d2f35c98243c18314' => 
    array (
      0 => '/home/deolive1/public_html/cn/backoffice/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1556366765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94ceec6d0231_94137375 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl ) );?>

</a>
<?php }
}
