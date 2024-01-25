<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="./11-server-tipos-de-inputs.php" method="post" enctype="multipart/form-data">

    <!-- Input simple
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"> -->

    <!-- Arreglos
    <label for="personas">Nombre</label>
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">
    <input type="text" name="personas[]"> -->

    <!-- arreglos asociativos
    <label>Persona:</label>
    <input type="text" name="persona[nombre]">
    <label>Correo:</label>
    <input type="text" name="persona[email]">
    <label>Edad:</label>
    <input type="text" name="persona[edad]"> -->


    <!-- checkbox -->
    <input type="checkbox" name="list1">
    <input type="checkbox" name="list2" value="Este valor fue clicado">
    <input type="checkbox" name="list3">

    <button type="submit">Enviar formulario</button>
    </form>


</body>
</html>