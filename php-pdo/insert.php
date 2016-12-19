<?php

include("connection.php");

try {

    //Definimos las variables a utilizar
    $nombre = "Hiram Guerrero";
    $edad = 25;
    $genero = "Masculino";

    //Definimos el query para la inserción a través del metodo prepare
    $query = $conexion->prepare("INSERT INTO personas (nombre, edad, genero) VALUES (:nombre, :edad, :genero)");

    //Ahora ataremos los paramétros al query mediante el método bindParam
    $query->bindParam(":nombre", $nombre);
    $query->bindParam(":edad", $edad);
    $query->bindParam(":genero", $genero);

    //Ejecutamos la inserción
    $query->execute();
    
    //Si deseamos verificar el número de filas que fueron insertadas o modificadas podemos usar la funcion rowCount(), como se muestra a continuación.
    var_dump($query->rowCount());
    
} catch (PDOException $e) {
    die($e->getMessage());
}








