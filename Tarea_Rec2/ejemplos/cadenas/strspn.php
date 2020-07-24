<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
// subject no inicia con ningún caracter de mask
var_dump(strspn("foo", "o"));

// examina dos caracteres de subject iniciando en el offset 1
var_dump(strspn("foo", "o", 1, 2));

// examina un caracter de subject iniciando en el offset 1
var_dump(strspn("foo", "o", 1, 1));

    ?>
    </body>
</html>