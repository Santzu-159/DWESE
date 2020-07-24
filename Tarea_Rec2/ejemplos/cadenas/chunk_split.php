<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
// formatea $datos usando la semántica del RFC 2045
$nueva_cadena = chunk_split(base64_encode($datos));

    ?>
    </body>
</html>