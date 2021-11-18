{include file="./head.tpl" }

<body>
    {include file="./header.tpl"}
    
    {literal}
        <div id="app" class="container" v-for=comment in comments>
            <p>{{comment.comment}}</p>

        </div>
    {/literal}
    
    

</body>

{include file="./footer.tpl" }