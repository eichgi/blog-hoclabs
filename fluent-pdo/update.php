<?php

require("connection.php");

try {

    //Mostramos el registro #1:
    $select = $fluent->from('usuarios')->where('id', 1)->fetch();
    echo 'Nombre: ' . $select['nombre'] . ' Fecha registro: ' . $select['fecha_registro'];

    //Definimos nuestro arreglo con los paramétros a modificar
    $values = array('fecha_registro' => date("Y-m-d H:i:s"));

    //Ejecutamos la actualización y almacenamos el resultado en $update
    $update = $fluent->update('usuarios')->set($values)->where('id', 1)->execute();

    //Si la actualización fue correcta se almacenara el valor de las filas que se meodificaron
    if ($update) {
        var_dump($update);
        echo "<p>Después de actualizar: </p>";
        $select = $fluent->from('usuarios')->where('id', 1)->fetch();
        echo 'Nombre: ' . $select['nombre'] . ' Fecha registro: ' . $select['fecha_registro'];
    } else {
        echo 'El nombre no fue actualizado';
    }

} catch (PDOException $e) {
    die($e->getMessage());
}