<?php
/* Smarty version 3.1.32, created on 2019-05-10 18:46:50
  from '/home/deolive1/public_html/test/themes/jms_organic/modules/jmsmegamenu/views/templates/hook/jmsmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd5ff5ab052e6_83895762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0820ab6ad01d10ca969b4624985d684bb41de0e3' => 
    array (
      0 => '/home/deolive1/public_html/test/themes/jms_organic/modules/jmsmegamenu/views/templates/hook/jmsmegamenu.tpl',
      1 => 1539887808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5ff5ab052e6_83895762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jms-megamenu-wrap">
	<a id="open-button" class="open-button hidden-lg hidden-md" href="#">
		<span class="hamburger-icon-inner">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
         </span>
	</a>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_html']->value,'' ));?>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var jmmm_event = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_MOUSEEVENT']->value, ENT_QUOTES, 'UTF-8');?>
';
	var jmmm_duration = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_DURATION']->value, ENT_QUOTES, 'UTF-8');?>
;	
<?php echo '</script'; ?>
><?php }
}
