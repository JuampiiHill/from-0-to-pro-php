<?php 

session_start();

$users = [
    array(
        "username" => "juampiihill",
        "email" => "juanphill@gmail.com"
    ),

    array(
        "username" => "mili",
        "email" => "mili@milagros.com",
    )
];

$user = $_GET["user"] ?? "";

echo "Bienveido " . $users[$user]["username"];

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
