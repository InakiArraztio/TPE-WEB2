<?php
require_once 'app\views\rest.view.php';
require_once 'app\models\CategoriasModel.php';
class CategoriasController{
    //el controlador siempre usa atributos y vista
    private $model;
    private $view;

    function __construct(){
        $this->view = new RestaurantView();
        $this->model = new CategoriasModel();
    }

    function mostrarCategoria(){
        $categoria = $this->model->getCategorias();
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