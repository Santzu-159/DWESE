<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
$a = strcspn('abcd',  'apple');
$b = strcspn('abcd',  'banana');
$c = strcspn('hello', 'l');
$d = strcspn('hello', 'world');
$e = strcspn('abcdhelloabcd', 'abcd', -9);
$f = strcspn('abcdhelloabcd', 'abcd', -9, -5);

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);

    ?>
    </body>
</html>