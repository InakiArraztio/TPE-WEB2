<?php
require_once 'config.php';
class PlatosModel{
    private $db;
    function __construct(){
        $this->db = $this->connectionDb();
    }

    private function connectionDb(){
       return new PDO('mysql:host=' . DB_HOST . ';dbname='. DB_NAME .';charset=utf8', DB_USER, DB_PASS);
    }
    
    function getPlatos() {
        $query = $this->db->prepare('SELECT * FROM platos');
        $query->execute();
        $platos = $query->fetchAll(PDO::FETCH_OBJ);
        return $platos;
    }
    function filtrarPlato($id) {
        $query = $this->db->prepare('SELECT * FROM platos WHERE id_categoria = ?');
    
        
        $query->execute([$id]);
    
        $platos = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $platos;
    }
    /*function obtenerPlatos($platos){
        $query = $this->db->prepare('SELECT * FROM platos WHERE id_plato = ?');
        $query->execute([$platos]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $productos;
    }*/

    function filtrarPlatoPorID($id) {
        $query = $this->db->prepare('SELECT * FROM platos WHERE id_plato = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function insertarPlato($nombre, $precio, $categoria){
        $query = $this->db->prepare('INSERT INTO platos (nombre_plato, precio, id_categoria) VALUES (?,?,?)'); 
        $query->execute([$nombre, $precio, $categoria]);
        return $this->db->lastInsertId();
    }
    
    function eliminarPlato($id){
        $query = $this->db->prepare('DELETE FROM platos WHERE id_plato = ?');
        $query->execute([$id]);
    }
    function modificarPlato($plato,$precio,$id){
        $query = $this->db->prepare("UPDATE `platos` SET `nombre_plato` = ?, `precio` = ? WHERE `id_plato` = ?");
        $query->execute([$plato,$precio,$id]);
        return $this->db->lastInsertId();
    }


}
