<?php
require_once 'app\views\CategoriaView.php';
require_once 'app\models\CategoriasModel.php';
class CategoriasController{
    //el controlador siempre usa atributos y vista
    private $model;
    private $view;
    private $platosModel;
    
    function __construct($res){
        $this->view = new CategoriaView($res->user);
        $this->model = new CategoriasModel();
        $this->platosModel = new PlatosModel();
    }

    function mostrarCategoria($error=null){
        $categorias = $this->model->getCategorias();
        foreach($categorias as $categoria){
            $categoria->cantidadPlatos=$this->platosModel->filtrarPlato($categoria->id_categoria);
        }
        $this->view->mostrarCategoria($categorias,$error);
    }


    function agregarCategoria($res){
        if($res->user!=null){
            if(isset($_POST['categoria'])){
                $categoria = $_POST['categoria'];
                $id = $this->model->insertarCategoria( $categoria);

                if ($id) {//si es 0 "sale" por el else 
                    header('Location: '.BASE_URL);
                } else {
                    $this->mostrarCategoria("Error al insertar el producto");
                }
            }
        }else{
            $this->mostrarCategoria("Error al actualizar, no esta logueado");
        }
    }
    /*function mostrarCategoriaForm(){
        $viewPlato=new PlatosView();
        $categoria = $this->model->getCategorias();
        $viewPlato->listarForm($categoria);
    }*/

    function  quitarCategoria($id,$res){ 
        if($res->user!=null){
            if(empty($this->platosModel->filtrarPlato($id) )){
                $error=$this->model->eliminarCategoria($id);
                header('Location: ' . BASE_URL);
            } 
            else{
                $this->mostrarCategoria("error al eliminar categoria contiene platos");
            }
        }else{
            $this->mostrarCategoria("Error al actualizar, no esta logueado");
        }
            
    }
    function actualizarCategoria($res){
        if($res->user!=null){
            if(isset($_POST['categoria'])&&isset($_POST['id'])){
                $categoria = $_POST['categoria'];
                $id=$_POST['id'];
                $error=$this->model->modificarCategoria($categoria,$id);
            }
             header('Location: ' . BASE_URL);
        }else{
            $this->mostrarCategoria("Error al actualizar, no esta logueado");
        }


        
    }
}
