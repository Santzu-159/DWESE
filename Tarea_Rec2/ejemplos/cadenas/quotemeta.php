<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$str = "Hello world. (can you hear me?)";
echo quotemeta($str); //Hello world\. \(can you hear me\?\)

    ?>
    </body>
</html>