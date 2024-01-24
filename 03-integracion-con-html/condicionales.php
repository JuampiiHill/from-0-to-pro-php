<?php

$isOlder = false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>
    
<!-- ESTO NO SE DEBE HACER -->
    <h1>Esta manera no es correcta</h1>
    <?php if ($isOlder) {
        echo "<b>Es mayor de edad</b>";
    }
    else {
        echo "<b>Es menor de edad</b>";
    }
    ?>

<!-- ESTA ES UNA MANERA ACEPTABLE -->
    <h1>Esta es una manera aceptable</h1>
    <?php if($isOlder) { ?>
        <b>Es mayor de edad</b>
    <?php } else { ?>
        <b>Es menor de edad</b>
        <?php } ?>

<!-- ESTA ES UNA MEJOR MANERA -->
    <h1>Esta es una mejor manera </h1>
    <?php if($isOlder): ?>
        <b>Es mayor de edad</b>
    <?php else: ?>
        <b>Es menor de edad</b>
    <?php endif; ?>

</body>
</html>