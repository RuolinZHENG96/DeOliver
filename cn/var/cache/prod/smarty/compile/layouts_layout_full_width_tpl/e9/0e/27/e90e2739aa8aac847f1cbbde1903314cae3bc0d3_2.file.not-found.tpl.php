<?php
/* Smarty version 3.1.32, created on 2019-10-03 02:14:58
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94e9226a67e4_00478075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e90e2739aa8aac847f1cbbde1903314cae3bc0d3' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/templates/errors/not-found.tpl',
      1 => 1556364683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d94e9226a67e4_00478075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3291332075d94e92269eb79_62649096', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_5037492685d94e9226a29e7_88862355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_13550264615d94e9226a41d6_94478642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_3291332075d94e92269eb79_62649096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_3291332075d94e92269eb79_62649096',
  ),
  'search' => 
  array (
    0 => 'Block_5037492685d94e9226a29e7_88862355',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_13550264615d94e9226a41d6_94478642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5037492685d94e9226a29e7_88862355', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13550264615d94e9226a41d6_94478642', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
