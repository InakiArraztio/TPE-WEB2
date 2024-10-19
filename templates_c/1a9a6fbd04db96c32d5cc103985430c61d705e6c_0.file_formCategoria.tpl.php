<?php
/* Smarty version 5.4.1, created on 2024-10-19 01:50:41
  from 'file:formCategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6712f451123ef7_50361550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a9a6fbd04db96c32d5cc103985430c61d705e6c' => 
    array (
      0 => 'formCategoria.tpl',
      1 => 1729295439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6712f451123ef7_50361550 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web2\\TPE\\templates';
?>
<!-- head -->
<form action="agregar_categoria" method="POST" class="mb-3">
  <div class="mb-3">
      <label for="categoria" class="form-label">Categoria</label>
      <input type="text" class="form-control" name="categoria" aria-describedby="emailHelp" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar</button>
  </div>
</form><?php }
}
