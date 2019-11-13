<?php
/* Smarty version 3.1.32, created on 2019-10-03 02:16:14
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94e96e3d4345_14256519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322d4e6b9d2f9e16b04a253d088acbd887276bad' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/templates/page.tpl',
      1 => 1556363454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94e96e3d4345_14256519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19279820045d94e96e3cd133_58271467', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_17795750955d94e96e3d1435_19720361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20604026265d94e96e3d1f08_06772028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8867782925d94e96e3cd8b3_53695249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?> row <?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17795750955d94e96e3d1435_19720361', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20604026265d94e96e3d1f08_06772028', 'page_content', $this->tplIndex);
?>

      </section>    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_8207264995d94e96e3d35a7_52345862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19279820045d94e96e3cd133_58271467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19279820045d94e96e3cd133_58271467',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8867782925d94e96e3cd8b3_53695249',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17795750955d94e96e3d1435_19720361',
  ),
  'page_content' => 
  array (
    0 => 'Block_20604026265d94e96e3d1f08_06772028',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8207264995d94e96e3d35a7_52345862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8867782925d94e96e3cd8b3_53695249', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8207264995d94e96e3d35a7_52345862', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
