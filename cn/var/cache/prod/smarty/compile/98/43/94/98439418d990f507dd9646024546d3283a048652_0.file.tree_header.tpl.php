<?php
/* Smarty version 3.1.32, created on 2019-10-03 00:23:08
  from '/home/deolive1/public_html/cn/backoffice/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94ceec6e1183_30157492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98439418d990f507dd9646024546d3283a048652' => 
    array (
      0 => '/home/deolive1/public_html/cn/backoffice/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1556366763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94ceec6e1183_30157492 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
