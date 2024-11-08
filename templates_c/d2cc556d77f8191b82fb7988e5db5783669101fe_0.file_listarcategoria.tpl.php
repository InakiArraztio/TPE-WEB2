<?php
/* Smarty version 5.4.1, created on 2024-11-08 16:10:30
  from 'file:templates\listarcategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672e29e6cd4b92_02608446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2cc556d77f8191b82fb7988e5db5783669101fe' => 
    array (
      0 => 'templates\\listarcategoria.tpl',
      1 => 1731078626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formCategoria.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_672e29e6cd4b92_02608446 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web2\\TPE\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:formCategoria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<h2>Categorias</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Categoría</th>
            <th>Cantidad de Platos</th>
            <?php if ($_smarty_tpl->getValue('user')) {?>
                <th>Acciones</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td>
                    <a href="listar_plato_categoria/<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
" class="text-decoration-none">
                        <?php echo $_smarty_tpl->getValue('categoria')->tipo_categoria;?>

                    </a>
                </td>
                <td>
                    <!-- Aquí puedes incluir la variable que contenga la cantidad de platos por categoría -->
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('categoria')->cantidadPlatos);?>

                </td>
                <?php if ($_smarty_tpl->getValue('user')) {?>
                    <td>
                        <form action="modificar_categoria" method="POST" class="form-inline d-inline">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
">
                            <input type="text" name="categoria" value="" required class="form-control mr-2">
                            <a href='eliminar_categoria/<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
' class='btn btn-danger mr-2'>Eliminar</a>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </form>
                    </td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php if ($_smarty_tpl->getValue('error')) {?> 
    <div class="alert alert-danger mt-3">
        <?php echo $_smarty_tpl->getValue('error');?>

    </div>
<?php }
$_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
