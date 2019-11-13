<?php
/* Smarty version 3.1.32, created on 2019-10-03 02:19:59
  from '/home/deolive1/public_html/cn/backoffice/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94ea4f03d2b3_15639975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55f62ba219b89775b8eeb356b94358f1da53f6a4' => 
    array (
      0 => '/home/deolive1/public_html/cn/backoffice/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1556367876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94ea4f03d2b3_15639975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5664910685d94ea4f03b765_66952019', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_5664910685d94ea4f03b765_66952019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_5664910685d94ea4f03b765_66952019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
