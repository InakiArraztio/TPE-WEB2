<?php
/* Smarty version 5.4.1, created on 2024-10-30 15:54:20
  from 'file:templates/listarPlatos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6722489c7b2fe7_38483925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63b679fa66165eed4589a7f3a7513763778f380' => 
    array (
      0 => 'templates/listarPlatos.tpl',
      1 => 1730299812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formPlato.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6722489c7b2fe7_38483925 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web2\\TPE\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:formPlato.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

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
<?php if ((null !== ($_smarty_tpl->getValue('platoBuscado') ?? null))) {?>
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
                <td><?php echo $_smarty_tpl->getValue('platoBuscado')->nombre_plato;?>
</td>
                <td><?php echo $_smarty_tpl->getValue('platoBuscado')->precio;?>
</td>
                <td><?php echo $_smarty_tpl->getValue('platoBuscado')->categoria;?>
</td> <!-- Muestra la categoría del plato -->
            </tr>
        </tbody>
    </table>
<?php } elseif ((null !== ($_smarty_tpl->getValue('error') ?? null))) {?>
    <!-- Si no se encuentra el plato, muestra un mensaje de error -->
    <div class="alert alert-danger mt-4">
        <?php echo $_smarty_tpl->getValue('error');?>

    </div>
<?php }?>

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
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('platos'), 'plato');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plato')->value) {
$foreach0DoElse = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->getValue('plato')->nombre_plato;?>
</td>
            <td><?php echo $_smarty_tpl->getValue('plato')->precio;?>
</td>
            <td>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach1DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('categoria')->id_categoria == $_smarty_tpl->getValue('plato')->id_categoria) {?>
                        <?php echo $_smarty_tpl->getValue('categoria')->tipo_categoria;?>
  <!-- Muestra el tipo de categoría correspondiente -->
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </td>
            <td>
                <!-- Formulario para modificar el plato -->
                <form action="modificar_plato" method="POST" class="form-inline">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('plato')->id_plato;?>
">
                    <div class="form-group mr-2">
                        <input type="text" name="plato" value="" required class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group mr-2">
                        <input type="text" name="precio" value="" required class="form-control" placeholder="Precio">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Modificar</button>
                    <a href='eliminar_plato/<?php echo $_smarty_tpl->getValue('plato')->id_plato;?>
' class='btn btn-danger'>Eliminar</a>
                </form>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<?php }
}
