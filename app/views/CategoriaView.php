<?php
require_once('libs\smarty\libs\Smarty.class.php');

class RestaurantView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty\Smarty; 
    }

    // Función para mostrar errores
    function mostrarError($error) {
        //echo "<div class='error-message'><h2>Error: $error.</h2></div>";
    }

    // Función para mostrar platos
    function mostrarCategoria($categoria) {
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/listarcategoria.tpl');
    }
}
?>


