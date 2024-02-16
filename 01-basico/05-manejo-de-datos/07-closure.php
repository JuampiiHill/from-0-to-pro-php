<?php 

// $greet = function ($name) // una funcion anonima es una variable que requiere logica
// {
//     return "Hola, $name";
// };

// echo $greet("Juan");

function greet(Closure $lang, $name) {
    return $lang($name);
}

$es = function($name) {
    return "Hola, $name";
};

$en = function($name) {
    return "Hello, $name";
};

echo greet($es, 'Juan');
echo greet($en, 'Juan');
