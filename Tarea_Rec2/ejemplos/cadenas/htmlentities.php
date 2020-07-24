<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$str = "A 'quote' is <b>bold</b>";

// Produce: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);

// Produce: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);

    ?>
    </body>
</html>