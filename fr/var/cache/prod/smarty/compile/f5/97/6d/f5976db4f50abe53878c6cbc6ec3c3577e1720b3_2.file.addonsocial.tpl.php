<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:19
  from '/home/deolive1/public_html/fr/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addonsocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c4639e50f5_99225800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5976db4f50abe53878c6cbc6ec3c3577e1720b3' => 
    array (
      0 => '/home/deolive1/public_html/fr/themes/jms_organic/modules/jmspagebuilder/views/templates/hook/addonsocial.tpl',
      1 => 1555694613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c4639e50f5_99225800 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
  <h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<div id="social_block">
	<ul class="find-us">
       <?php if ($_smarty_tpl->tpl_vars['facebook_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebook_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="facebook hint" aria-label="facebook"><span class="fa fa-facebook"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['twitter_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="twitter hint" aria-label="twitter"><span class="fa fa-twitter"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['linkedin_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkedin_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="linkedin hint" aria-label="linkedin"><span class="fa fa-linkedin"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['youtube_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="youtube hint" aria-label="youtube"><span class="fa fa-youtube"></span></a></li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_plus_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="gplus hint" aria-label="gplus"><span class="fa fa-google-plus"></span></a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value != '') {?><li class="divider"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pinterest_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="pinterest hint" aria-label="pinterest"><span class="fa fa-pinterest"></span></a></li><?php }?>            
		 <?php if ($_smarty_tpl->tpl_vars['instagram_url']->value != '') {?>
        <li class="divider">
            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['instagram_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="instagram hint" aria-label="instagram">
            <span class="fa fa-instagram"></span>
            </a>
        </li>
        <?php }?>
    </ul>
</div>
<?php }
}
