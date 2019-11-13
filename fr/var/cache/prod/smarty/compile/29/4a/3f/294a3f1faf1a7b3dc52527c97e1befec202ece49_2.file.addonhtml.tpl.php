<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:19
  from '/home/deolive1/public_html/fr/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addonhtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c4639b0ce8_02300286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294a3f1faf1a7b3dc52527c97e1befec202ece49' => 
    array (
      0 => '/home/deolive1/public_html/fr/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addonhtml.tpl',
      1 => 1555694612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c4639b0ce8_02300286 (Smarty_Internal_Template $_smarty_tpl) {
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
