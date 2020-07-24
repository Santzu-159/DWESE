<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$array = array('apellido', 'email', 'teléfono');
$separado_por_comas = implode(",", $array);

echo $separado_por_comas; // apellido,email,teléfono

// Devuelve un string vacío si se usa un array vacío:
var_dump(implode('hola', array())); // string(0) ""

    ?>
    </body>
</html>