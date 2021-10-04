<table class="table table-dark">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">img</th>
    </tr>
  </thead>
  <tbody>   
    {foreach from=$all_products item=$product}
      <tr>
        <th scope="row">1</th>
        <td>{$product->product_name}</td>
        <td>{$product->product_price}</td>
        <td>{$product->product_img}</td>
      </tr>
    {/foreach}
    
  </tbody>
</table>