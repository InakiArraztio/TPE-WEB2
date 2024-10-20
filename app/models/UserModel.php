<?php
class UserModel {
    private $db;

    function __construct(){
        $this->db = $this->connectionDb();
    }

    function connectionDb(){
        return new PDO('mysql:host=localhost;dbname=restaurante;charset=utf8', 'root', '');
    }

    function getByEmail($email) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function insertarUsuario($email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);  // cifra la contraseña
        $query = $this->db->prepare('INSERT INTO usuarios (email, password) VALUES (?, ?)');
        $query->execute([$email, $hashedPassword]);
        return $this->db->lastInsertId();
    }

    function eliminarUsuario($id) {
        $query = $this->db->prepare('DELETE FROM usuarios WHERE id_usuario = ?');
        $query->execute([$id]);
    }

    function modificarUsuario($email, $password, $id) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);  // cifra la contraseña
        $query = $this->db->prepare('UPDATE usuarios SET email = ?, password = ? WHERE id_usuario = ?');
        $query->execute([$email, $hashedPassword, $id]);
    }
}
