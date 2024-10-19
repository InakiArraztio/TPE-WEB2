{include file="header.tpl"}
{include file="formCategoria.tpl"}
    {foreach from=$categorias item=categoria}
                <form action="modificar_categoria" method="POST" class="form-inline">
                    <label for="tipo_categoria" class="mr-2">{$categoria->tipo_categoria}</label>
                    <input type="hidden" name="id" value="{$categoria->id_categoria}">
                    <input type="text" name="categoria" value="" required class="form-control mr-2">
                    <a href='eliminar_categoria/{$categoria->id_categoria}' class='btn btn-danger'>Eliminar</a>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
    {/foreach}


{include file="footer.tpl"}


