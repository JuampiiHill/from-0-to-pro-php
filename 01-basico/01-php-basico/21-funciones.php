<?php

// function get_pokemon() {

//     $numero_aleatorio = rand (1,100);

//     switch ($numero_aleatorio) {
//         case 1:
//             echo "Ganaste el mini \n";
//             break;

//         case 2:
//             echo "Ganaste el minor \n";
//             break;

//         case 3:
//             echo "Ganaste el super \n";
//             break;

//         case 4:
//             echo "Ganaste el mega \n";
//             break;

//         default:
//         echo "No ganaste nada \n";
//         break;
//     }
// }

// get_pokemon();
// get_pokemon();
// get_pokemon();
// get_pokemon();
// get_pokemon();
// get_pokemon();
// get_pokemon();
// get_pokemon();


//          ***** Funciones con parametros *****
// $rango =  (int) readline("Ingrese su rango: ");
// function es_estudiantes_legend($rank) {

//     if ($rank >= 20000) {
//         echo "Estudiante leyenda";
//     }
//     else {
//         echo "Aun no alcanzas el nivel leyenda";
//     }
// };

// es_estudiantes_legend($rango);

//          ***** Valores por fedecto *****

// function suma ($a = 1, $b = 29) {
//     echo "La suma de $a + $b es " . ($a + $b) . "\n";
// }

// suma(1, 2);
// suma(7, 8);
// suma();
// suma(4);

// $arreglo1 = [1, 2, 3];
// $arreglo2 = [4, 5, 6];

// $resultado = [...$arreglo1, ...$arreglo2];
// var_dump($resultado);

// $numeros = [1, 2];

// function suma ($a, $b) {
//     echo "La suma de $a + $b es " . ($a + $b) . "\n";
// }

// suma(...$numeros);

function suma_infinita(...$params) {
    $sum = 0;

    foreach ($params as $numero) {
        $sum += $numero;
    }

    echo "El resultado es $sum. \n";
}

suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(199, 222, 2962, 23412, 124125);

echo "\n";