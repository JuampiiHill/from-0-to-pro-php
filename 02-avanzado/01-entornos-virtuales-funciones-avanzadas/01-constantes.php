<?php 
// Dos formas de declarar constantes - define(), const
// PHP hace diferencia entre mayusculas y minusculas
// A partir de la version 8 de PHP ya no podemos declara casos insesitivos
// Por buenas practicas las constantes se deben definir en mayusculas
// const no se puede declarar en bloques de codigos mientras que define() si
define("NOMBRE", "Juan");

const PI = 3.14;
echo PI;
echo NOMBRE;

$decision = true;

if ($decision) {
    define("BLOCK_CONSTANT", "Esta constante fue declada dentro de un if");
    // const BLOCK_CONSTANT = "Esta constante fue declada dentro de un if";

    echo BLOCK_CONSTANT;
}

// Constantes predefinidas
echo E_ERROR;
echo PHP_VERSION;

// Constantes magicas
echo __LINE__;

echo "\n";
