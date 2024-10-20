<?php
/* Smarty version 5.4.1, created on 2024-10-20 01:18:33
  from 'file:templates/mostrarPlato.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67143e49988eb3_89241795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd89bbb0814448c48367e547c775568bc9dd28771' => 
    array (
      0 => 'templates/mostrarPlato.tpl',
      1 => 1729379901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67143e49988eb3_89241795 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <h1>Detalles del Plato</h1>
    <p>Nombre: <?php echo $_smarty_tpl->getValue('plato')->nombre_plato;?>
</p>
    <p>Precio: <?php echo $_smarty_tpl->getValue('plato')->precio;?>
</p>
    <p>Categoría: 
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('categoria')->id_categoria == $_smarty_tpl->getValue('plato')->id_categoria) {?>
                <?php echo $_smarty_tpl->getValue('categoria')->tipo_categoria;?>

            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </p>
    <a href="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
listar_plato" class="btn btn-secondary">Volver</a>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php }
}
