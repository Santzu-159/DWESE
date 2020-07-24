<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$nuevo = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $nuevo; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

    ?>
    </body>
</html>