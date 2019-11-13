<?php
/* Smarty version 3.1.32, created on 2019-10-03 01:20:54
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94dc76bb4af2_58740239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5bc5e83c59d9583de664356b3ea349863d715bb' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/templates/catalog/_partials/products-top.tpl',
      1 => 1556366327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5d94dc76bb4af2_58740239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	<div id="js-product-list-top" class="filters-panel">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-5 col-xs-6 view-mode left clearfix inclue_left_sort">
				   <span class="text-mode"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View mode :','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><a class="view-grid active" href="#">
					</a> 
					<a class="view-list" href="#">
					</a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-7 col-xs-6 right include_right_sort">
			
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15657759775d94dc76bb15d3_20630590', 'sort_by');
?>

			
			</div>
		</div>
	</div>
<?php }
/* {block 'sort_by'} */
class Block_15657759775d94dc76bb15d3_20630590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_15657759775d94dc76bb15d3_20630590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
				<?php
}
}
/* {/block 'sort_by'} */
}
