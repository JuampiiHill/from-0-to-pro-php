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
            <?= $mrmichi->getName()?> fue adoptado por  <?= $mrmichi_adopted->getAdoptedBy() ?>
        </li>
        <li>
            <?= $richard->getName()?> fue adoptado por  <?= $richard_adopted->getAdoptedBy() ?>
        </li>
        <li>
            <?= $mike->getName()?> fue adoptado por  <?= $mike_adopted->getAdoptedBy() ?>
        </li>
    </ul>

</body>
</html>