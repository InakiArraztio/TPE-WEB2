<?php
    function sessionAuthMiddleware($res) {
        session_start();
        if(isset($_SESSION['id_usuario'])){
            $res->user = new stdClass();
            $res->user->id = $_SESSION['id_usuario'];
            $res->user->email = $_SESSION['email'];
            return;
        }
    }
?>