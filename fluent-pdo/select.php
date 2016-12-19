<?php

require("connection.php");

try {

    //Para hacer un select debemos utilizar el método 'from()'
    //Esta consulta equivale a: 'SELECT * FROM usuarios'
    $query = $fluent->from('usuarios');
    echo '<pre>';
    foreach ($query as $row) {
        echo 'Nombre: ' . $row['nombre'] . ', Fecha registro: ' . $row['fecha_registro'] . '<br>';
    }
    echo '<hr>';

    //Si quisieramos seleccionar campos especificos de busqueda debemos pasar como parámetro un array
    $query = $fluent->from('usuarios')->select(array('id, nombre'));
    foreach ($query as $row) {

        echo 'ID: ' . $row['id'] . ' Nombre: ' . $row['nombre'] . '<br>';
    }
    echo '<hr>';

    //Si queremos añadir un WHERE a nuestra consulta utilizamos el método WHERE()
    $query = $fluent->from('usuarios')->select(array('id, nombre, fecha_registro'))->where('id', 2);
    foreach ($query as $row) {
        echo 'ID: ' . $row['id'] . ' Nombre: ' . $row['nombre'] . 'Fecha registro: ' . $row['fecha_registro'] . '<br>';
    }
    echo '<hr>';

    //Si además deseamos poner un limite a nuestra consulta usamos el método limit()
    $query = $fluent->from('usuarios')->select(array('id, nombre, fecha_registro'))->limit(4);
    foreach ($query as $row) {
        echo 'ID: ' . $row['id'] . ' Nombre: ' . $row['nombre'] . ' Fecha registro: ' . $row['fecha_registro'] . '<br>';
    }

    echo '</pre><hr>';

} catch (PDOException $e) {
    die($e->getMessage());
}