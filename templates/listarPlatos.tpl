{include file="header.tpl"}
{include file="formPlato.tpl"}
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Acciones</th> <!-- Columna para los botones de acciones -->
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
                <!-- Formulario para modificar el plato -->
                <form action="modificar_plato" method="POST" class="form-inline">
                    <input type="hidden" name="id" value="{$plato->id_plato}">
                    <div class="form-group mr-2">
                        <input type="text" name="plato" value="" required class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group mr-2">
                        <input type="text" name="precio" value="" required class="form-control" placeholder="Precio">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Modificar</button>
                    <a href='eliminar_plato/{$plato->id_plato}' class='btn btn-danger'>Eliminar</a>
                </form>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>


{include file="footer.tpl"}

