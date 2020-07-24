<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
// Los delimitadores pueden ser barra, punto o guión
$fecha = "04/30/1973";
list($mes, $día, $año) = split('[/.-]', $fecha);
echo "Mes: $mes; Día: $día; Año: $año<br />\n";

    ?>
    </body>
</html>