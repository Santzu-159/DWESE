<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
echo strnatcasecmp("2Hello world!","10Hello WORLD!"); //-1
echo "<br>";
echo strnatcasecmp("10Hello world!","2Hello WORLD!"); //1

    ?>
    </body>
</html>