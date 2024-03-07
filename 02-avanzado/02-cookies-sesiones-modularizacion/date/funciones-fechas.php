<?php  

// Establecer zona horario

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
$date_inmutable = new DateTimeImmutable();
