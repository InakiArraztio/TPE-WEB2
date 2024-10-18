<?php
/* Smarty version 5.4.1, created on 2024-10-18 22:40:58
  from 'file:templates\listarcategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6712c7da03ebc7_55190446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2cc556d77f8191b82fb7988e5db5783669101fe' => 
    array (
      0 => 'templates\\listarcategoria.tpl',
      1 => 1729284048,
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
function content_6712c7da03ebc7_55190446 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web2\\TPE\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:formCategoria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<table>
    <thead>
        <tr>
            <th>Categoría</th>
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

            <td><?php echo $_smarty_tpl->getValue('categoria')->tipo_categoria;?>
</td>
            <td>
                <a href='modificar_categoria/<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
' class='btn btn-primary'>Modificar</a>
                <a href='eliminar_categoria/<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
' class='btn btn-danger'>Eliminar</a>
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
