{include file="header.tpl"}
{include file="formPlato.tpl"}

<!-- Formulario para filtrar por ID de plato -->
<div class="mt-4">
    <form method="POST" action="buscar_plato">
        <div class="form-group">
            <label for="id_plato">Buscar Plato por ID</label>
            <input type="number" class="form-control w-25" id="platoID" name="id_plato" placeholder="Ingrese el ID del plato" required>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>

<!-- Mostrar el resultado de la búsqueda del plato por ID -->
{if isset($platoBuscado)}
    <h3 class="mt-4">Resultado de la búsqueda:</h3>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$platoBuscado->nombre_plato}</td>
                <td>{$platoBuscado->precio}</td>
                <td>{$platoBuscado->categoria}</td> <!-- Muestra la categoría del plato -->
            </tr>
        </tbody>
    </table>
{elseif isset($error)}
    <!-- Si no se encuentra el plato, muestra un mensaje de error -->
    <div class="alert alert-danger mt-4">
        {$error}
    </div>
{/if}

<!-- Tabla con todos los platos -->
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


