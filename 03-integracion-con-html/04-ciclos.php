<?php 

$usuarios = ["Juan", "Mili", "Orejas"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <h1>Estos son ciclos</h1>
    <ul>
        <!--  -->
        <?php for ($i = 0; $i < 10; $i++): ?>
        <li><?= $i ?></li>
        <?php endfor; ?>

        <?php while(false): ?>
            <li>Cualquier cosa</li>
        <?php endwhile; ?>
    </ul>

    <h1>Lista de usuarios</h1>

    <ul>
        <!-- por cada elemento del arreglo usuarios, quiero que guardes cada usuario en la variable username  -->
        <?php foreach ($usuarios as $username): ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>