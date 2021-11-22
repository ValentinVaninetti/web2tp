
<table class="table table-dark">
  <thead>
    <tr>      
      <th scope="col">Name</th>
      <th scope="col">Price</th>      
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Buttons</th>
    </tr>
  </thead>
  <tbody>   
    {foreach from=$all_products item=$product}
      <tr>        
        <td>{$product->product_name}</td>
        <td>${$product->product_price}</td>
        {foreach from=$allCategories item=$category}          
           {if $category->category_id == $product->category_id}
             <td>{$category->category_name}</td>
           {/if}       
        {/foreach}
        
        <td><img src="../productImg/{$product->product_img}" class="img-responsive product-img" width="200" height="200"></td>
        <td><p>{$product->product_description}</p></td>
        <td>    
            <form method="POST" action="deleteProduct">
              <button type="submit" id={$product->product_id} class="btn btn-secondary">Delete</button>        
              <input type="hidden" name="productid" value={$product->product_id}>
            </form>   
                  
            <form method="POST" action="editProduct">
              <select name="categoryEdit" class="custom-select" style="width: 300px;">
                <option value="">Select category</option>
                  {foreach from=$allCategories item=$category}
                    <option value="{$category->category_id}">{$category->category_name}</option>                  
                  {/foreach}                
              </select>
              <input name="productNameEdit" class="form-control" style="width: 300px;" type="text" placeholder="{$product->product_name}">            
              <input name="productPriceEdit" class="form-control" style="width: 300px;" type="text" placeholder="{$product->product_price}">
              <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="productImage" class="form-control-file" id="exampleFormControlFile1">
              <input name="productDescriptionEdit" class="form-control" style="width: 300px;" type="text" placeholder="{$product->product_description}">
              <input type="hidden" name="productidEdit" value={$product->product_id}>
              <button type="submit" class="btn btn-secondary" id="{$product->product_id}">Edit</button>
            </form>
        </td>        
      </tr>
    {/foreach}    
  </tbody>
</table>
<div class="mb-4">
    <label class="font-weight-bold ml-3">
      Add new product
    </label>
    <form method="POST" action="addProduct" enctype="multipart/form-data"  class="d-flex flex-row">
        <select name="category"  class="custom-select col-2">
            <option value="">Select Category</option>
            {foreach from=$allCategories item=$category}
            <option value="{$category->category_id}">{$category->category_name}</option>                  
            {/foreach}                
        </select>
        <input name="productName"  class="form-control col-2 ml-1" type="text" placeholder="Product name">
        <input name="productPrice"  class="form-control col-2 ml-1" type="text" placeholder="Product Price">        
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" name="productImage" class="form-control-file" id="exampleFormControlFile1">
          
        
        <input name="productDescription"  class="form-control col-2 ml-1" type="text" placeholder="Product Description">
        <button type="submit" id="button-add" 
                class="btn btn-secondary  ml-2">
          Add
        </button>
    </form>
</div>          

