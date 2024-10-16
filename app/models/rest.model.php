<?php
//Maneja la comunicacion con la BD
require_once 'app/controllers/rest.controller.php';

class RestaurantModel{
    private $db;
    function __construct(){
        $this->db = $this->connectionDb();
    }

    private function connectionDb(){
       return new PDO('mysql:host=localhost;' . 'dbname=restaurante;charset=utf8', 'root', '');
    }
    
    function getCategorias(){//get plato
        $query = $this->db->prepare('SELECT * FROM platos');//TENIA QUE LLAMAR A platos NO a categorias
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
    
    function obtenerProductosPorCategoria($categoria){
        $query = $this->db->prepare('SELECT * FROM platos WHERE id_categoria = ?');
        $query->execute([$categoria]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $productos;
    }
    
    function insertarProducto($nombre, $precio, $categoria){
        $query = $this->db->prepare('INSERT INTO platos (nombre_plato, precio, id_categoria) VALUES (?,?,?)'); 
        $query->execute([$nombre, $precio, $categoria]);
        return $this->db->lastInsertId();
    }
    
    function eliminarProducto($id){
        $query = $this->db->prepare('DELETE FROM platos WHERE id_plato = ?');
        $query->execute([$id]);
    }
}
