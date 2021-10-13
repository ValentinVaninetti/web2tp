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
            
        </tr>    
        
        {/foreach}
    </tbody>  
</table>
<div class="divAdd">
    <form method="POST" action="addCategory" enctype="multipart/form-data">       
        <input name="category-name" type="text" placeholder="Product name">
        <input name="category-description" type="text" placeholder="Product Price">       
        <button type="submit" id="button-add">add</button>

    </form>
</div>   

    {include file="./footer.tpl"}

</body>