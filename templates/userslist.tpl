{include file="./head.tpl"};

<body>
 <ul>
 {foreach from=$all_users item=item key=key name=name}
    <li>
    {$item->username};
    </li> 
 {/foreach}
    
 </ul>
</body>