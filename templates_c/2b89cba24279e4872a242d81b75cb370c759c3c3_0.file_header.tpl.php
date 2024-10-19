<?php
/* Smarty version 5.4.1, created on 2024-10-18 23:58:15
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6712d9f745ea77_07937886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b89cba24279e4872a242d81b75cb370c759c3c3' => 
    array (
      0 => 'header.tpl',
      1 => 1729288690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6712d9f745ea77_07937886 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web2\\TPE\\templates';
?><!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
    <meta charset="UTF-8">
    <base href="<?php echo '<?'; ?>
= BASE_URL <?php echo '?>'; ?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>TUDAI - TPE</title>
</head>

<body>
    <!-- main header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo BASE_URL;?>
">TUDAI - TPE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="listar_plato">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about">login</a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
    </header><?php }
}