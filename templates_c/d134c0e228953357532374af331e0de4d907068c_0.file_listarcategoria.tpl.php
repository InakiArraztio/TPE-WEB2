<?php
/* Smarty version 5.4.1, created on 2024-10-18 20:50:18
  from 'file:templates/listarcategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6712adea19a720_02707424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd134c0e228953357532374af331e0de4d907068c' => 
    array (
      0 => 'templates/listarcategoria.tpl',
      1 => 1729277416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6712adea19a720_02707424 (\Smarty\Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->getValue('categoria')->nom_categoria;?>
</td>
            <td>
                <a href='modificar/<?php echo $_smarty_tpl->getValue('categoria')->id;?>
' class='btn btn-primary'>Modificar</a>
                <a href='eliminar/<?php echo $_smarty_tpl->getValue('categoria')->id;?>
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
