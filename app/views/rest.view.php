<?php
require_once 'libs\smarty\libs\Smarty.class.php';

class RestaurantView {
    private $smarty;

    function __construct() {
        
    }

    // Función para mostrar errores
    function mostrarError($error) {
        //echo "<div class='error-message'><h2>Error: $error.</h2></div>";
    }

    // Función para mostrar platos
    function mostrarPlatos($platos) {
        $smarty = new Smarty();
        $smarty->assign('platos', $platos);
        var_dump($platos);
        $smarty->display('templates\listarPlatos.tpl');
    }
}
?>






