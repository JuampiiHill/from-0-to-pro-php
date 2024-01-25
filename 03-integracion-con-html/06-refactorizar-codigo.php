<?php 

$tabla_del_9 = [];

for($i=1; $i <=10; $i++) {
    $resultado = 9 * $i;
    $texto = "9 x $i = $resultado";
    array_push($tabla_del_9, $texto);
}

//die(); // die mata la pagina, nada de lo que siga debajo se va a cargar
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactorizando codigo</title>
</head>
<body>

    <h1>Tabla del 9</h1>

    <ul>

    <?php foreach ($tabla_del_9 as $resultado): ?>
        <li><?= $resultado?></li>
    <?php endforeach; ?>

    </ul>


</body>
</html>