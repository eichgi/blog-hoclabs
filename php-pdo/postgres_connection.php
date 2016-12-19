<?php

try {
    
    //Creamos nuestra nueva instancia de PDO con el driver de Postgres
    $conexion = new PDO("pgsql:dbname=postgres;host=localhost;user=postgres;password=4lt4m1r4*");

    //Habilitamos el modo de errores para visualizarlos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Definimos el tipo de respuesta para todas las consultas realizadas sobre esta instancia
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


} catch (PDOException $e) {
    die("Error : " . $e->getMessage() . "<br/>");
}
?>  