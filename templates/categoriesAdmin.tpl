    {include file="./head.tpl"}
<body>
    {include file="./header.tpl"}
    {include file="./adminNavLinks.tpl"}
    <table class="table table-dark">
        <thead>
            <tr>      
                <th scope="col">Category Name</th>
                <th scope="col">Category Description</th>                  
            </tr>
        </thead>
        <tbody> 
            {foreach from=$all_categories item=$category}
                <tr>
                    <td>
                        {$category->category_name}
                    </td>
                    <td>
                        {$category->description}
                    </td>
                    <td>
                        <form method="POST" action="deleteCategory">
                            <button type="submit" id={$category->category_id}>Delete</button>        
                            <input type="hidden" name="category-id" value={$category->category_id}>
                        </form>
                        <form method="POST" action="editCategory">
                            <input name="category_name" type="text" placeholder="{$category->category_name}">
                            <input name="category_description" type="text" placeholder="{$category->description}">
                            <input type="hidden" name="category-id" value={$category->category_id}>
                            <button type="submit" id="{$category->category_id}">Edit</button>
                        </form>
                    </td>            
                </tr>       
            {/foreach}
        </tbody>  
    </table>
    <div class="divAdd">
        <form method="POST" action="addCategory" enctype="multipart/form-data">       
            <input name="category-name" type="text" placeholder="category name">
            <input name="category-description" type="text" placeholder="category description">       
            <button type="submit" id="button-add">add</button>
        </form>
    </div> 
        {include file="./footer.tpl"}
</body>