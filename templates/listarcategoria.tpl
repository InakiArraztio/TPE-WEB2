{include file="header.tpl"}
{include file="formCategoria.tpl"}
<table>
    <thead>
        <tr>
            <th>Categoría</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$categorias item=categoria}
        <tr>

            <td>{$categoria->tipo_categoria}</td>
            <td>
                <a href='modificar_categoria/{$categoria->id_categoria}' class='btn btn-primary'>Modificar</a>
                <a href='eliminar_categoria/{$categoria->id_categoria}' class='btn btn-danger'>Eliminar</a>
            </td>
        </tr>  
    {/foreach}
    </tbody>
</table>
{include file="footer.tpl"}


