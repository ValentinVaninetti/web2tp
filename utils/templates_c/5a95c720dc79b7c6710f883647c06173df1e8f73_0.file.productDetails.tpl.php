<?php
/* Smarty version 3.1.39, created on 2021-11-23 02:45:58
  from '/opt/lampp/htdocs/web2tp/templates/productDetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c47d659fd45_92658358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a95c720dc79b7c6710f883647c06173df1e8f73' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/productDetails.tpl',
      1 => 1637434033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./modal.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_619c47d659fd45_92658358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="ProductBody">
<?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'details');
$_smarty_tpl->tpl_vars['details']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['details']->value) {
$_smarty_tpl->tpl_vars['details']->do_else = false;
?>

        <img src=<?php echo $_smarty_tpl->tpl_vars['details']->value->product_img;?>
 alt="" style="height: 200px">
            <div class="caption">
            <h4>
                <?php echo $_smarty_tpl->tpl_vars['details']->value->product_name;?>

            </h6>
            <h5>
                <?php echo $_smarty_tpl->tpl_vars['details']->value->product_description;?>

            </h5>           
                <span class="price-sale">
                $<?php echo $_smarty_tpl->tpl_vars['details']->value->product_price;?>
USD
                </span>            
            </div>
            <a href="products">Go Back</a>
            
            <?php $_smarty_tpl->_subTemplateRender("file:./modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            
            <button type="button" name="product_id"
                    data-toggle="modal" data-target="#exampleModal"
                    class="button_comments btn btn-primary"                    
                    value="<?php echo $_smarty_tpl->tpl_vars['details']->value->product_id;?>
" 
                    id="<?php echo $_smarty_tpl->tpl_vars['details']->value->product_id;?>
"
                    >Show Comments
            </button>     
        
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>



<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
