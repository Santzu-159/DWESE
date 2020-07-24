<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
function sum(...$números) {
    echo "Se han pasado ".func_num_args()." argumentos<br>";
    echo "El primer argumento es ".func_get_arg(0);
    //func_get_args() devuelve un array con todos los argumentos igual a $números
    $acc = 0;
    foreach ($números as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);

    ?>
    </body>
</html>