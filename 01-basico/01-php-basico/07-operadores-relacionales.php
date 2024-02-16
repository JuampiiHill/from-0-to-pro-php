<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// Operador de igualdad (==) - No compara tipos de datos
var_dump ($a == $b);
var_dump ($a == $b2);

// Operador identico (===) - Compara tipos de datos
var_dump( $a === $b);
var_dump( $a === $b2);

// Operador de diferencias (!=) - No compara tipos de datos
var_dump ($a != $b);
var_dump ($a != $b2);

// (!==) Si compara tipos de datos
var_dump ($a !== $b);
var_dump ($a !== $b2);

// < Menor que
var_dump ($c < $b);
var_dump ($d < $b);
var_dump ($a < $b);

// > Mayor que
var_dump ($c > $b);
var_dump ($d > $b);
var_dump ($a > $b);

// >= Mayor o igual que
var_dump ($c >= $b);
var_dump ($d >= $b);
var_dump ($a >= $b);

// <= Menor o igual que
var_dump ($c <= $b);
var_dump ($d <= $b);
var_dump ($a <= $b);

// Operador nave espacial <=>
echo 2 <=> 1 . "\n"; // Si el numero que esta a la izquierda es mayor que el que esta a la derecha devuelve 1
echo 1 <=> 1 . "\n"; // Si son iguales devuelve 0;
echo -50 <=> 1 . "\n"; // Si el numero que esta a la izquierda es menor que el que esta a la derecha devuelve -1

// Fusion de null (??)
$edad = 23;
echo $edad_de_juan ?? $edad; // Si la edad de Juan no esta definida usa la variable edad
echo "\n";