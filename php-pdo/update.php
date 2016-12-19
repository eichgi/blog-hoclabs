<?php

include("connection.php");

try {

    //Creamos nuestra nueva instancia de PDO
    $conexion = new PDO("mysql:host=localhost;dbname=test", "root", "4lt4m1r4*");

    //Habilitamos el modo de errores para visualizarlos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Configuramos el juego de caracteres UTF-8
    $conexion->exec("set charset utf8");

    //Atrapamos los posibles errores para evitar errores fatales en PHP
} catch (PDOException $e) {
    echo "Error al conectar la base de datos" . $e->getMessage();
}

try {

    //Definimos las variables a utilizar
    $id = 1;
    $nombre = "Pedro Martinez";
    $edad = 30;
    $genero = "Masculino";

    //Definimos el query para la actualización a través del metodo prepare
    $query = $conexion->prepare("UPDATE personas SET
                                 nombre = :nombre,
                                 edad = :edad,
                                 genero = :genero
                                 WHERE id = :id");

    //Ahora ataremos los paramétros al query mediante el método bindParam
    $query->bindParam(":nombre", $nombre);
    $query->bindParam(":edad", $edad);
    $query->bindParam(":genero", $genero);
    $query->bindParam(":id", $id);

    //Ejecutamos la actualización
    $query->execute();
    
    //Si deseamos verificar el número de filas que fueron insertadas o modificadas podemos usar la funcion rowCount(), como se muestra a continuación.
    var_dump($query->rowCount());
    
} catch (PDOException $e) {
    die($e->getMessage());
}
