<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$pos = strrpos($mystring, "b");
if ($pos === false) { // nota: tres signos de igual
    // no encontrado...
}

?> 

<?php
$foo = "0123456789a123456789b123456789c";

var_dump(strrpos($foo, '7', -5));  // Comienza mirando hacia atrás cinco posiciones 
                                   // desde el final. Resultado: int(17)

var_dump(strrpos($foo, '7', 20));  // Inicia la búsqueda 20 posiciones en el
                                   // string. Resultado: int(27)

var_dump(strrpos($foo, '7', 28));  // Resultado: bool(false)

    ?>
    </body>
</html>