<?php
class PlatosModel{
    private $db;
    function __construct(){
        $this->db = $this->connectionDb();
    }

    private function connectionDb(){
       return new PDO('mysql:host=localhost;' . 'dbname=restaurante;charset=utf8', 'root', '');
    }
    
    function getPlatos() {
        $query = $this->db->prepare('SELECT * FROM platos');
        $query->execute();
        $platos = $query->fetchAll(PDO::FETCH_OBJ);
        return $platos;
    }
    /*function obtenerPlatos($platos){
        $query = $this->db->prepare('SELECT * FROM platos WHERE id_plato = ?');
        $query->execute([$platos]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $productos;
    }*/
    
    function insertarPlato($nombre, $precio, $categoria){
        $query = $this->db->prepare('INSERT INTO platos (nombre_plato, precio, id_categoria) VALUES (?,?,?)'); 
        $query->execute([$nombre, $precio, $categoria]);
        return $this->db->lastInsertId();
    }
    
    function eliminarPlato($id){
        $query = $this->db->prepare('DELETE FROM platos WHERE id_plato = ?');
        $query->execute([$id]);
    }
    
}
