<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:32:19
  from '/home/deolive1/public_html/fr/themes/jms_organic/templates/checkout/_partials/cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf7c46394b155_03516700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd71ea665229801f5d7475869edbd50508caa394f' => 
    array (
      0 => '/home/deolive1/public_html/fr/themes/jms_organic/templates/checkout/_partials/cart-summary.tpl',
      1 => 1555694213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-product-line.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
  ),
),false)) {
function content_5cf7c46394b155_03516700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1">
  <div class="card-block">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17455008215cf7c46393e2d9_31327561', 'cart_summary_products');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171058755cf7c463943054_01154416', 'cart_summary_subtotals');
?>


  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6701729105cf7c4639486c7_10827378', 'cart_summary_voucher');
?>


  <hr>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1614411385cf7c463949bd0_59542326', 'cart_summary_totals');
?>


</section>
<?php }
/* {block 'cart_summary_product_list'} */
class Block_12237351105cf7c463940104_06573607 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="collapse" id="cart-summary-product-list">
            <ul class="media-list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <li class="media"><?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        <?php
}
}
/* {/block 'cart_summary_product_list'} */
/* {block 'cart_summary_products'} */
class Block_17455008215cf7c46393e2d9_31327561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
    0 => 'Block_17455008215cf7c46393e2d9_31327561',
  ),
  'cart_summary_product_list' => 
  array (
    0 => 'Block_12237351105cf7c463940104_06573607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="cart-summary-products">

        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</p>

        <p>
          <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'show details','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        </p>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12237351105cf7c463940104_06573607', 'cart_summary_product_list', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
class Block_171058755cf7c463943054_01154416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
    0 => 'Block_171058755cf7c463943054_01154416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
          <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="value pull-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_voucher'} */
class Block_6701729105cf7c4639486c7_10827378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
    0 => 'Block_6701729105cf7c4639486c7_10827378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
/* {block 'cart_summary_totals'} */
class Block_1614411385cf7c463949bd0_59542326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
    0 => 'Block_1614411385cf7c463949bd0_59542326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
}
