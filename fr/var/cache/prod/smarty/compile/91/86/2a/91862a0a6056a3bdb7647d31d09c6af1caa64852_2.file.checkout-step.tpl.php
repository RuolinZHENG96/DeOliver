<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:19
  from '/home/deolive1/public_html/fr/themes/jms_organic/templates/checkout/_partials/steps/checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c46386c0a5_61439375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91862a0a6056a3bdb7647d31d09c6af1caa64852' => 
    array (
      0 => '/home/deolive1/public_html/fr/themes/jms_organic/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1555694450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7c46386c0a5_61439375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
          class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
>
	<div class="step-box1">
		 <h1 class="step-title">
			<i class="fa fa-check-circle-o done"></i>
			<span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

			<span class="step-edit text-muted"><i class="fa fa-pencil-square-o edit"></i> edit</span>
		</h1>
		<div class="content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17119382045cf7c46386b4a5_16290872', 'step_content');
?>

		</div>
	</div>
</section>
<?php }
/* {block 'step_content'} */
class Block_17119382045cf7c46386b4a5_16290872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step_content' => 
  array (
    0 => 'Block_17119382045cf7c46386b4a5_16290872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
}
