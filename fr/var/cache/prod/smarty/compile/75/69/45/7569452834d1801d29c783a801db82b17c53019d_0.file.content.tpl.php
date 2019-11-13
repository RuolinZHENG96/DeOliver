<?php
/* Smarty version 3.1.32, created on 2019-07-19 04:12:54
  from '/home/deolive1/public_html/fr/backoffice/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d317b86862ad3_63995989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7569452834d1801d29c783a801db82b17c53019d' => 
    array (
      0 => '/home/deolive1/public_html/fr/backoffice/themes/new-theme/template/content.tpl',
      1 => 1555693726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d317b86862ad3_63995989 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
