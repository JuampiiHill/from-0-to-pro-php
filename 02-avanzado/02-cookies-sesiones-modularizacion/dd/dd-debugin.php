<?php 

require("./vendor/autoload.php");

class Gato {
    protected $patas = [];
    protected $color;

    function __construct(string $color) {
        $this->color = $color;

        for ($i=0; $i < 4; $i++)
            $this->patas[$i] = new PataDeGato();
    } 
}

class PataDeGato {
    protected $nails = 4;
    protected $description = "Tiene manchas";

    public function get_description() : string {
        return $this->description;
    }
}

$casa_de_gatos = array(
    "nombre" => "Michilango",
    "ubicacion" => [
        "pais" => "Mexico",
        "cuidad" => "Ciudad de Mexico",
        "colonia" => "Doctores",
        "numero" => 27
    ],
    "numero_de_gatos" => 3,
    "gatos" => [
        new Gato("blanco"),
        new Gato("negro"),
        new Gato("gris"),
    ]
);

// echo '<pre>';
// var_dump($casa_de_gatos);
// echo '</pre>';

dd($casa_de_gatos);