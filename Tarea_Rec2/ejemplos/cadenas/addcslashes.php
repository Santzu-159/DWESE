<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
echo addcslashes('foo[ ]', 'A..z');
// salida:  \f\o\o\[ \]
// Serán escapadas todas las letras mayúsculas y minúsculas
// ... pero también [\]^_`

    ?>
    </body>
</html>