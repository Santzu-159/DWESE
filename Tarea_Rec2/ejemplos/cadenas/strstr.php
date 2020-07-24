<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // mostrará @example.com

$user = strstr($email, '@', true); // Desde PHP 5.3.0
echo $user; // mostrará name

    ?>
    </body>
</html>