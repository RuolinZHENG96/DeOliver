<?php
/* Smarty version 3.1.32, created on 2019-05-10 18:46:50
  from '/home/deolive1/public_html/test/themes/jms_organic/templates/_partials/stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd5ff5a9b3d15_77099854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b52113ad86e7f07042eaab4a3788e1c1c5d286' => 
    array (
      0 => '/home/deolive1/public_html/test/themes/jms_organic/templates/_partials/stylesheets.tpl',
      1 => 1539887808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5ff5a9b3d15_77099854 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
/css/neueeinstellung/neueeinstellung.css" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
