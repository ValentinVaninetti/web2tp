<?php
/* Smarty version 3.1.39, created on 2021-11-23 03:23:53
  from '/opt/lampp/htdocs/web2tp/templates/usersAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c50b9944b80_17142884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a499af4ae3d27f66db9001cd5fbe5745af40eaf' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/usersAdmin.tpl',
      1 => 1637181752,
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
function content_619c50b9944b80_17142884 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
    <table class="table table-dark">
            <thead>
                <tr>      
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>      
                    <th scope="col">isAdmin</th>    
                    <th scope="col">AdminButtons</th>  
                </tr>
            </thead>
            <tbody> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['user']->value->isAdmin;?>

                        </td>
                        <td>
                        <form method="POST" action="editUser">
                            <input name="adminEdit" class="form-control" style="width: 300px;" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value->isAdmin;?>
">
                            <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
"> 
                            <button type="submit" class="btn btn-secondary" id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
">Edit</button>           
                        </form>
                        <form method="POST" action="deleteUser">
                            <input type="hidden" name="isAdmin" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->isAdmin;?>
">
                            <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
"> 
                            <button type="submit" class="btn btn-secondary" id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
">Delete</button>
                        </form>
                        </td>
                    </tr>                
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>  
    </table>
      
    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
><?php }
}
