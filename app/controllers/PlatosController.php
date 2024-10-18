<?php
require_once 'app\views\PlatosView.php';
require_once 'app\models\PlatosModel.php';
//falta
class PlatosController{
    //el controlador siempre usa atributos y vista
    private $model;
    private $view;
    private $categoria;

    function __construct(){
        $this->view = new PlatosView();
        $this->model = new PlatosModel();
        $this->categoriaModel = new CategoriasModel();
    }

    function mostrarPlato(){
        $categorias=$this->categoriaModel->getCategorias();
        $platos = $this->model->getPlatos();
        $this->view->mostrarPlatos($platos,$categorias);
    }

   /* function mostrarPlato(){
        //Verificar datos obligatorios y valida la entrada de usuarios
        //Obtiene la categoria enciada por GET
        
        //Llama al model para obtener los productos
        $platos = $this->model->getPlatos();

        $this->view->mostrarPlatos($platos);
    }*/

    function agregarPlato(){
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
        if(isset($_POST['nombre'])&&isset($_POST['precio'])&&isset($_POST['id_categoria'])){
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $categoria = $_POST['id_categoria'];
            $id = $this->model->insertarPlato($nombre, $precio, $categoria);
            if ($id) {//si es 0 "sale" por el else 
                header("Location: listar_plato");
            } else {
                echo "Error al insertar el producto";
            }
        }
        

        //Inserccion del producto
        
    }

    function  quitarPlato($id){
        $this->model->eliminarPlato($id);
        header("Location: ../listar_plato");
    }
}