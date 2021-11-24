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
  <form action="advancedSearch" method="post">
      <div class="search-group d-flex flex-row col-4">
        <input type="text" name="special" placeholder="Advanced Search">
        <button class="btn btn-secondary btn-info-search" type="submit">Search</button>
      </div>
  </form>
</div>     
<div class="container">
  <h1 class="text-center text-muted">
    Product catalog
  </h1>
    <div class="row flow-offset-1">   
      {foreach from=$all_products item=$product}   
        <div class="col-xs-6 col-md-4">
          <div class="product tumbnail thumbnail-3 border border-dark" style="height: 100%;" >
            <img src="Img/{$product->product_img}" alt="" style="height: 200px">
              <div class="caption ">
                <h4>
                    {$product->product_name}
                </h4>         
                  <span class="price-sale">
                    ${$product->product_price}USD
                  </span>
                  <form method="POST" action="productDetails">
                    <input type="hidden" name="product_id" value="{$product->product_id}">
                    <button type="submit" class="btn btn-secondary" name ="product_id" value="{$product->product_id}"> Show More!</button>
                  </form>       
                  {include file="./modal.tpl"}                
                  <button type="button" name="product_id"
                    data-toggle="modal" data-target="#exampleModal"
                    class="button_comments btn btn-primary"                    
                    value="{$product->product_id}" 
                    id="{$product->product_id}"
                    data-objectid="{$product->product_id}">Show Comments                  
                  </button>              
              </div>
          </div>
        </div>  
    {/foreach}  
  </div> 
</div>



  
