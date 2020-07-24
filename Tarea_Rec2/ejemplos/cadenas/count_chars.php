<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "Se ha encontrado $val instancia (s) de \"" , chr($i) , "\" en la cadena.\n";
}

    ?>
    </body>
</html>