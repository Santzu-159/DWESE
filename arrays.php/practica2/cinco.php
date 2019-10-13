<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cinco</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 5</h4>
        <p class='text-center'>
            Crea un array llamado pila como éste:<br>
            $pila = array(“cinco” => 5, “uno”=>1, “cuatro”=>4, “dos”=>2, “tres”=>3);<br>
            Muestra el array ordenado por asort, arsort, ksort, sort, rsort.<br>
            </p>
        
        <?php
            
            $pila= array(
                "cinco" => 5,"uno" => 1, "cuatro" => 4, "dos"=>2, "tres"=>3
            );


        echo "<b>Array original</b>: ".PHP_EOL;
        print_r($pila);
        echo "<br>".PHP_EOL;

        $ksortPila = $pila;
        ksort($ksortPila);
        echo "<b>Array con ksort</b>: ".PHP_EOL;
        print_r($ksortPila);
        echo "<br>".PHP_EOL;

        $sortPila = $pila;
        sort($sortPila);
        echo "<b>Array con sort</b>: ".PHP_EOL;
        print_r($sortPila);
        echo "<br>".PHP_EOL;

        $rsortPila = $pila;
        rsort($rsortPila);
        echo "<b>Array con rsort</b>: ".PHP_EOL;
        print_r($rsortPila);
        echo "<br>".PHP_EOL;

        $asortPila = $pila;
        asort($asortPila);
        echo "<b>Array con asort</b>: ".PHP_EOL;
        print_r($asortPila);
        echo "<br>".PHP_EOL;

        $arsortPila = $pila;
        arsort($arsortPila);
        echo "<b>Array con arsort</b>: ".PHP_EOL;
        print_r($arsortPila);
        echo "<br>".PHP_EOL;



        ?>
    </div>
</body>
</html>