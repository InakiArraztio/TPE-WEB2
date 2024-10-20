<?php
/* Smarty version 5.4.1, created on 2024-10-19 17:36:15
  from 'file:formCategoria.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6713d1eff136f9_81970416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35cd8c0c11a5714d89bfe36c6d2d57e1b08739e1' => 
    array (
      0 => 'formCategoria.tpl',
      1 => 1729292584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6713d1eff136f9_81970416 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2\\templates';
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
