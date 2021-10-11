{include file="./head.tpl"}

<body>
    {include file="./adminNavLinks.tpl"}

<section class="adminTable">
{include file="./productsTable.tpl"}
<div>
    <div class="divAdd">
        <form method="POST" action="addProduct" enctype="multipart/form-data">
            <select name="category">
                <option value=""></option>
                {foreach from=$allCategories item=$category}
                <option value="{$category->category_id}">{$category->category_name}</option>                  
                {/foreach}                
            </select>
            <input name="productName" type="text" placeholder="Product name">
            <input name="productPrice" type="text" placeholder="Product Price">
            <input name="imgUrl" type="text" placeholder="image url">
            <input name="productDescription" type="text" placeholder="Product Description">
            <button type="submit" id="button-add">add</button>

        </form>
    </div>

    
    
<div>
</section>
{include file="./footer.tpl"}
<script src="./js/index.js"></script>
</body>