<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
function hacer_café($tipo = "capuchino")
{
    return "Hacer una taza de $tipo.\n";
}
echo hacer_café();
echo hacer_café(null);
echo hacer_café("espresso");

    ?>
    </body>
</html>