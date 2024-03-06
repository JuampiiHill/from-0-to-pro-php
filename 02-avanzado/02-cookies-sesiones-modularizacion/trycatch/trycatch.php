<?php 

try {

    $resultado = 20/0;
    echo $resultado;

} catch(Throwable $error) {

    echo $error->getMessage();
    echo "Algo salio mal con tu division";

}

echo "<br>";

echo "El codigo a pesar del error se sigue ejecutando";

