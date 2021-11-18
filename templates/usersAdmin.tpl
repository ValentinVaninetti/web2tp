    {include file="./head.tpl"}

<body>
    {include file="./header.tpl"}   
    <table class="table table-dark">
            <thead>
                <tr>      
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>      
                    <th scope="col">isAdmin</th>    
                    <th scope="col">AdminButtons</th>  
                </tr>
            </thead>
            <tbody> 
                {foreach from=$all_users item=$user}
                    <tr>
                        <td>
                            {$user->username}
                        </td>
                        <td>
                            {$user->email}
                        </td>
                        <td>
                            {$user->isAdmin}
                        </td>
                        <td>
                        <form method="POST" action="editUser">
                            <input name="adminEdit" class="form-control" style="width: 300px;" type="text" placeholder="{$user->isAdmin}">
                            <input type="hidden" name="userid" value="{$user->id_user}"> 
                            <button type="submit" class="btn btn-secondary" id="{$user->id_user}">Edit</button>           
                        </form>
                        <form method="POST" action="deleteUser">
                            <input type="hidden" name="isAdmin" value="{$user->isAdmin}">
                            <input type="hidden" name="user_id" value="{$user->id_user}"> 
                            <button type="submit" class="btn btn-secondary" id="{$user->id_user}">Delete</button>
                        </form>
                        </td>
                    </tr>                
                {/foreach}
            </tbody>  
    </table>
      
    {include file="./footer.tpl"}
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>