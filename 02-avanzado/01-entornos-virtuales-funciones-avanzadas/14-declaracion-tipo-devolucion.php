<?php 

// Declarar que tipo de datos vamos a devolver en nuestra funcion
// De igual manera son coercitivo (opcional)
// Usando declare lo hacemos obligatorio

function suma (int $n1, int $n2) : int {
    return $n1 + $n2;
}

echo suma(1, 2);
echo "\n";

class Dummy {
    public $un_valor = "Cualquier cosa";
}

function una_funcion_cualquiera(Dummy $n1) : string {
    return $n1->un_valor;
}

echo una_funcion_cualquiera(new Dummy);
echo "\n";