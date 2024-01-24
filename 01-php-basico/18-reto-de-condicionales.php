<?php

$dinero = 200;
$retiro = readline("Ingrese la cantidad que quieres retirar: ");

if ($retiro < 100) {
    echo "El retiro minimo es de 100 usd \n";
}
else if ($retiro > $dinero) {
    echo "No puedes retirar esa cantidad \n";
} else {
    $dinero = $dinero - $retiro;
    echo "Queda en cuenta {$dinero} usd \n";
};

echo $dinero;
echo "\n";
