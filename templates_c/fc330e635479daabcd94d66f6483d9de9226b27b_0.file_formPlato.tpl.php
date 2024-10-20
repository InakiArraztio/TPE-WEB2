<?php
/* Smarty version 5.4.1, created on 2024-10-19 17:36:20
  from 'file:formPlato.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6713d1f43786f1_72288147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc330e635479daabcd94d66f6483d9de9226b27b' => 
    array (
      0 => 'formPlato.tpl',
      1 => 1729292584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6713d1f43786f1_72288147 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2\\templates';
?><!DOCTYPE html>
<html lang="en">

<!-- head -->
<form action="agregar_plato" method="POST" class="mb-3">
  <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" required>
  </div>
  
  <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" class="form-control" name="precio" required>
  </div>
  
  <div class="mb-3">
      <label for="categoria" class="form-label">Categoría</label>
      <select class="form-control" name="id_categoria" required>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach2DoElse = false;
?>
              <option value="<?php echo $_smarty_tpl->getValue('categoria')->id_categoria;?>
"><?php echo $_smarty_tpl->getValue('categoria')->tipo_categoria;?>
</option>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
<?php }
}
