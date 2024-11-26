{include file="header.tpl"}
<h2>Platos de la Categoría: {$categorias->tipo_categoria}</h2>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$platos item=plato}
        <tr>
            <td>{$plato->nombre_plato}</td>
            <td>{$plato->precio}</td>
        </tr>
        {/foreach}
    </tbody>
</table>

{include file="footer.tpl"}
