<?php
require_once('libs\smarty\libs\Smarty.class.php');

class CategoriaView {
    private $smarty;
    private $user = null;

    function __construct($user) {
        $this->smarty = new Smarty\Smarty; 
        $this->user = $user;
    }

    // Función para mostrar errores
    function mostrarError($error) {
        //echo "<div class='error-message'><h2>Error: $error.</h2></div>";
    }

    // Función para mostrar platos
    function mostrarCategoria($categoria) {
        $this->smarty->assign('user',$this->user);
        $this->smarty->assign('categorias', $categoria);
        $this->smarty->display('templates\listarcategoria.tpl');
    }
}
?>


