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
        
        
    {/foreach}
</body>



{include file="./footer.tpl" }