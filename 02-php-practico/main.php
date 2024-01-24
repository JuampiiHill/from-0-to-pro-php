<?php

$words = array("sol", "luna", "cielo", "comparacion", "indicaciones");


$form = "<form action='analisis.php'>";
/**
 * for va a iterar (longitud del array $palabras. En caso de haber mas palabras iterar mas veces)
 * cada ciclo, con str_shuffle desordenara las palabras de manera aleatoria y las guarda en el array palabrasDesordenadas
 */
for ($i=0; $i < count($words); $i++) {
    $form .= "La palabra: ".str_shuffle($words[$i])." ". 
    "<input type='text' name='palabra".$i."'>".
    "<br>";
}

$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form";
//   *** Codigo HTML para mostrar en el navegador ***
echo $form.$button.$formCierre;

?>