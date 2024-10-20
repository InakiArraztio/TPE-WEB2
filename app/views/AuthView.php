<?php
require_once ('libs\smarty\libs\Smarty.class.php'); 
use Smarty\Smarty;

class AuthView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showLogin($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates\FormularioLogin.tpl');
    }
}