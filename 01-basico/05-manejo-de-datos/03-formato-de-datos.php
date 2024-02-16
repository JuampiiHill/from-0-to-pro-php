<?php 

// Alterar

$text = "PHP es un LENGUAJE <br>";
//strtolower pasa el texto a minusculas
//strtoupper pasa el texto a mayusculas
echo strtolower($text);
echo strtoupper($text);

// ucfirst pone la primer letra en mayuscula
// lcfirst pone la primer letra en minuscula
echo ucfirst($text);
echo lcfirst($text);

// Reemplazar
// str_replace reemplaza caracteres.
$slug = str_replace(' ', '-', $text);
echo $slug;

// Modificacion
$code = 39;
//str_pad completa caracteres. Primer parametro es la variable a tomar
//Segundo parametro cantidad de caracteres
//Tercer parametro el caracter a completar
//STR_PAD_BOTH deja la variable entre medio de los caracteres
//STR_PAD_LEFT deja la variable a la izquierda
echo str_pad($code, 8, '#', STR_PAD_BOTH);

// strip_tags quita codigo html de la variable
echo strip_tags($text);

$texto = 'Programación año 2024';

// echo strtoupper($texto); // monobyte
echo mb_strtoupper($texto); // multibyte
