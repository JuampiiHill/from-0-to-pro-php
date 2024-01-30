<?php 

// Valores
function greet($name)
{
    return "hola, $name";
}

echo greet('Juan');

// Referencias
$course = 'PHP';
function path(&$couse)
{
    $course = 'Laravel';
    echo $course; // Laravel
}

path($course);
echo $course; // Laravel

// Predeterminado
function greet2($name = 'Juan'){
    return 'Hola $name';
}

greet2();
greet2('Mili');