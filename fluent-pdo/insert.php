<?php

require("connection.php");

try {
    //Para hacer una inserción debemos utilizar el método 'insertInto', además debemos definir un array asociativo el cual contendrá el campo y el valor que se escribirá en dicho campo
    $values = array('nombre' => 'Jose Castillo');
    $query = $fluent->insertInto('usuarios')->values($values);
    //También podemos usar el shortcut, los dos hacen lo mismo
    $query = $fluent->insertInto('usuarios', $values);

    //A diferencia de un select, en la inserción debemos llamar el metodo 'execute()' y guardamos la respuesta obtenida
    $insertado = $query->execute();

    //El valor que retorna la inserción es el id de la fila recien insertada, así validamos la ejecución
    var_dump($insertado);
} catch (PDOException $e) {
    die($e->getMessage());
}