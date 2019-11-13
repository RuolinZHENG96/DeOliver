<?php
/* Smarty version 3.1.32, created on 2019-10-03 01:20:54
  from '/home/deolive1/public_html/cn/themes/jms_organic/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d94dc76c180d3_63711857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eee632dceb0cc69e14b382c5f1f00e6168d2b1d2' => 
    array (
      0 => '/home/deolive1/public_html/cn/themes/jms_organic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1556366952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5d94dc76c180d3_63711857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="ajax_block_product ">
<div class="product-miniature js-product-miniature product-preview item-gutter-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_gutterwidth']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
			   <div class="preview">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2742797445d94dc76be09e9_77172270', 'product_thumbnail');
?>

					<div class="coner-topleft">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8636508215d94dc76beb1d6_17070240', 'product_flags');
?>

					<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
				                  <span class="discount-percentage price-percent-reduction"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
				    <?php }?>
			    	</div>

						<div class="product-button">
							   <a data-link-action="quickview" class="quick-view product-btn hidden-xs" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to quickview'),$_smarty_tpl ) );?>
">
									   <span class="icon icon-quickview"></span>
						        </a>
						       <?php if (isset($_smarty_tpl->tpl_vars['product']->value['customization_required']) && $_smarty_tpl->tpl_vars['product']->value['customization_required'] == '1') {?>
							       <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="cart-button product-btn customize" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customization'),$_smarty_tpl ) );?>
">
							         <span class="fa fa-cog"></span>
							       </a>
							     <?php } else { ?>
							        <a <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?> class="ajax-add-to-cart product-btn cart-button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-token="<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value) && $_smarty_tpl->tpl_vars['static_token']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Cart'),$_smarty_tpl ) );?>
">
									   <span class="text-addcart">	
									    <span class="fa fa-spin fa-spinner"></span>
										<span class="fa fa-check"></span></span>	
										<span class="text-outofstock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of Stock'),$_smarty_tpl ) );?>
</span>			
						          </a>
					          <?php }?>
						</div>
					     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12454805655d94dc76bfad98_73775614', 'product_variants');
?>

					  <a class="addToWishlist product-btn "  onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist'),$_smarty_tpl ) );?>
">
								  <span class="fa fa-heart-o"></span>
								  <span class="fa fa-heart"></span>
						</a>
					   
				</div>
						
		<div class="product-info">
		       	  
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8795455775d94dc76c00136_96498790', 'product_name');
?>

					 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8195543715d94dc76c030e0_77564289', 'product_price_and_shipping');
?>
				 

					<div class="list_info">
						<div class="list_description">
							<?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

						 </div>
	                    <div class="list_button">
	                    	<?php if (isset($_smarty_tpl->tpl_vars['product']->value['customization_required']) && $_smarty_tpl->tpl_vars['product']->value['customization_required'] == '1') {?>
						       <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="cart-button add-to-cart btn-other ">
						      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

						       </a>
						     <?php } else { ?>
								<a <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?> class="ajax-add-to-cart product-btn add-to-cart btn-other <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-token="<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value) && $_smarty_tpl->tpl_vars['static_token']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');
}?>">	
									    	
									   
										<span class="addtocart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>	
									   <span class="outofstock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
	                                   								   
								</a>
								<?php }?>	
								<a class="addToWishlist product-btn "  onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist'),$_smarty_tpl ) );?>
">
								  <span class="fa fa-heart-o"></span>
								</a>				
						</div>
						
					 </div>
					
					
			
		</div>
		
						
</div>
</div><?php }
/* {block 'product_thumbnail'} */
class Block_2742797445d94dc76be09e9_77172270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_2742797445d94dc76be09e9_77172270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-image <?php if (isset($_smarty_tpl->tpl_vars['jpb_phover']->value) && $_smarty_tpl->tpl_vars['jpb_phover']->value == 'image_swap') {?>image_swap<?php } else { ?>image_blur<?php }?>">
						<img class=" product-img1 img-fluid"
						  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
						  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
						  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
						/>
						<?php if (isset($_smarty_tpl->tpl_vars['jpb_phover']->value) && $_smarty_tpl->tpl_vars['jpb_phover']->value == 'image_swap' && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?>
							<img class="product-img2 img-fluid"
							  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
							  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['legend'], ENT_QUOTES, 'UTF-8');?>
"
							  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
							/>
						<?php }?>
						<div class="cover"></div>
					  </a>
					<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_8636508215d94dc76beb1d6_17070240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_8636508215d94dc76beb1d6_17070240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					        <ul class="product-flags">
					          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
					            <li class="product-flag label-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
 label-box" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
					          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					        </ul>
					<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_variants'} */
class Block_12454805655d94dc76bfad98_73775614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_12454805655d94dc76bfad98_73775614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> 
						      <div class="color_to_pick_list">
									<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
							  </div>
							<?php }?>
					
					   <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_name'} */
class Block_8795455775d94dc76c00136_96498790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_8795455775d94dc76c00136_96498790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html' )), ENT_QUOTES, 'UTF-8');?>
" class="product-link"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
					<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_8195543715d94dc76c030e0_77564289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_8195543715d94dc76c030e0_77564289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				            <div class="product-price-and-shipping">
				              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
				                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


				                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
				                <span class="regular-price old price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
				               
				              <?php }?>
				              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

				              <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
				              <span itemprop="price" class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
				              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

				              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

				            </div>
				          <?php }?>
				       <?php
}
}
/* {/block 'product_price_and_shipping'} */
}
