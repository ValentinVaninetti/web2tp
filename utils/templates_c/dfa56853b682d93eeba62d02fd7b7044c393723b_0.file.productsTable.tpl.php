<?php
/* Smarty version 3.1.39, created on 2021-10-07 21:53:59
  from 'D:\xampp\htdocs\web2tp\templates\productsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f50576041b9_40998076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfa56853b682d93eeba62d02fd7b7044c393723b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\productsTable.tpl',
      1 => 1633579709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f50576041b9_40998076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-dark">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>      
      <th scope="col">Category</th>
      <td scope="col"></th>
      <th scope="col">Description</th>
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
        <th scope="row">1</th>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
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
        
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_img;?>
" width="200" height="200"></td>
        <td><p><?php echo $_smarty_tpl->tpl_vars['product']->value->products_description;?>
</p></td>
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
  </tbody>
</table><?php }
}
