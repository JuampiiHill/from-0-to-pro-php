<?php
//          ***De segundos a horas***

//La funcion readline() nos ayuda a leer los datos que el usuario ingrese
$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int) ($segundos / 3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos $segundos segundos \n";