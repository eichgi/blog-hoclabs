<?php

include("connection.php");
//include("postgres_connection.php");

try {
    //Preparamos nuestra consulta SQL mediante el método prepare de nuestra instancia
    $query = $conexion->prepare("SELECT * FROM personas");

    //Ejecutamos nuestra consulta
    $query->execute();

    //Mostramos todos los registros retornados con 'fetchAll', nótese que pasamos como
    //paramétro 'PDO::FETCH_ASSOC'. Esto hará que recibamos el resultado en un arreglo
    //de tipo asociativo
    var_dump($query->fetchAll(PDO::FETCH_ASSOC));

    //El método para retornar el primer registro sería '$query->fetch(PDO::FETCH_ASSOC)'

    //El método para retornar un único valor es'$query->fetchColumn()'

    //Si desean recibir el resultado en un arreglo clásico (tipo númerico), la variable 
    //para hacerlo es 'PDO::FETCH_NUM'
 
    //Si desean recibir el resultado en forma de objeto stdClass, el parametro a pasar
    //es: 'FETCH_OBJ'

} catch (PDOException $e) {
    die($e->getMessage());
}