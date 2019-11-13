<?php
/* Smarty version 3.1.32, created on 2019-10-03 02:28:39
  from '/home/deolive1/public_html/cn/modules/jmspagebuilder/views/templates/admin/form/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94ec57bca8d3_93205099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a8e655d6e19f11305ce4a6f7594e7146f3166f' => 
    array (
      0 => '/home/deolive1/public_html/cn/modules/jmspagebuilder/views/templates/admin/form/helpers/form/form.tpl',
      1 => 1556367970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94ec57bca8d3_93205099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_791240325d94ec57babdc5_48532185', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_791240325d94ec57babdc5_48532185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_791240325d94ec57babdc5_48532185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'skin') {?>
	<div class="col-lg-9">
		<a class="skin-box <?php if ($_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == 'default' || $_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == '') {?>active<?php }?>" title="Default">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_url'],'htmlall','UTF-8' ));?>
default.png" alt="Default" />
		</a>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['skins'], 'sk');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sk']->value) {
?>
			<a class="skin-box <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == $_prefixVariable1) {?>active<?php }?>" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
" data-color="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_url'],'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
.png" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
" />
			</a>					
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<input type="hidden" name="JPB_SKIN" id="jmsskin" value="" />
		<?php echo '<script'; ?>
 type="text/javascript">
		jQuery(function ($) {
			"use strict";
			$(".skin-box").click(function() {		
				var skin =  $(this).attr('data-color');		
				$('#jmsskin').val(skin);
				$(".skin-box").removeClass('active');
				$(this).addClass('active');
			});		
		});
		<?php echo '</script'; ?>
>
	</div>	
	<?php }
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
