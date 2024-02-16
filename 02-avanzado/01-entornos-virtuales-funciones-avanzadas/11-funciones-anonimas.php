<?php 
// Funciones que podemos declarar sin necesidad de ponerle un nombre
// Podemos guardarlas dentro de variables
// Se las conoce como Closure porque son una instancia de la clase Closure que tiene PHP por defecto

$numbers = [1,2,3,4];

$numbers_by_2 = array_map(function($current) {
    return $current * 2;
}, $numbers);

// Dentro de fuciones no podemos conocer el ambito exterior
// Gracias a la clase Closure, con las funciones anonimas podemos hacer uso de una palabra reservada que nos ayuda a pasar la variables globales adentro de la funcion
// "use", con esta palabra podemos pasar variables que estan dentro del ambito global al ambito local de una funcion

$perro = "Oreja";

$change_perro_name = function() use($perro){
    echo $perro = "Morita";
};

$change_perro_name();
