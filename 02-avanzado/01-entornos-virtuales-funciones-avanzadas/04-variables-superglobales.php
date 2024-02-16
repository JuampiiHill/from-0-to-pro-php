<?php 

/**
 * son varibales que estan disponibles en cualquier parte del codigo y son predefinidas por PHP
 * $GLOBALS
 * $_SERVER
 * $_GET
 * $_POST
 * $_FILES
 * $_COOKIE
 * $_SESSION
 * $_REQUEST
 * $_ENV
 */

// $mascota = "perro"; // esta variable es global por lo tanto entraria a GLOBALS

// echo '<pre>';
// var_dump($GLOBALS);
// echo '</pre>';

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

function local_scope() {

    echo $_GET["mascota"];
}

local_scope();