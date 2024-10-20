<?php
require_once 'app\controllers\PlatosController.php';
require_once 'app\controllers\CategoriasController.php';
require_once 'app\controllers\AuthController.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'listar_categoria';//accion por defecto
// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
//listar -> mostrasMaterias();
//agregar->addMateria();
//eliminar/:ID -> eliminarMateria();

$params = explode('/', $action);

switch ($params[0]) { // en la primer posicion tengo la accion real
    case 'listar_categoria':
        $controller = new CategoriasController();
        $controller->mostrarCategoria(); // muestra todas los productos
        break;
    case 'eliminar_categoria':
        $controller = new CategoriasController();
        $controller->quitarCategoria($params[1]);
        break;
    case 'agregar_categoria':
        $controller = new CategoriasController();
        $controller->agregarCategoria();
        break;
    case 'modificar_categoria':
        $controller = new CategoriasController();
        $controller->actualizarCategoria();
        break;
    case 'listar_plato_categoria':
        $controller = new PlatosController();
        $controller->listarPlatoCategoria($params[1]);
        break;
    case 'listar_plato':
        $controller = new PlatosController();
        $controller->mostrarPlato(); // muestra todas los productos
        break;
    
    case 'eliminar_plato':
        $controller = new PlatosController();
        $controller->quitarPlato($params[1]);
        break;

    case 'agregar_plato':
        $controller = new PlatosController();
        $controller->agregarPlato();
        break;
          
    case 'modificar_plato':
        $controller = new PlatosController();
        $controller->actualizarPlato();
        break;

    case 'mostrar_plato': //hay que cambiarlo
        $controller = new PlatosController();
        $controller->mostrarUnPlato($params[1]);
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
    case 'login':
        $controller = new AuthController();
        $controller->showLogin(); //manejo login
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout(); // manejo logout 
        break;
    case 'auth':
        $controller = new AuthController();
        $controller->auth(); // manejo la autenticacion
        break;
    default: 
        echo('404 Page not found'); 
        break;
}