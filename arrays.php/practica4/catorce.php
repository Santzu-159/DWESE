<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Catorce</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 14</h4>
        <p class='text-center'>
            
            Implementa un array asociativo con los siguientes valores:<br>
            $estadios_futbol = array(“Barcelona” => “Camp Nou”, “Real Madrid” => “Santiago Bernabeu”,<br>
            “Valencia” => “Mestalla”, “Real Sociedad” => “Anoeta”);<br>
            Muestra los valores del array en una tabla, has de mostrar el índice y el valor asociado.<br>
            Elimina el estadio asociado al Real Madrid.<br>
            Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta vez en una lista<br>
            numerada.<br>
        </p>
        
        <?php

            $estadios_futbol =array(

                "Barcelona" => "Camp Nou",
                "Real Madrid" => "Santiago Bernabeu",
                "Valencia" => "Mestalla",
                "Real Sociedad" => "Anoeta"
            );

            echo "<br><br>".PHP_EOL;
            echo "<table align='center' border=1px>".PHP_EOL;

                do{

                    echo "<tr>".PHP_EOL;
                    echo "<td>".key($estadios_futbol)."</td>".PHP_EOL;
                    echo "<td>".current($estadios_futbol)."</td>".PHP_EOL;
                    echo "</tr>".PHP_EOL;

                }while(next($estadios_futbol));

                reset($estadios_futbol);
                echo "</table><br><br>".PHP_EOL;

                unset($estadios_futbol["Real Madrid"]);
                echo "<ol>".PHP_EOL;

                do{

                    echo "<li>".key($estadios_futbol)." -> ".current($estadios_futbol)."</li>".PHP_EOL;

                }while(next($estadios_futbol));

                echo "</ol>".PHP_EOL;
        ?>
    </div>
</body>
</html>