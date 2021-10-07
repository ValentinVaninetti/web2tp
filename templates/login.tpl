{include file="./head.tpl"}

<body>
{include file="./header.tpl"}
{include file="./navbar.tpl"} 

<section class="h-100 gradient-form" style="background-color: rgb(9, 99, 172);">
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

                <form method="POST">
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
                  {if $error_code != ""}
                    <div class="alert">
                        <p>{$error_code}</p>
                    </div>
                  {/if}
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
{include file="./footer.tpl"}

</body>