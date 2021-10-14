<div>
  <form method="POST" action="search">
    <div class="d-flex flex-row col-4">
      <select class="form-control" name="category-id">
        <option value="">Get all products</option>
          {foreach from=$allCategories item=$category}
            <option value="{$category->category_id}">{$category->category_name}</option>                  
          {/foreach}                
      </select>      
      <button class="btn btn-primary ml-2" type="submit">Search</button>
    </div>
  </form>
</div>
     
<div class="container">
   <h1 class="text-center text-muted">Product catalog</h1>
   <div class="row flow-offset-1">
   {foreach from=$all_products item=$product}   
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><img src={$product->product_img} alt="" style="height: 200px">
         <div class="caption">
           <h4>
              {$product->product_name}
           </h6>
           <h5>
              {$product->product_description}
           </h5>           
             <span class="price-sale">
              ${$product->product_price}USD
            </span>
         </div>
       </div>
     </div>  
    {/foreach}  
 </div>
  
</div>



  
