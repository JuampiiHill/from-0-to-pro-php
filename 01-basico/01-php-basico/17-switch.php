<?php

$jugador = readline("Ingrese un numero del 1 al 12 para obtener informacion del jugador: ");

switch( $jugador ) {
    case 1:
        echo "Roberto 'El Pato' Abondanzzieri, todo alguna vez cuando atajamos gritamos 'el patoooo'";
        break;
    
    case 2:
        echo "El patron Bermudez, guapo como el solo";
        break;

    case 3:
        echo "Clemente Rodriguez, el lateral más rapido del fútbol argentino. Lo comparaban con Roberto Carlos";
        break;

    case 4:
        echo "Hugo Benjamin " . "'El Negro Ibarra'" . ", el mejor 3";
        break;
    
    case 5:
        echo "Fernando Gago, elegancia con la pelota";
        break;

    case 6:
        echo "Walter Samuel, el muro";
        break;

    case 7:
        echo "Guillero Barros Schelotto, que jugador mas pícaro";
        break;

    case 8: 
        echo "Sebastian Battaglia, el jugador con más titulos en el club";
        break;

    case 9:
        echo "Martin Palermo, no habrá otro igual";
        break;

    case 10:
        echo "Juan Roman Riquelme, el torero, que terrible jugador";
        break;


    case 11:
        echo "Marcelo" . "el Chelo Delgado" . "famoso por su pegada 3 dedos";
        break;

    case 12:
        echo "Jugador Numero 12, la mejor hinchada del mundo";
        break;
    default:
        echo "Jugador no ingresado, reintente e ingrese un numero del 1 al 12";
        break;
};

echo "\n";