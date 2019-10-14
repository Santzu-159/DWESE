<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Once</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 11</h4>
        <p class='text-center'>
            Dado un array enumerativo de 10 elementos de números enteros (sin coma<br>
            decimal), encontrar el máximo de todos esos números usando una estructura<br>
            iterativa y mostrarlo por pantalla.<br>


        </p>
        
        <?php
            
            $numeros=[1,2,3,4,5,80,1205,8,13,-7];
            $mayorNum=PHP_INT_MIN;
        
            for($i=0;$i<count($numeros);$i++){

                if($mayorNum<$numeros[$i]){
                    
                    $mayorNum=$numeros[$i];
                }
            }
            echo "El array es: ";
            print_r($numeros);
            echo " y el número ".$mayorNum." es el mayor de todos.";
        ?>
    </div>
</body>
</html>