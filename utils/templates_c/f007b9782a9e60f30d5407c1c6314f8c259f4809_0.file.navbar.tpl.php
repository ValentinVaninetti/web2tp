<?php
/* Smarty version 3.1.39, created on 2021-11-22 23:36:31
  from '/opt/lampp/htdocs/web2tp/templates/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c1b6f57e424_40055813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f007b9782a9e60f30d5407c1c6314f8c259f4809' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/navbar.tpl',
      1 => 1634243274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./adminNavLinks.tpl' => 1,
  ),
),false)) {
function content_619c1b6f57e424_40055813 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-dark justify-content-center">
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
  </div>

</nav><?php }
}
