<?php

$zorros = ["https://randomfox.ca/images/1.jpg"]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>HTML desde PHP</h1>
    <?php foreach($zorros as $zorrito) { ?>
        <img src="<?php echo $zorrito; ?>">
    <?php } ?>

</body>
</html>