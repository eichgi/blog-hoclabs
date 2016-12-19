<?php

include("connection.php");

try {
    
    //Definimos las variables a utilizar
    $nombre = "Hiram Guerrero";
    $edad = 25;
    $genero = "Masculino";

    //Notese que hemos utlizado '?' como placeholder
    $query = $conexion->prepare("INSERT INTO personas (nombre, edad, genero) VALUES (?, ?, ?)");

    //Atamos los parámetros en orden númerico y especificamos el tipo de dato que entrara
    $query->bindParam(1, $nombre, PDO::PARAM_STR);
    $query->bindParam(2, $edad, PDO::PARAM_INT);
    $query->bindParam(3, $genero, PDO::PARAM_STR);

    //Ejecutamos la inserción
    $query->execute();
    
    //Si deseamos obtener el número de la última fila que hemos insertado utilizamos (nótese que se utiliza la instancia de conexion, no sobre el query) :
    var_dump($conexion->lastInsertId());
    
} catch (PDOException $e) {
    die($e->getMessage());
}