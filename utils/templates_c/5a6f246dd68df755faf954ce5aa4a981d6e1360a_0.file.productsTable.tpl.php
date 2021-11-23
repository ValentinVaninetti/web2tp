<?php
/* Smarty version 3.1.39, created on 2021-11-23 02:44:26
  from '/opt/lampp/htdocs/web2tp/templates/productsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c477a052407_05621170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a6f246dd68df755faf954ce5aa4a981d6e1360a' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/productsTable.tpl',
      1 => 1637631862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c477a052407_05621170 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-dark">
  <thead>
    <tr>      
      <th scope="col">Name</th>
      <th scope="col">Price</th>      
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Buttons</th>
    </tr>
  </thead>
  <tbody>   
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <tr>        
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</td>
        <td>$<?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
</td>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCategories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>          
           <?php if ($_smarty_tpl->tpl_vars['category']->value->category_id == $_smarty_tpl->tpl_vars['product']->value->category_id) {?>
             <td><?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>
</td>
           <?php }?>       
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        <td><img src="Img/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_img;?>
" class="img-responsive product-img" width="200" height="200"></td>
        <td><p><?php echo $_smarty_tpl->tpl_vars['product']->value->product_description;?>
</p></td>
        <td>    
            <form method="POST" action="deleteProduct">
              <button type="submit" id=<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
 class="btn btn-secondary">Delete</button>        
              <input type="hidden" name="productid" value=<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
>
            </form>   
                  
            <form method="POST" action="editProduct"  enctype="multipart/form-data">
              <select name="categoryEdit" class="custom-select" style="width: 300px;">
                <option value="">Select category</option>
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
              <input name="productNameEdit" class="form-control" style="width: 300px;" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
">            
              <input name="productPriceEdit" class="form-control" style="width: 300px;" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
">
              <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="productEditImage" class="form-control-file" id="exampleFormControlFile1">
              <input name="productDescriptionEdit" class="form-control" style="width: 300px;" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_description;?>
">
              <input type="hidden" name="productidEdit" value=<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
>
              <button type="submit" class="btn btn-secondary" id="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
">Edit</button>
            </form>
        </td>        
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
  </tbody>
</table>
<div class="mb-4">
    <label class="font-weight-bold ml-3">
      Add new product
    </label>
    <form method="POST" action="addProduct" enctype="multipart/form-data"  class="d-flex flex-row">
        <select name="category"  class="custom-select col-2">
            <option value="">Select Category</option>
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
        <input name="productName"  class="form-control col-2 ml-1" type="text" placeholder="Product name">
        <input name="productPrice"  class="form-control col-2 ml-1" type="text" placeholder="Product Price">        
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" name="productImage" class="form-control-file" id="exampleFormControlFile1">
          
        
        <input name="productDescription"  class="form-control col-2 ml-1" type="text" placeholder="Product Description">
        <button type="submit" id="button-add" 
                class="btn btn-secondary  ml-2">
          Add
        </button>
    </form>
</div>          

<?php }
}
