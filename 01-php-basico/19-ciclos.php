<?php

// //           ***** while *****

// $contador = 0;

// while ($contador < 10) {
//     echo "Dame un mate \n";
//     $contador++;
// };

    
// //          ***** do while *****   

// $usernames = ["Mili", "JuampiiHill", "Orejas"];

// do {
//     $username = readline("Ingrese nombre de usuario: ");
// } while ( in_array( $username, $usernames ) );


// //          ***** ciclo for *****

// for ($i = 0; $i <= 10; $i++) {
//     echo "Hola {$i} veces \n";
// };

// //          ***** foreach *****

$lista_de_cafes = [
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
];

foreach($lista_de_cafes as $cafe => $price) {
    echo "El cafe $cafe cuesta $$price USD \n";
};

//          ***** break-continue *****

// $lista_de_cafes = [
//     "Americano" => 20,
//     "Latte" => 25,
//     "Recalentado" => 6,
//     "Capuccino" => 27.5,
//     "Mocca" => 24
// ];

// foreach($lista_de_cafes as $cafe => $price) {
//     // echo "$cafe leido \n";
//     // if ($cafe == "Latte") {
//     //     echo "Encontre a Latte, finaliza el ciclo";
//     //     break;
//     // }
//     if ($cafe == "Recalentado")
//         continue;

//     echo "EL cafe $cafe es muy rico \n";
// }
 echo "\n";
