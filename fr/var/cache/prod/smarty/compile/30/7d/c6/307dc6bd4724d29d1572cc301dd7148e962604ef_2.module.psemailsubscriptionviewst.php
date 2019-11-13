<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:19
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c463991590_86899220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1556293053,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c463991590_86899220 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block_newsletter newsletter-box" id="newsletter_block_left">
<div class="textnews">
  <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
  </div>
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post"  id="newsletter-input">
        <div  class="form-group">
              <input  name="email" type="text" class="form-control newsletter-input"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                aria-labelledby="block-newsletter-label"
              >
         	           <button type="submit" name="submitNewsletter" class="newsletter-btn  btn-shopnow btn">
		                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		                </button>               
        <input type="hidden" name="action" value="0" />
      </div>
      </form>
</div>
<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
        <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }
}
}
