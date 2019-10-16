<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Quince</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 15</h4>
        <p class='text-center'>
        
            Implementa un array asociativo con los siguientes valores y ordénalo de menor a mayor.<br>
            Muestra los valores en una tabla.<br>
            $numeros = array(3, 2, 8, 123, 5, 1);<br>
        </p>
        
        <?php

            $numeros = [
                "tres"=>3,
                "dos"=>2,
                "ocho"=>8,
                "ciento veintitrés"=>123,
                "cinco"=>5,
                "uno"=>1
            ];
                    
            sort($numeros);
            echo "<br><br>".PHP_EOL;
            echo "<table align='center' border=1px>".PHP_EOL;

                do{
                    echo "<tr>".PHP_EOL;
                    echo "<td >".key($numeros)."</td>".PHP_EOL;
                    echo "<td>".current($numeros)."</td>".PHP_EOL;
                    echo "</tr>".PHP_EOL;

                }while(next($numeros));

                echo "</table>".PHP_EOL;

        ?>
    </div>
</body>
</html>