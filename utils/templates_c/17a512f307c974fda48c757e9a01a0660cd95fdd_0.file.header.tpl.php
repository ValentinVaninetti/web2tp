<?php
/* Smarty version 3.1.39, created on 2021-10-07 06:08:44
  from 'D:\xampp\htdocs\web2tp\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e72cc04fc98_31515862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a512f307c974fda48c757e9a01a0660cd95fdd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\header.tpl',
      1 => 1633579709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e72cc04fc98_31515862 (Smarty_Internal_Template $_smarty_tpl) {
?>  <header class="Header">
    <div class="titleContainer" >
    <h1 class="title">Surf Shop</h1>
    </div>
    <div class="username"><p>Hello! <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->username;?>
, nice to see you around.</p></div>
  </header>
    
  
  
<?php }
}
