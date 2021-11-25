<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:18:57
  from 'D:\xampp\htdocs\web2tp\templates\categoriesAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef291259774_46154816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9756efdb68786060ab0da19b88b3bfdbea82d78e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\categoriesAdmin.tpl',
      1 => 1637804791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_619ef291259774_46154816 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="adminBody">
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <table class="table table-dark">
        <thead>
            <tr>      
                <th scope="col">Category Name</th>
                <th scope="col">Category Description</th>   
                <th scope="col">Admin Buttons</th>               
            </tr>
        </thead>
        <tbody> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>

                    </td>
                    <td>
                        <form method="POST" action="deleteCategory">
                            <button type="submit" class="btn btn-secondary" id=<?php echo $_smarty_tpl->tpl_vars['category']->value->category_id;?>
>Delete</button>        
                            <input type="hidden" name="category-id" value=<?php echo $_smarty_tpl->tpl_vars['category']->value->category_id;?>
>
                        </form>
                        <form method="POST" action="editCategory">
                            <input name="category_name" class="form-control" style="width: 300px;" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>
">
                            <input name="category_description" class="form-control" style="width: 300px;" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
">
                            <input type="hidden" name="category-id" value=<?php echo $_smarty_tpl->tpl_vars['category']->value->category_id;?>
>
                            <button type="submit" class="btn btn-secondary" id="<?php echo $_smarty_tpl->tpl_vars['category']->value->category_id;?>
">Edit</button>
                        </form>
                    </td>            
                </tr>       
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>  
    </table>
    <div class="divAdd">
        <form method="POST" action="addCategory" enctype="multipart/form-data">       
            <input name="category-name" class="form-control" style="width: 300px;" type="text" placeholder="category name">
            <input name="category-description" class="form-control" style="width: 300px;" type="text" placeholder="category description">       
            <button type="submit"  class="btn btn-secondary" id="button-add">add</button>
        </form>
    </div> 
        <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
><?php }
}
