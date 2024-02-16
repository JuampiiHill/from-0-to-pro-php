<?php
echo "El casting es la manera de indicar al interprete de PHP para forzar el cambio de un tipo de dato a otro deseado
Se puede acceder a esta utilidad anteponiendo el tipo de dato entre parentesis antes de un valor o una variable al momento
de la asignacion o inicializacion. \n
Las siguientes definiciones ayudan a forzar el cambio de tipos en PHP \n
(array) forzado al tipo arreglo \n
(boolean) forzado al tipo booleano \n
(float) forzado al tipo flotante \n
(int) forzado al tipo entero \n
(string) forzado al tipo string \n
(object) forzado al tipo objeto \n";

$numero = "5";
var_dump ( $numero );

$numero = (int) $numero;
var_dump ( $numero );

$dias = 5.86;
var_dump ( $dias );
$dias = (int) $dias;
var_dump ( $dias );

$bandera = 0;
var_dump ( $bandera );
$bandera = (bool) $bandera;
var_dump ( $bandera );



echo "\n";