<?php

$precios_de_cafes = [12, 56, 32, 89, 2, 1];

//usort modifica el arreglo original. no crea uno nuevo
//Ordenar arregla a traves de operador nave espacial
usort($precios_de_cafes, function($a, $b) {
    return $a <=> $b;
});

var_dump($precios_de_cafes);
