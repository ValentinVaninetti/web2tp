<?php
/* Smarty version 3.1.39, created on 2021-11-22 23:36:31
  from '/opt/lampp/htdocs/web2tp/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c1b6f6ea392_06276414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f84813f6c09e7418f6cf99036f9f992d175a691' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/home.tpl',
      1 => 1634243274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./slides.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_619c1b6f6ea392_06276414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="homeBody">
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php $_smarty_tpl->_subTemplateRender("file:./slides.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
</body>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
>
<?php }
}
