<?php
/* Smarty version 3.1.39, created on 2021-11-23 03:23:28
  from '/opt/lampp/htdocs/web2tp/templates/productsCards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c50a0e88c61_38330822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9e66709d6b86cd3126850c61eedb48d86d8d3c' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/productsCards.tpl',
      1 => 1637634208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modal.tpl' => 1,
  ),
),false)) {
function content_619c50a0e88c61_38330822 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
  <form method="POST" action="search">
    <div class="d-flex flex-row col-4">
      <select class="form-control" name="category-id">
        <option value="">Get all products</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCategories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->category_id;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>
</option>                  
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
      </select>      
      <button class="btn btn-primary ml-2" type="submit">Search</button>
    </div>
  </form>
</div>
     
<div class="container">
   <h1 class="text-center text-muted">Product catalog</h1>
   <div class="row flow-offset-1">   
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>   
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3 border border-dark" style="height: 100%;" ><img src="Img/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_img;?>
" alt="" style="height: 200px">
         <div class="caption ">
           <h4>
              <?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>

           </h4>         
             <span class="price-sale">
              $<?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
USD
            </span>
            <form method="POST" action="productDetails">
              <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
">
              <button type="submit" class="btn btn-secondary" name ="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
"> Show More!</button>
            </form>       
            <?php $_smarty_tpl->_subTemplateRender("file:./modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            
            <button type="button" name="product_id"
              data-toggle="modal" data-target="#exampleModal"
              class="button_comments btn btn-primary"                    
              value="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
" 
              id="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
"
              data-objectid="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
"
              >Show Comments
            </button>    
            
         </div>
       </div>
     </div>  
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
 </div>
 
  
</div>



  
<?php }
}
