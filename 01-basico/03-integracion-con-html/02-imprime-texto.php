<?php

$nombre = "Juan";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
    
    <?php echo "<b>Hola mundo. Debo aprender inglés</b><br>";?>

    <?= "<i>Otra forma de imprimir textos y etiquetas</i>" ?>

    <h1>¡Mi nombre es <?=$nombre ?>. Usando variables dentro de HTML</h1>

</body>
</html>