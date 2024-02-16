<?php 

$data = 'Estudiio PHP';
// echo $data{0};
echo $data[3] . "<br>";

$post = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus incidunt perferendis aperiam numquam ut aspernatur est, accusantium nostrum, facere odit laboriosam non distinctio porro eius nulla totam, ratione eaque inventore.';
/**
 * substr funcion propia de php --> substraer string.  
 * Primer parametro variable, el segundo desde donde 
 * arranca a contar los string 
 * y el segundo donde finaliza
 * */
$extract = substr($post, 0, 20);
echo "$extract... [ver mas]";

//explode pasa de un string a un array,
//el primer parametro es el caracter que separa cada vez que se encuentra con uno
$data = 'javascript, php, laravel';
$tags = explode(', ', $data);
echo "<pre>";
var_dump($tags);

//efecto contrario a explode
$courses = ['javascript', 'php', 'laravel'];
echo implode(', ', $courses);

// trim elimina espacios de un string
// ltrim quita espacio de izquierda
// rtrim quita espacio de derecha
$course = '              Curso de PHP          ';
$course = trim($course);