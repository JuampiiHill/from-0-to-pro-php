<?php 

$courses = [
    10 => 'php', 
    100 => 'javascript', 
    1000 => 'laravel'
];
// ordenar elementos de manera asce
sort($courses);
// ordenar elementos de manera desc
rsort($courses);
// ordenera los elementos a traves de la key ponemos por delante la k
ksort($courses);
// de manera descendente de agrega la r de recursivo
krsort($courses);

echo "<pre>";
// var_dump($courses);

//quitar algun elemento del array con slice
var_dump(array_slice($courses, 1));
// dividir un array en fragmentos. Muy utlizado con dbs 
var_dump(array_chunk($courses, 2));
// quita el primer elemento del array y lo imprime
array_shift($courses);
// eliminar y imprimir el ultimo elemento con pop
array_pop($courses);
// agregar un elemento en la primer posocion
array_unshift($courses);
// agregar un elemento al final del array
array_push($courses);
// intercambiar keys por valores
array_flip($courses);
