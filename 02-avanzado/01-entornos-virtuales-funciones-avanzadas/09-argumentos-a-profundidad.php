<?php 

// Parametros por defecto
function sumar_edades($edades = array(13,18,39,25)) {
    return array_sum($edades);
}

// Si no enviamos nada usara los parametros por defecto pero podemos enviar nuestros propios argumentos
// echo sumar_edades();
echo sumar_edades(array(4,2,9,83));
echo "\n";


// Trailing commas
function multiplicar(
    $n1 = 1,
    $n2 = 2,
    $n3 = 4,
) {
    return $n1 * $n2 * $n3;
}

echo multiplicar();

//

class UnaClaseRamndom {

}

function receive_a_class($class = new UnaClaseRamndom) {
    echo $class::class;
}

receive_a_class();
