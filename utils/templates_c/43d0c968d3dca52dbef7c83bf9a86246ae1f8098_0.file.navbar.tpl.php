<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:40:45
  from 'D:\xampp\htdocs\web2tp\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef7ad2060d0_95957185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43d0c968d3dca52dbef7c83bf9a86246ae1f8098' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\navbar.tpl',
      1 => 1637808043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./adminNavLinks.tpl' => 1,
  ),
),false)) {
function content_619ef7ad2060d0_95957185 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>     
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="products">Products</a>      
      </li>     
      
    </ul>
    <?php if ((isset($_SESSION['islogged']))) {?>
    <a href="logout" class="btn btn-primary">Logout</a>
    <?php }?>
    <?php if ((isset($_SESSION['isAdmin'])) && $_SESSION['isAdmin']) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./adminNavLinks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <div class="logo-box" >
      <img class="logo" src="./images/logo.png">
    </div>
  </div>

</nav><?php }
}
