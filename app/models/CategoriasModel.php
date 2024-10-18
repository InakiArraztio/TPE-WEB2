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
        $query = $this->db->prepare('SELECT * FROM categorias');//TENIA QUE LLAMAR A platos NO a categorias
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
    
    function insertarCategoria($categoria){
        $query = $this->db->prepare('INSERT INTO platos (nom_categoria) VALUES (?)'); 
        $query->execute([$categoria]);
        return $this->db->lastInsertId();
    }
    
    function eliminarCategoria($id){
        $query = $this->db->prepare('DELETE FROM categorias WHERE id = ?');
        $query->execute([$id]);
    }
    
}
