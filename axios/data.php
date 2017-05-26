<?php

sleep(2);
$data = [
    'Persona' => [
        'nombre' => 'Hiram',
        'edad' => 26,
        'profesion' => 'Desarrollador'
    ],
    'Lenguajes' => ['Javascript', 'PHP', 'Java']
];

echo json_encode($data);