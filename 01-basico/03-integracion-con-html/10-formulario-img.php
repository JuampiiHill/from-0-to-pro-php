<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de imagenes</title>
</head>
<body>
    
<!-- Debe llevar el tipo de encriptacion -->
    <form action="./10-server-img.php" method="post" enctype="multipart/form-data">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="image">Imagen:</label>
        <!-- el type del input debera ser file para poder enviar multimedia -->
        <input type="file" name="image" id="image">

        <button type="submit">Enviar</button>

    </form>
</body>
</html>