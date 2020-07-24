<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
if (function_exists('imap_open')) {
    echo "Las funciones de IMAP están disponibles.<br />\n";
} else {
    Echo "Las funciones de IMAP no están disponibles.<br />\n";
}
    ?>
    </body>
</html>