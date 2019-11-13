<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:08
  from '/home/deolive1/public_html/fr/backoffice/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c4582ea111_66445616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9cb850c253be92665b9518d78b1ad0a04b1f294' => 
    array (
      0 => '/home/deolive1/public_html/fr/backoffice/themes/default/template/content.tpl',
      1 => 1555693720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c4582ea111_66445616 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
