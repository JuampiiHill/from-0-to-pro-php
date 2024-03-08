<?php  

// Establecer zona horario

use Symfony\Component\VarDumper\Cloner\Data;

date_default_timezone_set("America/Argentina/Buenos_Aires");

// Obtener fecha actual
$now = date("Y-m-d H:i:s");
// $now = date_create();

// strtotime // convierte una descripcion de fecha/hora textual en ingles a unix

//echo strtotime($now);
// echo strtotime("17 April 2022");
// echo strtotime("+1 week");
// echo strtotime("next Monday");
// echo strtotime("last Wednesday");

// $unix_time_last_wednesday = strtotime("last Wednesday");
// echo date("Y-m-d H:i:s", $unix_time_last_wednesday);

// Fechas inmutables
// $date_inmutable = new DateTimeImmutable();

// Diferencia de timepo

// $today = new DateTime();
// $juan_birth = new DateTime("1995-02-06");
// $interval = $juan_birth->diff($today);
// echo $interval->format("%y años con %m meses y %d dias");

// // Crear de un formato dado
// $date = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022");
// echo $date->format("Y-m-d H:i:s");

// Modificar una fecha
$date = new DateTime();
$date->modify("+1 day + 2 months");
echo $date->format("Y-m-d");