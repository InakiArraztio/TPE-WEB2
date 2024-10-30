<?php
require_once 'app\views\CategoriaView.php';
require_once 'app\models\CategoriasModel.php';
class CategoriasController{
    //el controlador siempre usa atributos y vista
    private $model;
    private $view;
    private $platosModel;
    
    function __construct(){
        $this->view = new CategoriaView();
        $this->model = new CategoriasModel();
        $this->platosModel = new PlatosModel();
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
    /*function mostrarCategoriaForm(){
        $viewPlato=new PlatosView();
        $categoria = $this->model->getCategorias();
        $viewPlato->listarForm($categoria);
    }*/

    function  quitarCategoria($id){ 
        if(empty($this->platosModel->filtrarPlato($id) )){
            $error=$this->model->eliminarCategoria($id);
            header('Location: ' . BASE_URL);
        } 
        else
            echo "error al eliminar categoria contiene platos";
    }
    function actualizarCategoria(){
        if(isset($_POST['categoria'])&&isset($_POST['id'])){
            $categoria = $_POST['categoria'];
            $id=$_POST['id'];
            $error=$this->model->modificarCategoria($categoria,$id);
        }
         header('Location: ' . BASE_URL);
    }
}