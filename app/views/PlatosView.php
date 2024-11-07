<?php
require_once('libs\smarty\libs\Smarty.class.php');

class PlatosView{
    private $smarty;
    private $user = null;
    function __construct($user) {
        $this->smarty = new Smarty\Smarty; 
        $this->user=$user;
    }

    // Función para mostrar errores
    function mostrarError($error) {
        //echo "<div class='error-message'><h2>Error: $error.</h2></div>";
    }

    function mostrarPlato($plato, $categorias) {
        $this->smarty->assign('plato', $plato);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/mostrarPlato.tpl');
    }

    // Función para mostrar platos
    function mostrarPlatos($platos,$categorias) {
        $this->smarty->assign('platos', $platos);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/listarPlatos.tpl');
    }
    function mostrarPlatosFiltrados($platos, $categorias) {
        $this->smarty->assign('platos', $platos);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates\listarPlatosCategoria.tpl');
    }
    function mostrarPlatoBuscado($plato,$categorias){
        $this->smarty->assign('platoBuscado', $plato);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates\buscarPlato.tpl');
    }
}
?>






