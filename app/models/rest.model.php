<?php
//Maneja la comunicacion con la BD
require_once 'app/controllers/rest.controller.php';

function connectionDb(){
$db = new PDO('mysql:host=localhost;' . 'dbname=restaurante;charset=utf8', 'root', '');
   return $db;
}

function getCategorias(){
    $db = connectionDb();
    $query =  $query = $db->prepare('SELECT * FROM categorias');
    $query->execute();
    $categorias = $query->fetchAll(PDO::FETCH_OBJ);
    return $categorias;
}

function obtenerProductosPorCategoria($categoria){
    $db = connectionDb();
    $query = $db->prepare('SELECT * FROM categorias WHERE nom_categoria = ?');
    $query->execute([$categoria]);
    $productos = $query->fetchAll(PDO::FETCH_OBJ);

    return $productos;
}

function insertarProducto($nombre, $precio, $categoria){
    $db= connectionDb();
    $query = $db->prepare('INSERT INTO productos (nombre, precio, categoria) VALUES (?,?,?)');
    $query->execute([$nombre, $precio, $categoria]);

    return $db->lastInsertId();
}

function eliminarProducto($id){
    $db = connectionDb();
    $query = $db->prepare('DELETE FROM `categorias` WHERE id=?');
    $query->execute([$id]);
}