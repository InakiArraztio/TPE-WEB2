{include file="header.tpl"}

    <h1>Detalles del Plato</h1>
    <p>Nombre: {$plato->nombre_plato}</p>
    <p>Precio: {$plato->precio}</p>
    <p>Categoría: 
        {foreach from=$categorias item=categoria}
            {if $categoria->id_categoria == $plato->id_categoria}
                {$categoria->tipo_categoria}
            {/if}
        {/foreach}
    </p>
    <a href="{$BASE_URL}listar_plato" class="btn btn-secondary">Volver</a>

{include file="footer.tpl"}

