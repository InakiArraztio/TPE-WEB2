<?php
/* Smarty version 5.4.1, created on 2024-10-20 16:55:39
  from 'file:templates\FormularioLogin.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671519eb236719_84781863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26787cbba9b3c80a1db8a7da5c8682eb0c4cc620' => 
    array (
      0 => 'templates\\FormularioLogin.tpl',
      1 => 1729436127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_671519eb236719_84781863 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\TPE-WEB2\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if (!(null !== ($_SESSION['id_usuario'] ?? null))) {?>
    <div class="mt-5 w-25 mx-auto">
        <form method="POST" action="login">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>
        
        <?php if ($_smarty_tpl->getValue('error')) {?> 
            <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->getValue('error');?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
        </form>
    </div>
<?php } else { ?>
    <div class="alert alert-danger mt-3">
        <h5>Usted ya se ha logueado</h5>
    </div>
<?php }?>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
