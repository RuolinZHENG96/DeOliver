<?php
/* Smarty version 3.1.32, created on 2019-06-06 08:59:56
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf8658c8854a7_87511583',
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
function content_5cf8658c8854a7_87511583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13043360405cf8658c880809_38804734', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_186192355cf8658c882e02_04343996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3889060735cf8658c883858_11491794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8222996695cf8658c880f50_56684182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?> row <?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186192355cf8658c882e02_04343996', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3889060735cf8658c883858_11491794', 'page_content', $this->tplIndex);
?>

      </section>    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_19844452735cf8658c8847a2_64815356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13043360405cf8658c880809_38804734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13043360405cf8658c880809_38804734',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8222996695cf8658c880f50_56684182',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_186192355cf8658c882e02_04343996',
  ),
  'page_content' => 
  array (
    0 => 'Block_3889060735cf8658c883858_11491794',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19844452735cf8658c8847a2_64815356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8222996695cf8658c880f50_56684182', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19844452735cf8658c8847a2_64815356', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
