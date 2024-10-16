<?php
//Maneja la comunicacion con la BD
require_once 'app/controllers/rest.controller.php';

class RestaurantModel{

    private function connectionDb(){
        $db = new PDO('mysql:host=localhost;' . 'dbname=restaurante;charset=utf8', 'root', '');
       return $db;
    }
    
    function getCategorias(){
        $db = $this->connectionDb();
        $query =  $query = $db->prepare('SELECT * FROM platos');//TENIA QUE LLAMAR A platos NO a categorias
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
    
    function obtenerProductosPorCategoria($categoria){
        $db = $this->connectionDb();
        $query = $db->prepare('SELECT * FROM platos WHERE id_categoria = ?');
        $query->execute([$categoria]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $productos;
    }
    
    function insertarProducto($nombre, $precio, $categoria){
        $db= $this->connectionDb();
        $query = $db->prepare('INSERT INTO platos (nombre_plato, precio, id_categoria) VALUES (?,?,?)');
        $query->execute([$nombre, $precio, $categoria]);
    
        return $db->lastInsertId();
    }
    
    function eliminarProducto($id){
        $db = $this->connectionDb();
        $query = $db->prepare('DELETE FROM platos WHERE id_plato =?');
        $query->execute([$id]);
    }
}
