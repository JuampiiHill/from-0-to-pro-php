<?php 

try {

    $pet = readline("Que quieres adoptar ");

    if ($pet != "gato" && $pet != "conejo")
        throw new Exception("Lo sentimos, no tenemos $pet en este centro de adopcion");

    echo "Felicidades por tu nueva mascota";    
} catch (Throwable $error) {

    echo $error->getMessage();
}