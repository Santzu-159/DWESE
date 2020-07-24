<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);

    ?>
    </body>
</html>