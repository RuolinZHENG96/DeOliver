<?php
/* Smarty version 3.1.32, created on 2019-10-03 02:16:14
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94e96e3df9d9_52495449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '465e44db5a4ae3291f7fb6d252a0b1389560d937' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/templates/layouts/layout-left-column.tpl',
      1 => 1556364684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94e96e3df9d9_52495449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9930480395d94e96e3dd6f8_41348881', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5996573115d94e96e3de2d1_07164015', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_9930480395d94e96e3dd6f8_41348881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_9930480395d94e96e3dd6f8_41348881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_3553901235d94e96e3dece3_80080756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_5996573115d94e96e3de2d1_07164015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_5996573115d94e96e3de2d1_07164015',
  ),
  'content' => 
  array (
    0 => 'Block_3553901235d94e96e3dece3_80080756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-sm-9 col-md-9 col-lg-9 col-xs-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3553901235d94e96e3dece3_80080756', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
