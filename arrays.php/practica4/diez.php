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
        
            Rellena un array de 10 enteros con los 10 primeros números naturales. Calcula la media de los<br>
            que están en posiciones pares y muestra los impares por pantalla.<br>
        </p>
        
        <?php

            $numeros=[1,2,3,4,5,6,7,8,9,10];
            $countPar=0;
            $sumaPar=0;
            
            
            echo "<h3>Media de números en posición impar :</h3>";

            do{
                
                $indice=key($numeros);
                $valor=current($numeros);

                if($indice%2==0){

                    $countPar++;
                    $sumaPar+=$valor;

                }else{

                    echo $valor." ";

                }

            }while(next($numeros));
            
            echo "<br><h3>Media de  números en posición par :</h3>";
            echo $sumaPar/$countPar;


        ?>
    </div>
</body>
</html>