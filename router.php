<?php
require_once 'app/controllers/rest.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// el router va a leer la action desde el paramtro "action"

$action = 'hogar'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// listar    ->        mostrarProductos();
// listar individual ->mostrarProducto($id)
// agregar   ->        agregarProducto();
// eliminar/:ID  ->    quitarProducto($id);
// modificar/:ID  ->   modificarProducto($id);

$params = explode('/', $action);

switch ($params[0]) { // en la primer posicion tengo la accion real
    case 'hogar':
        mostrarDB(); // muestra todas los productos
        break;

    case 'producto':
        mostrarProducto($params[1]); // muestra un producto
        break;

    case 'agregar':
        agregarProducto();
        break;

    case 'eliminar':
        quitarProducto($params[1]);
        break;
        
    case 'modificar':
        modificarProducto($params[1]);
        break;
    default: 
        mostrarError();
        break;
}