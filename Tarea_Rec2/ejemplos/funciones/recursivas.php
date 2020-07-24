<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
function recursividad($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursividad($a + 1);
    }
}
    ?>
    </body>
</html>