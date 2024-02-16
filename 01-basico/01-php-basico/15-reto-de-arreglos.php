<?php

$personas = [
    "Juan" => [
        "Apellido" => "Hillcoat",
        "Edad" => 28,
        "Ocupacion" => "Administrativo",
        "Comidas" => array (
            "Favoritas" => "Hamburguesas, Pizza",
            "NoFavoritas" => "Lechon, Arroz"
        ),
    ],

    "Mili" => [
        "Apellido" => "Valido",
        "Edad" => 25,
        "Ocupacion" => "Maestra",
        "Comidas" => array (
            "Favoritas" => "Arroz, Ñoquis",
            "NoFavoritas" => "Lechon, Lechuga"
        ),
    ],

    "Sergio" => [
        "Apellido" => "Vecino",
        "Edad" => 49,
        "Ocupacion" => "Peluquero",
        "Comidas" => array (
            "Favoritas" => "Atun, Lasaña",
            "NoFavoritas" => "Pollo"
        ),
    ]
    ];

echo "Las comidas favoritas de Juan son {$personas["Juan"]["Comidas"]["Favoritas"]} \n";
echo "Mili tiene {$personas["Mili"]["Edad"]} años \n";
echo "El trabajo de Sergio es {$personas["Sergio"]["Ocupacion"]} \n";

echo "\n";