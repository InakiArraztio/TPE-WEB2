<?php
/* Smarty version 5.4.1, created on 2024-10-18 19:46:23
  from 'file:templates/listarPlatos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67129eef60c182_27705450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63b679fa66165eed4589a7f3a7513763778f380' => 
    array (
      0 => 'templates/listarPlatos.tpl',
      1 => 1729273581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67129eef60c182_27705450 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web2\\TPE\\templates';
?><table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Acciones</th>
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
            <td><?php echo $_smarty_tpl->getValue('plato')->id_categoria;?>
</td>
            <td>
                <a href='modificar/<?php echo $_smarty_tpl->getValue('plato')->id_plato;?>
' class='btn btn-primary'>Modificar</a>
                <a href='eliminar/<?php echo $_smarty_tpl->getValue('plato')->id_plato;?>
' class='btn btn-danger'>Eliminar</a>
            </td>
        </tr>  
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php }
}
