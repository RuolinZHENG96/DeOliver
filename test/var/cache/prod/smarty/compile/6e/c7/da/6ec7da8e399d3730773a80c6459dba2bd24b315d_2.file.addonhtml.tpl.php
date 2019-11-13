<?php
/* Smarty version 3.1.32, created on 2019-05-10 18:46:50
  from '/home/deolive1/public_html/test/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addonhtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd5ff5ac58449_67714315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ec7da8e399d3730773a80c6459dba2bd24b315d' => 
    array (
      0 => '/home/deolive1/public_html/test/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addonhtml.tpl',
      1 => 1539887808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5ff5ac58449_67714315 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }
echo $_smarty_tpl->tpl_vars['html_content']->value;
}
}
