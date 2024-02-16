<?php 

$usuarios = array( 
    array(
        "id" => 0,
        "username" => "Juampi"
    ),
    array(
        "id" =>1,
        "username" => "Mili"
    ),
    array(
        "id" => 2,
        "username" => "Orejas"
    ),
);

$edad_de_juan = 28;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a Javascript</title>
</head>
<body>
    
<script>

    let users = JSON.parse('<?= json_encode($usuarios) ?>');

    let edad = <?= $edad_de_juan ?>;
</script>

<script src='./05-variables-de-php-a-javascript2.js'></script>

</body>
</html>