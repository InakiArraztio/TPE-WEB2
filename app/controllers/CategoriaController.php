<?php
require_once 'app/views/rest.view.php';
require_once 'app/models/rest.model.php';
class CategoriasController{
    //el controlador siempre usa atributos y vista
    private $model;
    private $view;

    function __construct(){
        $this->view = new RestaurantView();
        $this->model = new RestaurantModel();
    }

    function mostrarDB(){
        $productos = $this->model->getCategorias();
        $this->view->mostrarRestaurante($productos);
    }

    function mostrarProducto(){
        //Verificar datos obligatorios y valida la entrada de usuarios
        if ((!isset($_GET['categoria'])) || empty($_GET['categoria'])) {
            $this->view->mostrarError('Categoría no especificada');
            return;
        }

        //Obtiene la categoria enciada por GET
        $categoria = $_GET['categoria'];

        //Llama al model para obtener los productos
        $productos = $this->model->obtenerProductosPorCategoria($categoria);

        $this->view->mostrarProductos($productos, $categoria);
    }

    function agregarProducto(){
        //Lista de campos requeridos
        $camposRequeridos = ['nombre',  'precio', 'categoria'];

        //Validacion de campos
        foreach($camposRequeridos as $campo) {
            if(!isset($_POST[$campo])){
                $this->view->mostrarError($campo . 'no especificado');
                return;
            }
        }
        //Asignacion de variables
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];

        var_dump($nombre, $precio, $categoria);
        //Inserccion del producto
        $id = $this->model->insertarProducto($nombre, $precio, $categoria);

        if ($id) {//si es 0 "sale" por el else 
            header('Location: ' . BASE_URL);
        } else {
            echo "Error al insertar el producto";
        }
    }

    function  quitarProducto($id){
        $this->model->eliminarProducto($id);
        header('Location: ' . BASE_URL);
    }
}