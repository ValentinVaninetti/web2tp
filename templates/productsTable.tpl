
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
        <td>        
        <button class="buttonsEdit" id={$product->products_id}>Edit</button>
            <div class="divEdit" id="{$product->products_id}">
              <form method="POST" action="editProduct" class="edit-form">
                  <select name="category">
                      <option value=""></option>
                      {foreach from=$allCategories item=$category}
                      <option value="{$category->category_id}">{$category->category_name}</option>                  
                      {/foreach}                
                  </select>
                  <input name="productName" type="text" placeholder="{$product->product_name}">
                  <input name="productPrice" type="text" placeholder="{$product->product_price}">
                  <input name="imgUrl" type="text" placeholder="{$product->product_img}">
                  <input name="productDescription" type="text" placeholder="{$product->product_description}">                
                  <button type="submit" id="{$product->products_id}">edit</button>
                  <input type="hidden" name="productid" value="{$product->products_id}">
              </form>    
            </div>  
            <form method="POST" action="deleteProduct">
            <button type="submit" id={$product->products_id}>Delete</button>        
            <input type="hidden" name="productid" value={$product->products_id}>
            </form>
        </td>
        
      </tr>
    {/foreach}
    
  </tbody>
</table>
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
