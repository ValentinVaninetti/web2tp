<?php
/* Smarty version 3.1.39, created on 2021-11-23 02:08:18
  from '/opt/lampp/htdocs/web2tp/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c3f025a2153_79466762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eba0e7111d01da542a4a76e4f2d810bd2a5a819' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/login.tpl',
      1 => 1634243274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_619c3f025a2153_79466762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

<body class="homeBody">

<section class="h-100 gradient-form" style="background-color: rgb(0,0,0,0.5);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col-xl-10">
        <div class="card text-black" id="div-Login" style="height: 800px;">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="./images/Tsunami_by_hokusai_19th_century.jpg" style="width: 100%;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">The team welcomes you</h4>
                </div>

                <form method="POST" action="login">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="formLoginEmail" name="userEmail" class="form-control" placeholder="email address"/>
                    <label class="form-label" for="formLoginEmail">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="formLoginPwd" name="userPwd" class="form-control" />
                    <label class="form-label" for="formLoginPwd">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['error_code']->value != '') {?>
                    <div class="alert">
                        <p><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
</p>
                    </div>
                  <?php }?>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="signup"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>
                </form>
              </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-black px-3 py-4 p-md-5 mx-md-4" >
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            </div>     
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
><?php }
}
