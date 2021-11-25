<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:48:04
  from 'D:\xampp\htdocs\web2tp\templates\productsAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eeb54084a78_32737603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eaf4301eb94fcd765b389fc33666ceff1bfd143' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\productsAdmin.tpl',
      1 => 1637804791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./productsTable.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_619eeb54084a78_32737603 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="adminBody">
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <section class="adminTable">
        <?php $_smarty_tpl->_subTemplateRender("file:./productsTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section> 
    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
><?php }
}
