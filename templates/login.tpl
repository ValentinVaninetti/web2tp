{include file="./head.tpl"}

<body>
{include file="./header.tpl"}
{include file="./navbar.tpl"} 

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="data:image/jpeg;base64,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" style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are The Pitotes Team</h4>
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
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a Surf Shop</h4>
                <p class="small mb-0"></p>
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