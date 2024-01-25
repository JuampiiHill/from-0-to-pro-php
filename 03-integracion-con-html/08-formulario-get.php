<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por GET</title>
</head>
<body>
    <!-- Formulario - action va a ser hacia que url se enviara el formulario -->
    <form action="./08-server-get.php" method="get">
    <!-- for es darle un nombre al label para que se encale con el id del input -->
    <label for="nombre">Nombre</label>
    <!-- el atributo name es como darle un nombre a nuestro input y cuando llegue al servidor poder obtener ese dato -->
    <!-- el id del input es para enlazarlo con el label -->
    <input type="text" name="nombre" id="nombre">

    <label for="edad">Edad</label>
    <input type="text" name="edad" id="edad">

    <!-- por default los type de los button son submit, pero es buena practica ponerlo -->
    <button type="submit">Enviar formulario</button>
    </form>

</body>
</html>
