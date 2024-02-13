<?php 

function greet() {
    //return 'Hola...';
    return ['PDF', 'vista'];
}

//echo greet();
echo var_dump(greet());

exit(); // detiene el sistema
return; // retorna