<?php
/**
 * Funcion que de acuerdo al sistema operativo limpia la consola
 */
function clear() {
    if (PHP_OS === "WINNT") {
        system("cls");
    } else {
        system("clear");
    }
}
//Array de posibles palabras para el juego
$possible_words = [ "Bebida", "Oreja", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Computadora" ];

// defino una constante con los intentos
define("MAX_ATTEMPS", 6);

echo "¡Juego del ahorcado! \n\n";

//          ***** Inicializamos el juego *****
$choosen_word = $possible_words[ rand(0, 9) ]; // Obtener palabra al azar del arreglo
$choosen_word = strtolower($choosen_word); // Parsear palabra a minuscula
$word_lenght = strlen($choosen_word); // strlen nos devuelve cuando mide la palabra en cuestion de letras
// str_pad nos rellena lo que le indiquemos un sting
// recibe un strin
$discover_letter = str_pad("", $word_lenght, "_" );
$attempts = 0; // Cantidad de intentos fallidos

do {
echo "Palabra de $word_lenght letras \n\n";
echo $discover_letter . "\n\n";

$player_latter = readline("Escribe una letra: "); // Ingresar letra
$player_latter = strtolower($player_latter); // Parsear letra ingresada a minuscula


//         *****Verificar si la letra se encuentra en la palabra*****
/*
 str_contains devuelve true o false dependiendo de que si la letra existe o no en el string
 el primer parametro recibe el string en donde buscar y el segundo parametro la letra ingresada por el usuario
*/
if (str_contains($choosen_word, $player_latter)) {  
//         *****Verificar todas las ocurrencias de esta letra para reemplazarlas*****
    /*
    strpos devuelve en cual posicion se encuentra la letra indicada.
    Devuelve false si no encuentra nada, por lo tanto el ciclo while dejaría de ejecutarse.
    En el primer parametro recibe la palabra en la cual vamos a buscar (haystack/pajar), 
    el segundo parametro recibe la letra a buscar (needle/aguja) y el tercer parametro (offset) 
    indica a partir de que posicion del string buscar
    */
    $offset = 0;
    while( 
        ($letter_position = strpos($choosen_word, $player_latter, $offset)) !== false) {

        $discover_letter[$letter_position] = $player_latter;
        $offset = $letter_position +1;
    }
} else {
// En caso de fallar se incremente el numero de intentos fallidos
clear();
    $attempts++;
    echo "La letra no se encuentra en la palabra. Quedan " . (MAX_ATTEMPS - $attempts) . " intentos ";
    sleep(1);
}
clear();
// repetir mientras tengamos intentos disponibles y en caso de que no haya adivinado
} while ( $attempts < MAX_ATTEMPS && $discover_letter != $choosen_word );
clear();
if ($attempts < MAX_ATTEMPS)
    echo "¡Ganaste! \n\n";
else   
    echo "Suerte para la próxima \n\n";

echo "Palabras descubiertas: $discover_letter";
echo " \n";