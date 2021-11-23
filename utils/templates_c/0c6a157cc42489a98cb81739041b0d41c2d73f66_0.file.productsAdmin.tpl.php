<?php
/* Smarty version 3.1.39, created on 2021-11-22 23:38:33
  from '/opt/lampp/htdocs/web2tp/templates/productsAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c1be9127327_08795436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c6a157cc42489a98cb81739041b0d41c2d73f66' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/productsAdmin.tpl',
      1 => 1634243274,
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
function content_619c1be9127327_08795436 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
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
