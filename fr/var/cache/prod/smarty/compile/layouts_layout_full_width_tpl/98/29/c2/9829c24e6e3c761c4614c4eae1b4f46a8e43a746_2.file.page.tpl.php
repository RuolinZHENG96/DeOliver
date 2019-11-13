<?php
/* Smarty version 3.1.32, created on 2019-06-05 21:13:55
  from '/home/deolive1/public_html/fr/themes/jms_organic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf868d3be9719_37913267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9829c24e6e3c761c4614c4eae1b4f46a8e43a746' => 
    array (
      0 => '/home/deolive1/public_html/fr/themes/jms_organic/templates/page.tpl',
      1 => 1555693622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf868d3be9719_37913267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6950912545cf868d3be4240_66793857', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_18998009285cf868d3be6c51_72178988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4417191555cf868d3be76d8_15410342 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12303665835cf868d3be49d6_01395273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?> row <?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18998009285cf868d3be6c51_72178988', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4417191555cf868d3be76d8_15410342', 'page_content', $this->tplIndex);
?>

      </section>    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_12579113765cf868d3be8660_54973715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_6950912545cf868d3be4240_66793857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6950912545cf868d3be4240_66793857',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12303665835cf868d3be49d6_01395273',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18998009285cf868d3be6c51_72178988',
  ),
  'page_content' => 
  array (
    0 => 'Block_4417191555cf868d3be76d8_15410342',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12579113765cf868d3be8660_54973715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12303665835cf868d3be49d6_01395273', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12579113765cf868d3be8660_54973715', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
