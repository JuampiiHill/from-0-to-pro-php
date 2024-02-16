<?php
//          *** De horas a segundos ***
$horas = readline("Ingrese las horas: ");
$minutos = readline("Ingrese los minutos: ");
$segundos = readline("Ingrese los segundos: ");

$horas_en_segundos = 60 * ($horas * 60);
//echo $horas_en_segundos . "\n";
$minutos_en_segundos = $minutos * 60;
// echo $minutos_en_segundos . "\n";
$segundos = $segundos + ($horas_en_segundos + $minutos_en_segundos);

echo "Son $segundos segundos \n";