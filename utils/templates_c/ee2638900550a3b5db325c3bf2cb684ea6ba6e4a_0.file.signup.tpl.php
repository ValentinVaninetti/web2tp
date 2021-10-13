<?php
/* Smarty version 3.1.39, created on 2021-10-02 02:23:05
  from 'D:\xampp\htdocs\web2tp\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6157a6691835f2_58177583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee2638900550a3b5db325c3bf2cb684ea6ba6e4a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\signup.tpl',
      1 => 1633133784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_6157a6691835f2_58177583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

<?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="username" placeholder="username">
      <input type="text" class="form-control" name="password" placeholder="password">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="email" placeholder="email">
    </div>
  </div>
  <div class="form-group">
    <button class="btn btn-secondary btn-block" type="submit">SignUp</button>
    </div>
</form>


</body><?php }
}
