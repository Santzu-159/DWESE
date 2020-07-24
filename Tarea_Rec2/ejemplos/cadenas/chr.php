<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$str = "La cadena termina en un escape: ";
$str .= chr(27); /* añade un carácter de escape al final de  $str */

/* A menudo esto es más útil */

$str = sprintf("TLa cadena termina en un escape: %c", 27);

    ?>
    </body>
</html>