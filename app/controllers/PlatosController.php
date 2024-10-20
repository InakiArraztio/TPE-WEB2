<?php
require_once 'app\views\PlatosView.php';
require_once 'app\models\PlatosModel.php';
//falta
class PlatosController{
    //el controlador siempre usa atributos y vista
    private $model;
    private $view;
    private $categoriaModel;

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
    function listarPlatoCategoria($id) {
        // Obtener las categorías filtradas por id
        $categorias = $this->categoriaModel->filtrarCategoria($id);
        
        // Obtener los platos filtrados por id_categoria
        $platos = $this->model->filtrarPlato($id);
        
        // Pasar los platos y las categorías a la vista
        $this->view->mostrarPlatosFiltrados($platos, $categorias); // Asegúrate de que 'mostrarPlatos' esté preparado para recibir estos parámetros
    }
    
    function mostrarUnPlato($id) {
        $plato = $this->model->filtrarPlatoPorID($id);
        $categorias = $this->categoriaModel->getCategorias();
        if($plato) {
            $this->view->mostrarPlato($plato,$categorias);
        }else{
            $this->view->mostrarError("El plato solicitado no existe");
        }
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
                header("Location: " . BASE_URL . "listar_plato");
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
    function actualizarPlato(){
        if(isset($_POST['plato'])&&isset($_POST['id'])&&isset($_POST['precio'])){
            $plato = $_POST['plato'];
            $id=$_POST['id'];
            $precio=$_POST['precio'];
            $error=$this->model->modificarPlato($plato,$precio,$id);
        }
        header("Location: " . BASE_URL . "listar_plato");
    }
}