{include file="./head.tpl"}

<body>

{include file="./header.tpl"}

{include file="./navbar.tpl"}
<form method="POST" action="signup">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="username" placeholder="username">
      <input type="text" class="form-control" name="password" placeholder="password">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="email" placeholder="email">
    </div>
  </div>
  <div class="form-group">
    <button class="btn btn-secondary btn-block" type="submit">SignUp</button>
    </div>
</form>


</body>