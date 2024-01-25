<?php 

$name = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$edad = $_POST["edad"];

// htmlentities pone literalemente lo que el usuario escribió. Evitando que inyecte codigo en los campos
$htmlentities = htmlentities($name);
// addslashes añade diagonales para asegurar que campos como comillas no rompan
$addslashes = addslashes($username);
// Expresiones regulares -1 quita todos los numeros 2- quita todas las letras
$onlywords = preg_replace("/\d/", "", $username);
$onlynymbers = preg_replace("/\D/", "", $username);
// Analiza el email enviado y lo sanitiza
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Sanitiza numeros enteros
$edad = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizacion</title>
</head>
<body>

<p>Nombre</p>
<?= $name?>

<p>Username:</p>
<?= $addslashes?>

<p>Username sin numeros</p>
<?= $onlywords?>

<p>Username sin letras</p>
<?=$onlynymbers?>

<p>Email</p>
<?= $email?>

<p>Edad</p>
<?= $edad?>
    
</body>
</html>
