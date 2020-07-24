<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
//De esta forma, strtr() hace una conversión byte a byte
//Por lo tanto, aquí se asume una codificación de un solo byte:
    $addr = strtr($addr, "äåö", "aao");

    ?>
    </body>
</html>