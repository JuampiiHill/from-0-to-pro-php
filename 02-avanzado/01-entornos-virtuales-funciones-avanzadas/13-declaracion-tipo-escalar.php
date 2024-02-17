<?php 

// Es definir que tipo de dato queremos recibir a traves de una funcion
// Por defecto es coercitivo (opcional)
// Usamos la palabra reservada "declare" para hacer que sea obligatorio

function calcular_area_triangulo(int $base, int $altura, string $nombre) {
    return"Hola $nombre, el area de tu triangulo es: " . ($base * $altura) / 2;
}

echo calcular_area_triangulo(3, 8, "Juan");

echo "\n";