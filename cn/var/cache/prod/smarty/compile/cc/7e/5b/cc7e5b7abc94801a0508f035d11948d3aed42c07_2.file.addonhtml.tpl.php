<?php
/* Smarty version 3.1.32, created on 2019-06-06 08:59:56
  from '/home/deolive1/public_html/cn/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addonhtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf8658c307161_35953420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc7e5b7abc94801a0508f035d11948d3aed42c07' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addonhtml.tpl',
      1 => 1556367395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf8658c307161_35953420 (Smarty_Internal_Template $_smarty_tpl) {
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
