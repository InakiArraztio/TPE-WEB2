<?php
require_once 'app/views/rest.view.php';
require_once 'app/models/rest.model.php';


function mostrarDB(){
    $productos = getCategorias();
    mostrarRestaurante($productos);
   
}

function mostrarProducto(){
    //Verificar datos obligatorios y valida la entrada de usuarios
    if ((!isset($_GET['categoria'])) || empty($_GET['categoria'])) {
        mostrarError('Categoría no especificada');
        return;
    }

    //Obtiene la categoria enciada por GET
    $categoria = $_GET['categoria'];

    //Llama al model para obtener los productos
    $productos = obtenerProductosPorCategoria($categoria);

    mostrarProductos($productos, $categoria);
}

function agregarProducto(){

    if ((!isset($_POST['nombre']))) {
        mostrarError('Nombre no especificado');
    }

    if ((!isset($_POST['precio']))) {
        mostrarError('Precio no especificado');
    }

    if ((!isset($_POST['categoria']))) {
        mostrarError('Categoría no especificada');
    }

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];

    $id = insertarProducto($nombre, $precio, $categoria);

    if ($id) {
        header('Location: ' . BASE_URL);
    } else {
        echo"error al insertar la tarea";
    }
}

function  quitarProducto($id){
    eliminarProducto($id);
    header('Location: ' . BASE_URL);
}
