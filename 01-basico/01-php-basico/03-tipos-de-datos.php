<?php
echo "PHP tiene la capacidad de convertir un tipo de dato a otro de forma automática. \n
Por ejemplo: Si sumamos un numero con un string, PHP los evaulua a ambos como números. \n";

$numero_1 = "0";
$numero_2 = 3;
$restado_1 = ( $numero_1 + $numero_2);
echo "Numero 1 \n";
var_dump( $numero_1 );
echo "Numero 2 \n";
var_dump( $numero_2 );
echo "Resultado \n";
var_dump( $restado_1 );

echo "De misma manera, si sumamos un numero entero con un numero con decimal, PHP lo convertirá en un tipo de dato float \n";

$num_entero = 10;
$num_decimal = 0.15;
$resultado_2 = ($num_entero + $num_decimal);
var_dump ( $num_entero );
var_dump ( $num_decimal);
var_dump ( $resultado_2 );