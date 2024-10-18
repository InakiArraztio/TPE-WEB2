<?php
require_once 'app\controllers\PlatosController.php';
require_once 'app\controllers\CategoriaController.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar';//accion por defecto
// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
//listar -> mostrasMaterias();
//agregar->addMateria();
//eliminar/:ID -> eliminarMateria();

$params = explode('/', $action);

switch ($params[0]) { // en la primer posicion tengo la accion real
    /*case 'listar':
        $controller = new CategoriasController();
        $controller->mostrarCategoria(); // muestra todas los productos
        break;*/
    case 'listar':
        $controller = new PlatosController();
        $controller->mostrarPlato(); // muestra todas los productos
        break;
    /*case 'agregar':
        echo "hola";
        $controller = new PlatosController();
        $controller->agregarProducto();
        break;
    
    case 'eliminar':
        $controller = new PlatosController();
        $controller->quitarProducto($params[1]);
        break;
    
    /*case 'producto':
        $controller = new RestaurantController();
        $controller->mostrarProducto($params[1]); // muestra un producto
        break;

    case 'modificar':
        $controller = new RestaurantController();
        $controller->modificarProducto($params[1]);
        break;
    
        
    */
    default: 
        echo('404 Page not found'); 
        break;
}