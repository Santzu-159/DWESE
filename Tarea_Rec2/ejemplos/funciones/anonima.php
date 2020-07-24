<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$saludo = function($nombre){
    printf("Hola %s\r\n", $nombre);};
$saludo('Mundo');
$saludo('PHP');

    ?>
    </body>
</html>