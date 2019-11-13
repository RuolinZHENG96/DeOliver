<?php
/* Smarty version 3.1.32, created on 2019-10-03 00:29:09
  from '/home/deolive1/public_html/cn/backoffice/themes/default/template/controllers/themes_catalog/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94d055064c90_94026117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4acd67e899de4916a03e5a76ddf429532d470ce' => 
    array (
      0 => '/home/deolive1/public_html/cn/backoffice/themes/default/template/controllers/themes_catalog/content.tpl',
      1 => 1556366749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94d055064c90_94026117 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
