
<table class="table table-dark">

  <thead>
    <tr>      
      <th scope="col">Name</th>
      <th scope="col">Price</th>      
      <th scope="col">Category</th>
      <td scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Buttons</th>
    </tr>
  </thead>
  <tbody>   
    {foreach from=$all_products item=$product}
      <tr>        
        <td>{$product->product_name}</td>
        <td>{$product->product_price}</td>
        {foreach from=$allCategories item=$category}          
           {if $category->category_id == $product->category_id}
             <td>{$category->category_name}</td>
           {/if}       
        {/foreach}
        
        <td><img src="{$product->product_img}" width="200" height="200"></td>
        <td><p>{$product->products_description}</p></td>
        <td><button type="submit">Edit</button>
        
        <form method="POST" action="deleteProduct">
        <button type="submit" id={$product->product_id}>Delete</button>        
        <input type="hidden" name="productid" value={$product->product_id}>
        </form>
        </td>
        
      </tr>
    {/foreach}
    
  </tbody>
</table>