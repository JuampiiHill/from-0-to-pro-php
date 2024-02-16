<?php

function frases() {

    $num_alea = rand(1,4);
    $frase = "";

    switch ($num_alea) {
        case 1:
            $frase = "Messi mejor jugador del mundo mundial";
            break;
        
        case 2:
            $frase = "Las empresas no son familia";
            break;

        case 3:
            $frase = "La tencnologia es el futuro";
            break;

        case 4:
            $frase = "Amo PHP";
            break;
    }
    return $frase;
}

frases();
echo frases();

echo "\n";