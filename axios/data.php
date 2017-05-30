<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {



} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos = [
        'Persona' => [
            'nombre' => 'Hiram',
            'edad' => 26,
            'profesion' => 'Desarrollador'
        ],
        'Lenguajes' => ['Javascript', 'PHP', 'Java']
    ];

    echo json_encode($datos);
}