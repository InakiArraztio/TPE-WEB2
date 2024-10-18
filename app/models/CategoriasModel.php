<?php
class CategoriasModel{
    private $db;
    function __construct(){
        $this->db = $this->connectionDb();
    }

    private function connectionDb(){
       return new PDO('mysql:host=localhost;' . 'dbname=restaurante;charset=utf8', 'root', '');
    }
    
    function getCategorias() {
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); // Asegúrate de que hay datos en la tabla
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
    
}
