<?php
/* Smarty version 3.1.32, created on 2019-10-03 01:20:54
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94dc76b44765_56388172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e206ad7d378738ef6dc77cfa08f149d0327e2dcc' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/templates/catalog/listing/category.tpl',
      1 => 1556366323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94dc76b44765_56388172 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sidebar']->value == 'left') {?> 
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'no') {?>	
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
}?> 
<?php if ($_smarty_tpl->tpl_vars['jpb_categorylayout']->value) {
$_smarty_tpl->_subTemplateRender("catalog/listing/".((string)$_smarty_tpl->tpl_vars['jpb_categorylayout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php }
}
