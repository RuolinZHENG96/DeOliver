<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:19
  from '/home/deolive1/public_html/fr/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addoncontactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c4639a6667_52225684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a76743d1319c3c0c49cc00c668aa99c9a7c986b9' => 
    array (
      0 => '/home/deolive1/public_html/fr/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addoncontactinfo.tpl',
      1 => 1555694611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c4639a6667_52225684 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<div class="contact-info<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
	<ul>
       <?php if ($_smarty_tpl->tpl_vars['ci_address']->value != '') {?><li class="address-info"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ci_address']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['phone']->value != '') {?><li><i class="fa fa-phone" aria-hidden="true"></i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['phone']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['email']->value != '') {?><li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['opentime']->value != '') {?><li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['opentime']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
    </ul>
</div>
<?php }
}
