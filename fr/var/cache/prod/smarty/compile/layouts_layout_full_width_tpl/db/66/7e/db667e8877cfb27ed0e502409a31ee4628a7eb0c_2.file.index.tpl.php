<?php
/* Smarty version 3.1.32, created on 2019-06-05 21:13:55
  from '/home/deolive1/public_html/fr/themes/jms_organic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf868d3bdc107_94293215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db667e8877cfb27ed0e502409a31ee4628a7eb0c' => 
    array (
      0 => '/home/deolive1/public_html/fr/themes/jms_organic/templates/index.tpl',
      1 => 1555693622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf868d3bdc107_94293215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14640775755cf868d3bd8711_41583957', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1264256575cf868d3bd8f90_94582609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_28753795cf868d3bda755_66617874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14640775755cf868d3bd8711_41583957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14640775755cf868d3bd8711_41583957',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1264256575cf868d3bd8f90_94582609',
  ),
  'page_content' => 
  array (
    0 => 'Block_28753795cf868d3bda755_66617874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1264256575cf868d3bd8f90_94582609', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28753795cf868d3bda755_66617874', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
