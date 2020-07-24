<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$text = 'This is a test';
echo strlen($text); // 14

echo substr_count($text, 'is'); // 2

// el string es reducido a 's is a test', así que muestra 1
echo substr_count($text, 'is', 3);

// el texto es reducido a 's i', así que muestra 0
echo substr_count($text, 'is', 3, 3);

// genera una advertencia debido a que 5+10 > 14
echo substr_count($text, 'is', 5, 10);


// muestra sólo 1, debido a que no cuenta subcadenas traslapadas.
$text2 = 'gcdgcdgcd';
echo substr_count($text2, 'gcdgcd');

    ?>
    </body>
</html>