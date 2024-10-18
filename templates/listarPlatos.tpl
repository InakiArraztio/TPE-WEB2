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
    {foreach from=$platos item=$plato}
        <tr>
            <td>{$plato->nombre_plato}</td>
            <td>{$plato->precio}</td>
            <td>{$plato->id_categoria}</td>
            <td>
                <a href='modificar/{$plato->id_plato}' class='btn btn-primary'>Modificar</a>
                <a href='eliminar/{$plato->id_plato}' class='btn btn-danger'>Eliminar</a>
            </td>
        </tr>  
    {/foreach}
    </tbody>
</table>
