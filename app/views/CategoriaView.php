<?php
require_once('libs\smarty\libs\Smarty.class.php');

class CategoriaView {
    private $smarty;
    private $user = null;

    function __construct($user) {
        $this->smarty = new Smarty\Smarty; 
        $this->user = $user;
    }


    // Función para mostrar platos
    function mostrarCategoria($categoria,$error=null) {
        $this->smarty->assign('error',$error);
        $this->smarty->assign('user',$this->user);
        $this->smarty->assign('categorias', $categoria);
        $this->smarty->display('templates\listarcategoria.tpl');
    }
}
?>


