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
        Realizar un programa que arme la estructura HTML de una tabla con 20 filas y<br>
        10 columnas utilizando dos bucles for. Dentro de las celdas debe ponerse una<br>
        letra O.<br>


        </p>
        
        <?php

            echo "<table align='center' border=1px>".PHP_EOL;
            for($f=0;$f<20;$f++){ //filas

                echo "<tr>".PHP_EOL;

                for($c=0;$c<10;$c++){ //colummas

                    echo "<td>O</td>".PHP_EOL;
                }
                echo "</tr>".PHP_EOL;
            }
            echo "</table>".PHP_EOL;

        ?>
    </div>
</body>
</html>