<?php
/* Smarty version 5.4.1, created on 2024-10-19 17:36:15
  from 'file:templates\listarcategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6713d1efee6a40_32409554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b98a9358702e25133a404b4d4111dd6b32705120' => 
    array (
      0 => 'templates\\listarcategoria.tpl',
      1 => 1729352058,
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
function content_6713d1efee6a40_32409554 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:formCategoria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <ol class="list-group">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
            <li class="list-group-item">
                <h4>
                    <a href="listar_plato_categoria/<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
" class="text-decoration-none">
                        <?php echo $_smarty_tpl->getValue('categoria')->tipo_categoria;?>

                    </a>
                </h4>
                <form action="modificar_categoria" method="POST" class="form-inline">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
">
                    <input type="text" name="categoria" value="" required class="form-control mr-2">
                    <a href='eliminar_categoria/<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
' class='btn btn-danger mr-2'>Eliminar</a>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ol>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php }
}
