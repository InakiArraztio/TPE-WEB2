{include file="header.tpl"}
{include file="formCategoria.tpl"}
<h2>Categorias</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Categoría</th>
            <th>Cantidad de Platos</th>
            {if $user}
                <th>Acciones</th>
            {/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                <td>
                    <a href="listar_plato_categoria/{$categoria->id_categoria}" class="text-decoration-none">
                        {$categoria->tipo_categoria}
                    </a>
                </td>
                <td>
                    <!-- Aquí puedes incluir la variable que contenga la cantidad de platos por categoría -->
                    {count($categoria->cantidadPlatos)}
                </td>
                {if $user}
                    <td>
                        <form action="modificar_categoria" method="POST" class="form-inline d-inline">
                            <input type="hidden" name="id" value="{$categoria->id_categoria}">
                            <input type="text" name="categoria" value="" required class="form-control mr-2">
                            <a href='eliminar_categoria/{$categoria->id_categoria}' class='btn btn-danger mr-2'>Eliminar</a>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </form>
                    </td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>
{if $error} 
    <div class="alert alert-danger mt-3">
        {$error}
    </div>
{/if}
{include file="footer.tpl"}
