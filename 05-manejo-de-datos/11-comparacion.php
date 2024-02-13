<?php 
/**
* EJEMPLO: TENGO UNA PLATAFORMA DONDE SE ENSEÑA JAVASCRIPT Y PHP, A SU VEZ QUERES SABER QUE CURSOS QUIEREN
* TOMAR LOS ALUMNOS. PARA NO VER LOS CURSOS QUE YA TENES DISPONIBLES EN TU PLATAFORMA ULIZAMOS
* LA FUNCION PROPIA DE PHP ARRAY_DIFF 
*/
$courses = ['javascript', 'php'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo "<pre>";
var_dump((array_diff($wishes, $courses)));

//array_diff_assoc funciona para lo mismo pero respecto a los valores y keys