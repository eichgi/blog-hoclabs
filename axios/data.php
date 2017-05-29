<?php

$input = file_get_contents('php://input');

//var_dump($input);exit;
$_PATCH = json_decode($input);

var_dump($_PATCH);
//sleep(2);
//echo json_encode($_POST);
$data = [
    'Persona' => [
        'nombre' => 'Hiram',
        'edad' => 26,
        'profesion' => 'Desarrollador'
    ],
    'Lenguajes' => ['Javascript', 'PHP', 'Java']
];

//echo json_encode($data);