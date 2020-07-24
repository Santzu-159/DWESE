<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$email = 'USER@EXAMPLE.com';
echo stristr($email, 'e'); // salida ER@EXAMPLE.com
echo stristr($email, 'e', true); // A partir de PHP 5.3.0, salida US

    ?>
    </body>
</html>