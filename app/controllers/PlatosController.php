<?php
require_once 'app\views\rest.view.php';
require_once 'app\models\PlatosModel.php';
//falta
class PlatosController{
    //el controlador siempre usa atributos y vista
    private $model;
    private $view;

    function __construct(){
        $this->view = new RestaurantView();
        $this->model = new RestaurantModel();
    }

    function mostrarDB(){
        $productos = $this->model->getPlatos();
        //$this->view->mostrarRestaurante($productos);
    }

    function mostrarPlato(){
        //Verificar datos obligatorios y valida la entrada de usuarios
        //Obtiene la categoria enciada por GET
        
        //Llama al model para obtener los productos
        var_dump("vista");
        $platos = $this->model->getPlatos();

        $this->view->mostrarPlatos($platos);
    }

    function agregarProducto(){
        //Lista de campos requeridos
        /*$camposRequeridos = ['nombre',  'precio', 'categoria'];

        //Validacion de campos
        foreach($camposRequeridos as $campo) {
            if(!isset($_POST[$campo])){
                $this->view->mostrarError($campo . 'no especificado');
                return;
            }
        }*/
        //Asignacion de variables
        if(isset($_POST['nombre'])&&isset($_POST['precio'])&&isset($_POST['categoria'])){
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $categoria = $_POST['categoria'];
            $id = $this->model->insertarProducto($nombre, $precio, $categoria);

            if ($id) {//si es 0 "sale" por el else 
                header('Location: '.BASE_URL);
            } else {
                echo "Error al insertar el producto";
            }
        }
        

        //Inserccion del producto
        
    }

    function  quitarProducto($id){
        $this->model->eliminarProducto($id);
        header('Location: ' . BASE_URL);
    }
}