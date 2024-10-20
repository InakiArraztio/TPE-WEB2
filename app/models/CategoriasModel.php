<?php
require_once 'config.php';
class CategoriasModel{
    private $db;
    function __construct(){
        $this->db = $this->connectionDb();
    }

    private function connectionDb(){
        return new PDO('mysql:host=' . DB_HOST . ';dbname='. DB_NAME .';charset=utf8', DB_USER, DB_PASS);
    }
    
    function getCategorias() {
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); // Asegúrate de que hay datos en la tabla
    }
    function filtrarCategoria($id) {
        
        $query = $this->db->prepare('SELECT * FROM categorias WHERE id_categoria = ?');
        
       
        $query->execute([$id]);
        
     
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    function insertarCategoria($categoria){
        $query = $this->db->prepare('INSERT INTO categorias (tipo_categoria) VALUES (?)'); 
        $query->execute([$categoria]);
        return $this->db->lastInsertId();
    }
    
    function eliminarCategoria($id){
        $query = $this->db->prepare('DELETE FROM categorias WHERE id_categoria = ?');
        $query->execute([$id]);

    }
    function modificarCategoria($categoria,$id){
        $query= $this->db->prepare("UPDATE `categorias` SET `tipo_categoria` = ? WHERE `id_categoria` = ?");
            
        $query->execute([$categoria,$id]);
        return $this->db->lastInsertId();
    }

    
}
