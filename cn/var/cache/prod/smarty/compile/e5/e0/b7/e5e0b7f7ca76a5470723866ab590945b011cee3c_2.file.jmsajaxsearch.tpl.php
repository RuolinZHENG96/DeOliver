<?php
/* Smarty version 3.1.32, created on 2019-06-06 08:59:56
  from '/home/deolive1/public_html/cn/themes/jms_organic/modules/jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf8658c981286_27337315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5e0b7f7ca76a5470723866ab590945b011cee3c' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/modules/jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl',
      1 => 1556367361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf8658c981286_27337315 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group compact-hidden jms_ajax_search dropdown"  id="jms_ajax_search">
	<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
		<div class="box_search"><span class="ajaxsearchicon"></span></div>
	</a>
		<div class="dropdown-menu search-box" role="menu">	
			<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="searchbox" id="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search everything...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="form-control ajax_search"  />		
			
		  <button type="submit" name="submit_search" class="button-search ajaxsearchicon">	</button>
	  </form>
			<div id="search_result">
			</div>
		</div>	
	</div><?php }
}
