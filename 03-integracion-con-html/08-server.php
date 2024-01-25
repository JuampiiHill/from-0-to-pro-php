<?php 

// CUIDADO, no enviar informacion sensible a traves del metodo get

$nombre = $_GET["nombre"];
$edad = $_GET["edad"];

echo "El usuario $nombre tiene $edad años";