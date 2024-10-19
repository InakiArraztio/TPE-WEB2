{include file="header.tpl"}
{include file="formCategoria.tpl"}
    <ol class="list-group">
        {foreach from=$categorias item=categoria}
            <li class="list-group-item">
                <h4>
                    <a href="listar_plato_categoria/{$categoria->id_categoria}" class="text-decoration-none">
                        {$categoria->tipo_categoria}
                    </a>
                </h4>
                <form action="modificar_categoria" method="POST" class="form-inline">
                    <input type="hidden" name="id" value="{$categoria->id_categoria}">
                    <input type="text" name="categoria" value="" required class="form-control mr-2">
                    <a href='eliminar_categoria/{$categoria->id_categoria}' class='btn btn-danger mr-2'>Eliminar</a>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
            </li>
        {/foreach}
    </ol>
{include file="footer.tpl"}

