<?php

$words = array("sol", "luna", "cielo", "comparacion", "indicaciones");

for ($i=0; $i < count($words) ; $i++) { 
    if($_REQUEST["palabra".$i] == $words[$i]) {
        echo "La palabra ingresada es correcta"."<br>";
    } else {
        echo "La palabra ingresadas es incorrecta, la palabra correcta es ".$words[$i]."<br>";
    }
}
?>