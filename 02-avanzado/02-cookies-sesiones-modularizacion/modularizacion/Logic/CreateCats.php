<?php  

require("Classes/GatosDisponibles/Gatos.php");
require("Classes/GatosAdoptados/Gatos.php");

use GatosDisponibles\Gato;
use GatosAdopados\Gato as AdoptedCats;

$mrmichi = new Gato("Mr. Michi", "Blanco", 2);
$richard = new Gato("Richard", "Gris", 5);
$mike = new Gato("Mike", "Naranja", 7);

$mrmichi_adopted = new AdoptedCats("Mr. Michi", new DateTime("2024-03-08"), "Juan");
$richard_adopted = new AdoptedCats("Richard", new DateTime("2019-02-02"), "Emiliano");
$mike_adopted = new AdoptedCats("Mike", new DateTime("2022-12-18"), "Messi");