<?php
/* Smarty version 3.1.32, created on 2019-06-06 08:59:56
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf8658c8791a1_24644069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9b7addd85a49cb0cb5563a415d9c3b39ef56ba5' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/templates/index.tpl',
      1 => 1556363454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf8658c8791a1_24644069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10255736555cf8658c876815_73218346', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_5677842625cf8658c876fe8_16570726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18040361765cf8658c877b12_83861224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10255736555cf8658c876815_73218346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10255736555cf8658c876815_73218346',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5677842625cf8658c876fe8_16570726',
  ),
  'page_content' => 
  array (
    0 => 'Block_18040361765cf8658c877b12_83861224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5677842625cf8658c876fe8_16570726', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18040361765cf8658c877b12_83861224', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
