<?php
require_once 'app/views/rest.view.php';
require_once 'app\models\CategoriasModel.php';
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
    }

    function mostrarCategoria(){
        //Verificar datos obligatorios y valida la entrada de usuarios
        if ((!isset($_GET['categoria'])) || empty($_GET['categoria'])) {
            $this->view->mostrarError('Categoría no especificada');
            return;
        }

        //Obtiene la categoria enciada por GET
        $categoria = $_GET['categoria'];
        $this->view->mostrarCategoria($categoria);
    }

    function agregarCategoria(){
        if(isset($_POST['categoria'])){
            $categoria = $_POST['categoria'];
            $id = $this->model->insertarCategoria( $categoria);

            if ($id) {//si es 0 "sale" por el else 
                header('Location: '.BASE_URL);
            } else {
                echo "Error al insertar el producto";
            }
        }
    }

    function  quitarCategoria($id){
        $this->model->eliminarCategoria($id);
        header('Location: ' . BASE_URL);
    }
}