<div>
  <form method="POST">
    <div class="d-flex flex-row">
      <select name="category">
        <option value=""></option>
      {foreach from=$allCategories item=$category}
        <option value="{$category->category_id}">{$category->category_name}</option>        
      {/foreach}                
      </select>
    <button type="submit">Search</button>
    </div>
  </form>
</div>
  <!--<div class="d-flex flex-row"> 
  {foreach from=$all_products item=$product}
      <div id="carouselExampleInterval" class="carousel slide col-6" data-bs-ride="carousel">
        <div class="carousel-inner">                  
            <div class="carousel-item active" data-bs-interval="1000000">
              <div class="carousel-item" >
                <img src="{$product->product_img}" width="200" height="200" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{$product->product_name}</h5>
                  <p>{$product->products_price}</p>
                </div>
              </div>
            </div>          
        </div>  
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
      </div>

      <div class="col-6">
        <p>{$product->products_description}</p>
      </div>
    {/foreach} 
  </div>-->

  <div>

  <ul>
  {foreach from=$all_products item=$product}

      <li>
      {$product->product_name}
      </li>
      <li>
      {$product->product_price}
      </li>
      <li>
      {$product->products_description}
      </li>
  {/foreach}
  </ul>
  </div>
