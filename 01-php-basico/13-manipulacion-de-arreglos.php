<?php  

// $edades = [18, 22, 40, 34];

// // count nos devuelve la cantidad de elementos que tiene un arreglo
// echo count($edades);

// array_push permite añadir mas elementos al final del arreglo
array_push($edades, 13);
var_dump($edades);

// // is_array nos permite saber si es o no un arreglo
// $esto_no_es_un_arreglo = "";
// var_dump(is_array($esto_no_es_un_arreglo));
// var_dump(is_array($edades));

// // explode sirve para convertir un string en un arreglo. Recibe 2 paramentros, el primero debe ser el identificador de separacion y el segundo la variable
// $lista_de_frutas = "Frutilla, banana, manzana";
// $lista_de_frutas_array = explode(",", $lista_de_frutas);
// var_dump($lista_de_frutas_array);

// implode nos permite convertir un array en un string a traves de algun concatenador, en este ejemplo se usa ,
$lista_de_frutas_array2 = ["Manzana", "Banana", "Frutilla"];
$lista_de_frutas_string = implode(",", $lista_de_frutas_array2);
var_dump($lista_de_frutas_string);
echo "\n";