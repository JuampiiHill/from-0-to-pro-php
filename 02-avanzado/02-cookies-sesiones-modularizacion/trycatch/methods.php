<?php 

function camino() {
    return 20 / 0;
}

function division() {
    return camino();
}
try {
    division();
    $resultado = 20 / 0;
    echo $resultado;
} catch (Throwable $error) {
    echo $error ->getMessage(); // Obtener mensaje del error
    echo $error ->getCode(); // Obtener codigo del error - algunos errores pueden tener codigo otros no
    echo $error->getFile(); // Nos da el archivo en donde tenemos el error
    echo $error->getLine(); // Nos indica en que linea ocurre el error
    

    echo '<pre>';
    var_dump($error->getTrace());
    echo '</pre>';
}