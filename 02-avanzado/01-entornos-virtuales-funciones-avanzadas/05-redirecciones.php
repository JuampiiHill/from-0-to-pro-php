<?php 

/**
 * Consideraciones
 * Los encabezados siempre deben ser enviados antes de enviar el cuerpo de la peticion,
 * es decir antes de mandar el contenido.Eso quiere decir que, si imprimes HTML 
 * o cualquier otra cosa que genere cuerpo, al intentar redirigir con 
 * header obtendras un error. 
 */

header("location: https://google.com");
exit;