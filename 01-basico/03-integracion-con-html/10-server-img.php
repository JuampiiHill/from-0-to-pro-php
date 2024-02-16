<?php

/**
 * Las imagenes se guardaran en una carpeta temporal
 * del servidor y se eliminaran luego de un determinado
 * tiempo
 */

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';

// Accedo al nombre original de la imagen y lo guardo en la variable basename
$basename = $_FILES["image"]["name"];
// Accedo a la ruta temporal de la imagen y la guardo en la variable image
$image = $_FILES["image"]["tmp_name"];
// guardo en ruta_a_subir la ruta de la imagen. Es este caso le digo que acceda a la carpeta image y la guarda con su nombre original
$ruta_a_subir = "images/$basename";
//Mover la imagen a la carpeta. el primer parametro es la ruta temporal, el segundo sera la ruta a donde queremos subirla
move_uploaded_file($image, $ruta_a_subir);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <img src="<?= $ruta_a_subir ?>" alt="<?= $basename ?>">
</body>
</html>