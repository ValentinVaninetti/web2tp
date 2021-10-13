<?php
/* Smarty version 3.1.39, created on 2021-10-06 20:41:55
  from 'D:\xampp\htdocs\web2tp\templates\productsAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615dedf3468210_55085428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eaf4301eb94fcd765b389fc33666ceff1bfd143' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\productsAdmin.tpl',
      1 => 1633545578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./navbar.tpl' => 1,
    'file:./productsTable.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_615dedf3468210_55085428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<?php $_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="adminTable">
<?php $_smarty_tpl->_subTemplateRender("file:./productsTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
<button type="button" class="adm-btn">agregar</button>
<button type="button" class="adm-btn">editar</button>
<button type="button" class="adm-btn">eliminar</button>
<div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body><?php }
}
