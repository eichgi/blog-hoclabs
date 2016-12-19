<?php

try {

    //Creamos nuestra nueva instancia de PDO
    $conexion = new PDO("mysql:host=localhost;dbname=test", "root", "4lt4m1r4*");

    //Habilitamos el modo de errores para visualizarlos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Definimos el tipo de respuesta para todas las consultas realizadas sobre esta instancia
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    //Configuramos el juego de caracteres UTF-8
    $conexion->exec("set charset utf8");

    //Atrapamos los posibles errores para evitar errores fatales en PHP
} catch (PDOException $e) {
    echo "Error al conectar la base de datos" . $e->getMessage();
}