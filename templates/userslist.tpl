{include file="./head.tpl"};

<body>
 <ul>
 {foreach from=$all_users item=user}
    <li>
    {$user};
    </li> 
 {/foreach}
    
 </ul>
 {include file="./footer.tpl"}
</body>