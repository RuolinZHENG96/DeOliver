<?php
/* Smarty version 3.1.32, created on 2019-10-03 00:23:08
  from '/home/deolive1/public_html/cn/backoffice/themes/default/template/helpers/tree/tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94ceec6b7b63_86956580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8033c79ed63b7c02b70ba03318d51194664c03f' => 
    array (
      0 => '/home/deolive1/public_html/cn/backoffice/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1556366765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94ceec6b7b63_86956580 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
