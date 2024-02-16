<?php 

function info($name, $apellido, $edad) {
    echo "Hola $name $apellido, tienes $edad años";
}

info(
    edad: 14,
    apellido: "Hillcoat",
    name: "Juan"
);