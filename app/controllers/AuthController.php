<?php
require_once 'app\views\AuthView.php';
require_once 'app\models\UserModel.php';
require_once 'app\helpers\AuthHelper.php';

class AuthController {
    private $view;
    private $model;

    function __construct(){
        $this->model = new UserModel(); 
        $this->view = new AuthView();
    }

    public function showLogin() {
        $this->view->showLogin(); //muestro form de login
    }

    public function auth() {
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            if(empty($email) || empty($password)){
                $this->view->showLogin('Faltan completar datos');
                return;
            }
            // Obtener usuario desde la base de datos
            $user = $this->model->getByEmail($email);
            // Verifico si existe el usuario y si la contraseña es correcta
            if($user && password_verify($password, $user->password)){
                AuthHelper::login($user);  // Si es correcto, iniciar sesión
                header('Location: ' . BASE_URL);
                exit();
            } else {
                $this->view->showLogin("Usuario o contraseña incorrectos");
            }
        } else {
            $this->view->showLogin("Faltan completar datos");
        }
    }
    public function logout(){
        AuthHelper::logout();
        header('Location: ' . BASE_URL);
        exit();
    }
}
