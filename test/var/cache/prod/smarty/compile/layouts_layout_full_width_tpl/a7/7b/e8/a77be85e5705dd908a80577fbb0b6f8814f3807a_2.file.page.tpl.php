<?php
/* Smarty version 3.1.32, created on 2019-05-10 18:46:50
  from '/home/deolive1/public_html/test/themes/jms_organic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd5ff5a8bfb77_76449225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a77be85e5705dd908a80577fbb0b6f8814f3807a' => 
    array (
      0 => '/home/deolive1/public_html/test/themes/jms_organic/templates/page.tpl',
      1 => 1539887807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5ff5a8bfb77_76449225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12144897935cd5ff5a8b87b1_78655310', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_1185688355cd5ff5a8bd793_92745647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18099101705cd5ff5a8be4a4_73730420 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18333362185cd5ff5a8b8de1_12551159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?> row <?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1185688355cd5ff5a8bd793_92745647', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18099101705cd5ff5a8be4a4_73730420', 'page_content', $this->tplIndex);
?>

      </section>    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_14154086295cd5ff5a8bf0f5_35022216 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12144897935cd5ff5a8b87b1_78655310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12144897935cd5ff5a8b87b1_78655310',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18333362185cd5ff5a8b8de1_12551159',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1185688355cd5ff5a8bd793_92745647',
  ),
  'page_content' => 
  array (
    0 => 'Block_18099101705cd5ff5a8be4a4_73730420',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14154086295cd5ff5a8bf0f5_35022216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18333362185cd5ff5a8b8de1_12551159', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14154086295cd5ff5a8bf0f5_35022216', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
