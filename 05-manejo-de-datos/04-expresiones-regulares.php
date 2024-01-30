<?php 

#     EXPRESIONES REGULARES
/*
/:   CONTENEDOR
^:   INICIO
$:   FINAL
-:   RANGO
[]:  PATRON
{}:  CONDICION
*/

$pass = 123456;
$pass2 = "123456a";

var_dump((bool) preg_match('/^[0-9]{6,9}$/', $pass));
var_dump((bool) preg_match('/^[0-9]{6,9}$/', $pass2));
