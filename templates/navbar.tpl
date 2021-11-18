<nav class="navbar navbar-expand-lg navbar-light bg-dark justify-content-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>     
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="products">Products</a>      
      </li>     
      
    </ul>
    {if isset($smarty.session.islogged)}
    <a href="logout" class="btn btn-primary">Logout</a>
    {/if}
    {if isset($smarty.session.isAdmin) && $smarty.session.isAdmin}
    {include file="./adminNavLinks.tpl"}
    {/if}
  </div>

</nav>