<?php 

require("Logic/CreateCats.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatos</title>
</head>
<body>
    
    <ul>
        <li>
            <?= $mrmichi->getName()?> dice <?= $mrmichi->sayMeow() ?>
        </li>
        <li>
            <?= $richard->getName()?> dice <?= $richard->sayMeow() ?>
        </li>
        <li>
            <?= $mike->getName()?> dice <?= $mike->sayMeow() ?>
        </li>
    </ul>

</body>
</html>