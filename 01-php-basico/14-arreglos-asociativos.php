<?php

// $edades = [
//     "Carlos" => 20,
//     "Mili" => 25,
//     "Juan" => 28
// ];

// // echo "La edad de Mili es " . $edades["Mili"];
// echo "La edad de Juan es {$edades['Juan']}"; // Esta es la manera de poner arreglos con domillas dobles

$personas = [
    "Carlos" => [
        "edad" => 20,
        "apellido" => "Santana",
    ],
    "Juan" => [
        "edad" => 28,
        "apellido" => "Hillcoat"
    ],
];

echo "El apellido de Juan es {$personas["Juan"]["apellido"]} y su edad es de {$personas["Juan"]["edad"]} años";
echo "\n";