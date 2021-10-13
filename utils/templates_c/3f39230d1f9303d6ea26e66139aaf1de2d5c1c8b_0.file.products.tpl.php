<?php
/* Smarty version 3.1.39, created on 2021-10-06 06:32:37
  from 'D:\xampp\htdocs\web2tp\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615d26e5439198_52893177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f39230d1f9303d6ea26e66139aaf1de2d5c1c8b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\products.tpl',
      1 => 1633494238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./navbar.tpl' => 1,
    'file:./productsTable.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_615d26e5439198_52893177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <section>   
    <?php $_smarty_tpl->_subTemplateRender("file:./productsTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body><?php }
}
