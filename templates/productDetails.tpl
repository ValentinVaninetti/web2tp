{include file="./head.tpl" }

<body class="ProductBody">
{include file="./header.tpl" }
    {foreach from=$product item=$details}

        <img src={$details->product_img} alt="" style="height: 200px">
            <div class="caption">
            <h4>
                {$details->product_name}
            </h6>
            <h5>
                {$details->product_description}
            </h5>           
                <span class="price-sale">
                ${$details->product_price}USD
                </span>            
            </div>
            <a href="products">Go Back</a>
            
            {include file="./modal.tpl"}
            
            <button type="button" name="product_id"
                    data-toggle="modal" data-target="#exampleModal"
                    class="button_comments btn btn-primary"                    
                    value="{$details->product_id}" 
                    id="{$details->product_id}"
                    >Show Comments
            </button>     
        
        
    {/foreach}
</body>



{include file="./footer.tpl" }