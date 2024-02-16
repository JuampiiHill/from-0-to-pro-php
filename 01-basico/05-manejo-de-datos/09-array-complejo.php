<?php 

$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

foreach ($courses as $key => $value) {
    echo "$key: $value <br>";
}

foreach($courses as $course) {
    echo "$course <br>";
}

// -----   *****   -----

function upper($course, $key) {
    echo strtoupper($course). ": $key <br>";
}

/**
 * array_walk es una funcion propia de php para recorrer arrays
 * recibe el array a recorrer en su primer parametro y en
 * el segundo la funcion upper que convierte a
 * mayusculas todos los elementos.
 */
array_walk($courses, 'upper');

/**
 * Podemos ver si algun key existe utilizando la funcion array_key_exists
 * array_key_exists('frontend', $courses);
 * in_array busca a nivel de valores
 * in_array('javascript', $courses);
 * array_keys imprime todo los keys
 * array_keys($courses); 
 * aaray_values imprime todo los valores
 * array_values($courses);
 */