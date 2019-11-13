<?php
/* Smarty version 3.1.32, created on 2019-06-06 08:59:56
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf8658c8b7e42_60697323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81b312286bc7fc2a30cde933dbe31b740461faab' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/templates/layouts/layout-both-columns.tpl',
      1 => 1556364684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5cf8658c8b7e42_60697323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_467270125cf8658c899060_36492063', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['jpb_homeclass']->value) && $_smarty_tpl->tpl_vars['jpb_homeclass']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_homeclass']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cms') {?>cms-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
}?>">
	<?php if ($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value) {?>
		<div class="preloader">
			<div class="spinner<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value, ENT_QUOTES, 'UTF-8');?>
">
				<div class="dot1"></div>
				<div class="dot2"></div>
			    <div class="bounce1"></div>
			    <div class="bounce2"></div>
			    <div class="bounce3"></div>
			</div>
		</div>
	<?php }?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

	<?php if ($_smarty_tpl->tpl_vars['jpb_mobilemenu']->value) {?>
		<div class="menu-wrap hidden-lg hidden-md">
			<button id="close-button" class="close-button"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</button>
				<nav id="off-canvas-menu">					
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

				</nav>				
				
			</div>
	<?php }?>
    <div class="main-site">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18424932405cf8658c8a2979_25192379', 'product_activation');
?>

      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19137900205cf8658c8a3c89_58278641', 'header');
?>

      </header>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13840769845cf8658c8a51d4_31366926', 'notifications');
?>

		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19635236215cf8658c8a69f9_85266941', 'breadcrumb');
?>

		<?php }?>
        <div id="wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>class="container"<?php }?>> 
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?>
		<div class="row">
		<?php }?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6780502665cf8658c8aaeb2_72210346', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4621140805cf8658c8ae1e1_82247462', "content_wrapper");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9359562205cf8658c8afd44_85480695', "right_column");
?>

			
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
		</div>
		<?php }?>
      </div>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14581762955cf8658c8b40f8_67408094', "footer");
?>

      </footer>

    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18990453685cf8658c8b5900_65732450', 'javascript_bottom');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>


  </body>

</html>
<?php }
/* {block 'head'} */
class Block_467270125cf8658c899060_36492063 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_467270125cf8658c899060_36492063',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'product_activation'} */
class Block_18424932405cf8658c8a2979_25192379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_18424932405cf8658c8a2979_25192379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_19137900205cf8658c8a3c89_58278641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19137900205cf8658c8a3c89_58278641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_13840769845cf8658c8a51d4_31366926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_13840769845cf8658c8a51d4_31366926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_19635236215cf8658c8a69f9_85266941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_19635236215cf8658c8a69f9_85266941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			   <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_6780502665cf8658c8aaeb2_72210346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_6780502665cf8658c8aaeb2_72210346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="page-column col-sm-3 col-md-3 col-lg-3 col-xs-12">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_13742781635cf8658c8aeb74_61404067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_4621140805cf8658c8ae1e1_82247462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_4621140805cf8658c8ae1e1_82247462',
  ),
  'content' => 
  array (
    0 => 'Block_13742781635cf8658c8aeb74_61404067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-12 col-md-6">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13742781635cf8658c8aeb74_61404067', "content", $this->tplIndex);
?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_9359562205cf8658c8afd44_85480695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_9359562205cf8658c8afd44_85480695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-12 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_14581762955cf8658c8b40f8_67408094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14581762955cf8658c8b40f8_67408094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_18990453685cf8658c8b5900_65732450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_18990453685cf8658c8b5900_65732450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
}
