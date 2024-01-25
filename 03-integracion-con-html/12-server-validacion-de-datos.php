<?php 

// la funcion empty nos dice si algun valor esta vacio
// var_dump( empty($_POST['nombre']) );
//la funcion isset() permite saber si algun indice existe o esta seteado
// if ( isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
//     echo "Hola " . $_POST["nombre"];
// } else {
//     echo "No enviaste nada";
// }
// var_dump( isset($_POST["nombre"]) );

// Otra manera de validar a traves del boton. el form viene del name="form" del button
if (isset($_POST["form"]) ) {
    echo "Todo el formulado fue enviado";
} else {
    echo "No se envio ningun formulario";
}


