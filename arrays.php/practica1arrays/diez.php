<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Diez</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 10</h4>
        <p class='text-center'>
        Tenemos el array siguiente:<br>
        “Luis”, “Ana”, “Lucas”, “Zacarias”, “Tomas”, “Juan”, “Ginesa”, “Oscar”<br>
        Mustra el array resultante al aplicarle al anterior sort(), rsort(), asort(), arsort()<br>

        </p>
        
        <?php

            $personas=[
                "Luis",
                "Ana",
                "Lucas",
                "Zacarias",
                "Tomas",
                "Juan",
                "Ginesa",
                "Oscar"
            ];


        echo "<b>Array original</b>: ".PHP_EOL;
        print_r($personas);
        echo "<br>".PHP_EOL;

        $sortPersona = $personas;
        sort($sortPersona);
        echo "<b>Array con sort</b>: ".PHP_EOL;
        print_r($sortPersona);
        echo "<br>".PHP_EOL;

        $rsortPersona = $personas;
        rsort($rsortPersona);
        echo "<b>Array con rsort</b>: ".PHP_EOL;
        print_r($rsortPersona);
        echo "<br>".PHP_EOL;

        $asortPersona = $personas;
        sort($asortPersona);
        echo "<b>Array con asort</b>: ".PHP_EOL;
        print_r($asortPersona);
        echo "<br>".PHP_EOL;

        $arsortPersona = $personas;
        sort($arsortPersona);
        echo "<b>Array con arsort</b>: ".PHP_EOL;
        print_r($arsortPersona);
        echo "<br>".PHP_EOL;



        ?>
    </div>
</body>
</html>