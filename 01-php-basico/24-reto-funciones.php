<?php 

function obtener_hora() {
    return date("H:i a");
}

echo "Hola, me podrias decir que hora es? \n";
echo "Claro, son las " . obtener_hora();

echo "\n";