{include file="header.tpl"}
{include file="formPlato.tpl"}
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$platos item=plato}
        <tr>
            <td>{$plato->nombre_plato}</td>
            <td>{$plato->precio}</td>
            <td>
            {foreach from=$categorias item=categoria}
                {if $categoria->id_categoria == $plato->id_categoria}
                    {$categoria->tipo_categoria}  <!-- Muestra el tipo de categoría correspondiente -->
                {/if}
            {/foreach}
            </td>
            <td>
                <a href='modificar_plato/{$plato->id_plato}' class='btn btn-primary'>Modificar</a>
                <a href='eliminar_plato/{$plato->id_plato}' class='btn btn-danger'>Eliminar</a>
            </td>
        </tr>  
    {/foreach}
    </tbody>
</table>
{include file="footer.tpl"}
