<?php 

// UNIR ARRAYS
$frontend = ['javascript'];
$backend = ['php', 'laravel'];

// Podemos unir array usando un + pero con esta tecnica se pisan los keys
echo "<pre>";
var_dump($frontend + $backend);

// Para esto tenemos una funcion propia de php. El error sucederia
// si no hablamos de keys numericos
var_dump(array_merge($frontend, $backend));