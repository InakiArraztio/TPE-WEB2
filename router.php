<?php
require_once 'app\controllers\PlatosController.php';
require_once 'app\controllers\CategoriasController.php';
require_once 'app\controllers\AuthController.php';
require_once 'libs\response.php';
require_once 'app\helpers\session.auth.middleware.php';

$res = new Response();
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
        sessionAuthMiddleware($res);
        $controller = new CategoriasController($res);
        $controller->mostrarCategoria(); // muestra todas los productos
        break;
    case 'eliminar_categoria':
        sessionAuthMiddleware($res);
        $controller = new CategoriasController($res);
        $controller->quitarCategoria($params[1],$res);
        break;
    case 'agregar_categoria':
        sessionAuthMiddleware($res);
        $controller = new CategoriasController($res,$res);
        $controller->agregarCategoria();
        break;
    case 'modificar_categoria':
        sessionAuthMiddleware($res);
        $controller = new CategoriasController($res);
        $controller->actualizarCategoria($res);
        break;
    case 'listar_plato_categoria':
        sessionAuthMiddleware($res);
        $controller = new PlatosController($res);
        $controller->listarPlatoCategoria($params[1]);
        break;
    case 'listar_plato':
        sessionAuthMiddleware($res);
        $controller = new PlatosController($res);
        $controller->mostrarPlato(); // muestra todas los productos
        break;
    
    case 'eliminar_plato':
        sessionAuthMiddleware($res);
        $controller = new PlatosController($res);
        $controller->quitarPlato($params[1]);
        break;

    case 'agregar_plato':
        sessionAuthMiddleware($res);
        $controller = new PlatosController($res);
        $controller->agregarPlato();
        break;
          
    case 'modificar_plato':
        sessionAuthMiddleware($res);
        $controller = new PlatosController($res);
        $controller->actualizarPlato();
        break;

    case 'mostrar_plato':
        sessionAuthMiddleware($res);
        $controller = new PlatosController($res);
        $controller->mostrarUnPlato($params[1]);
        break;

    case 'buscar_plato':
        sessionAuthMiddleware($res);
        $controller = new PlatosController($res);
        $controller->buscarPlatoPorID();
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
        $controller->auth(); //manejo login
        break;
    case 'showlogin':
        $controller = new AuthController();
        $controller->showLogin(); //manejo login
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout(); // manejo logout 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}