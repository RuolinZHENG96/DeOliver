<?php
/* Smarty version 3.1.32, created on 2019-06-05 21:38:11
  from '/home/deolive1/public_html/cn/backoffice/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c5c3477088_85338073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a7284c5f0e0dd925356ca7276385523dac874a' => 
    array (
      0 => '/home/deolive1/public_html/cn/backoffice/themes/default/template/content.tpl',
      1 => 1556363890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c5c3477088_85338073 (Smarty_Internal_Template $_smarty_tpl) {
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
