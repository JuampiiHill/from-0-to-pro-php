<?php

$perros_caninos = true;
$perros_4_patas = true;
$perros_vuelan = false;
$perros_programan = false;

//AND Las dos condiciones deben ser verdaderas para que arroje true
var_dump ( $perros_caninos && $perros_4_patas );

//OR Almenos una de las dos condiciones debe ser verdadera para que arroje true
var_dump ( $perros_caninos || $perros_vuelan );

//NOT Negar
var_dump ( !$perros_4_patas );

echo "\n";