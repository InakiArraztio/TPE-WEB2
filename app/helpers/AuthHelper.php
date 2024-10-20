<?php
//Asegura que la sesión esté iniciada antes de cualquier operación.
class AuthHelper{
    static public function init(){
        if(session_start() != PHP_SESSION_ACTIVE){//constante que indica que una sesión ya está activa.
            session_start();
        }
    }
    // Autentica al usuario y guarda su información en la sesión.
    static public function login($user){
        AuthHelper::init();
        $_SESSION['id_usuario'] = $user->id_usuario;
        $_SESSION['email'] = $user->email;
    }
    //Cierra la sesión.
    static public function logout() {
        AuthHelper::init();
        session_destroy();
    }
    //Verifica si el usuario está autenticado.
     static public function verify() {
        AuthHelper::init();
        if(!isset($_SESSION['id_usuario'])){
            header('Location:' . BASE_URL . 'login');
            die();
        }
    }
}