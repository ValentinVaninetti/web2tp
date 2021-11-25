<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:47:25
  from 'D:\xampp\htdocs\web2tp\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eeb2d8237c0_60856046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f39230d1f9303d6ea26e66139aaf1de2d5c1c8b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\products.tpl',
      1 => 1637804791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./productsCards.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_619eeb2d8237c0_60856046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="homeBody">
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="bg-dark ">
        <h2 class="titleWelcome">Welcome!</h2>
        <p class="sub-title">
            We are Surf Shop! We are backed by many years of experience in the sale of surfing elements. Find everything you need here and much more!
        </p>
    </div>     
    <section class="productSection">   
        <?php $_smarty_tpl->_subTemplateRender("file:./productsCards.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/comments.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
</body>

<?php }
}
