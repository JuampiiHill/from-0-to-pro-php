<?php

$actual = 1;
$anterior = 0;

echo "Hay 9 tiendas a las que puedes visitar, y por lo tantos puedes tomar diferentes caminos para ir a cada una de ellas.
Dime a que tienda quieres llegar y te dire cuantos caminos puedes tomar \n";

$tienda = (int) readline ("Ingrese numero de tienda: ");

if ($tienda < 1) 
    echo "Ingrese numero mayor a 1";

for ($i = 2; $i <= $tienda; $i++) {
    
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;   
}

echo "Hay $actual maneras de llegar a la tienda";

echo "\n";
