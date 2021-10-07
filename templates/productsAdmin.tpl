{include file="./head.tpl"}

<body>
{if $condicion === true }
    {include file="./adminNavLinks.tpl"}
{/if}
<section class="adminTable">
{include file="./productsTable.tpl"}
<div>
<button type="button" class="adm-btn">agregar</button>
<button type="button" class="adm-btn">editar</button>
<button type="button" class="adm-btn">eliminar</button>
<div>
</section>
{include file="./footer.tpl"}
</body>