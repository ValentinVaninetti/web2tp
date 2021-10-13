    {include file="./head.tpl"}

<body>
    {include file="./header.tpl"}
    {include file="./adminNavLinks.tpl"}

    <table class="table table-dark">
            <thead>
                <tr>      
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>      
                    <th scope="col">isAdmin</th>      
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
                </tr>    
                
                {/foreach}
            </tbody>  
    </table>
      
    {include file="./footer.tpl"}
</body>