<?php 

// Similares a las funciones anonimas pero con una sintaxis mas concisas
// Sintaxis muy similar a las arrow function de javascript pero con un funcionamiento muy similar alas Lambdas de python
// Tambien son implementadas usando una instancia de la clase Closure
// No declaron scope local, si no que usan el scope global
// No se pueden modificar variables del ambito global
// Simpre inician con fn()

$cajero = 0;

$add_cajero = fn($add) => $cajero + $add;
// $add_cajero = fn($add) => $cajero += $add; // Esto no funciona, porque el ambito sirve para leer pero no escribir. No se pueden modificar variables


echo $add_cajero(29);

$edades = [5, 21, 50, 9, 18];

// $mayores_de_edad = array_filter($edades, function($current) {
//     return $current >= 18;
// });

$mayores_de_edad = array_filter ($edades, fn($current) => $current >= 18);
print_r($mayores_de_edad);