{if $isLogged == true}
    <div class="card" style="width: 18rem;">  
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{$user->username}</h5>
            <p class="card-text">{$user->email}</p>
            <a href="logout" class="btn btn-primary">Logout</a>
        </div>
    </div>
{/if}