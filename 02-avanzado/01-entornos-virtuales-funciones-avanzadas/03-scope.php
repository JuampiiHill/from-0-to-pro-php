<?php 

// scope o ambito de las variables es el contexto en donde una variable es definida
// 

$outside_varibale = "Esto es una variable global";

function my_function() {
// echo $outside_varibale; variable de ambito local. No sabe que hay mas alla de la funcion
global $outside_varibale;
echo $outside_varibale;
    
}
echo $outside_varibale;
my_function();

print_r($GLOBALS);
echo "\n";