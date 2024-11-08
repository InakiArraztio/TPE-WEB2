<?php
/* Smarty version 5.4.1, created on 2024-11-08 15:51:17
  from 'file:templates\listarPlatosCategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672e2565688705_90430615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2700a5d34920e1b4d1bd3aada70e7d6a757319c' => 
    array (
      0 => 'templates\\listarPlatosCategoria.tpl',
      1 => 1731077471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_672e2565688705_90430615 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web2\\TPE\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<h2>Platos de la Categoría: <?php echo $_smarty_tpl->getValue('categorias')->tipo_categoria;?>
</h2>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <?php if ($_smarty_tpl->getValue('user')) {?>
                <th>Accion</th>
            <?php }?>
             <!-- Columna para los botones de acciones -->
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
            <?php if ($_smarty_tpl->getValue('user')) {?>
            <td>
                <a href='eliminar_plato/<?php echo $_smarty_tpl->getValue('plato')->id_plato;?>
' class='btn btn-danger'>Eliminar</a>
            </td>
            <?php }?>
        </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
