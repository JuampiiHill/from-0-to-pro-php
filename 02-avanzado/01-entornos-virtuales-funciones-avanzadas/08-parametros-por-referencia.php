<?php 

// Para acceder a la referncia en memoria usamos & en la variable deseada para acceder a la variable original
$cat = "Meow";

function gato_ladra(&$cat_dog) {
    $cat_dog = "Woof";
}

gato_ladra($cat);

echo $cat;
echo "\n";