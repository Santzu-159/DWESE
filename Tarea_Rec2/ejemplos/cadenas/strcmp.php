<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$var1 = "Hola";
$var2 = "hola";
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 no es igual a $var2 en una comparación que considera mayúsculas y minúsculas';
}

    ?>
    </body>
</html>