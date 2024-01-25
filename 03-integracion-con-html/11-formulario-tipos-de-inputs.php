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


    <!-- checkbox
    <input type="checkbox" name="list1">
    <input type="checkbox" name="list2" value="Este valor fue clicado">
    <input type="checkbox" name="list3"> -->

    <!-- Radios
     echos para que seleccionemos uno u otro, pero nunca 2
    <label for="arg">Argentina</label>
    <input type="radio" name="pais" value="Argentina" id="arg">
    <label for="mex">Mexico</label>
    <input type="radio" name="pais" value="Mexico" id="mex">
    <label for="per">Peru</label>
    <input type="radio" name="pais" value="Peru" id="per"> -->

    <!-- Multiples archivos -->
    <label for="galeria">Carga tus imagenes</label>
    <input type="file" multiple name="galeria[]" id="galeria">

    <button type="submit">Enviar formulario</button>
    </form>


</body>
</html>