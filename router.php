<?php
require_once 'app/controllers/rest.controller.php';
require_once 'app/views/rest.view.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// el router va a leer la action desde el paramtro "action"
$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// listar    ->        mostrarProductos();
// listar individual -> mostrarProducto($id)
// agregar   ->        agregarProducto();
// eliminar/:ID  ->    quitarProducto($id);
// modificar/:ID  ->   modificarProducto($id);

$params = explode('/', $action);

switch ($params[0]) { // en la primer posicion tengo la accion real
    case 'home':
        $controller = new RestaurantController();
        $controller->mostrarDB(); // muestra todas los productos
        break;

    case 'producto':
        $controller = new RestaurantController();
        $controller->mostrarProducto($params[1]); // muestra un producto
        break;

    case 'agregar':
        $controller = new RestaurantController();
        $controller->agregarProducto();
        break;

    case 'eliminar':
        $controller = new RestaurantController();
        $controller->quitarProducto($params[1]);
        break;
        
    case 'modificar':
        $controller = new RestaurantController();
        $controller->modificarProducto($params[1]);
        break;
    default: 
        $view = new RestaurantView();
        $view->mostrarError($error);
        break;
}