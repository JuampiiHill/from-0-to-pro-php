<?php 

use App\Classes\Gato;
use App\Classes\GatosAdoptados;

function createGatos() {
    $mr_michi = new Gato("Mr_Michi", "Blanco", 16);
    $mr_michi_adopted = new GatosAdoptados("Mr Michi", new DateTime(2022-12-28), "Pedro");

    echo $mr_michi->sayMeow() . " Me adopto {$mr_michi_adopted->getAdoptedBy()}";


}