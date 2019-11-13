<?php
/* Smarty version 3.1.32, created on 2019-05-09 04:26:05
  from '/home/deolive1/public_html/test/backoffice/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd3e41db7af92_92976183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08222956d8a6681adef92d262f2186e7abf1a683' => 
    array (
      0 => '/home/deolive1/public_html/test/backoffice/themes/default/template/content.tpl',
      1 => 1537384456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd3e41db7af92_92976183 (Smarty_Internal_Template $_smarty_tpl) {
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
