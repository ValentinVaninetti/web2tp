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
                            <select name="adminEdit" class="custom-select" style="width: 300px;">  
                                <option value="">Convert to Admin?</option>    
                                <option value="1">1</option> 
                                <option value="0">0</option>   
                            </select>  
                            <input type="hidden" name="userEdit" value={$user->id_user}> 
                            <button type="submit" class="btn btn-secondary" id="{$user->id_user}">Edit</button>           
                        </form>
                        </td>
                    </tr>                
                {/foreach}
            </tbody>  
    </table>
      
    {include file="./footer.tpl"}
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>