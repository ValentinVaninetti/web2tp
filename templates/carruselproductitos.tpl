<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        {foreach from=$all_products item=$product}
            <div class="carousel-item active">
                {foreach from=$all_products item=$product}
                    <tr>
                        <th scope="row">1</th>
                        <td>{$product->product_name}</td>
                        <td>{$product->product_price}</td>
                        {foreach from=$allCategories item=$category}          
                            {if $category->category_id == $product->category_id}
                             <td>{$category->category_name}</td>
                            {/if}       
                {/foreach}
                <img src="{$product->product_img}" width="200" height="200" class="d-block w-100" alt="...">
                <td><p>{$product->products_description}</p></td>
                    </tr>
            </div>
        {/foreach} 
    </div>
</div>