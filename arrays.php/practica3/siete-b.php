<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Siete-B</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 7-B</h4>
        <p class='text-center'>
            Definir un array de 5 elementos y asignar a cada uno de ellos un número.<br>
            Mediante una estructura condicional, determinar si el promedio de los números<br>
            son mayores o menores que 6. Mostrar un mensaje por pantalla informando el<br>
            resultado.<br>
        </p>
        
        <?php
            
            $array=[
                1,7,6,2,5
            ];

            $contMa=0;
            $contMe =0;

            do{
                $numero=(current($array));
                if($numero>6){
                    $contMa++;
                }else if($numero<6){
                    $contMe++;
                }
            }while(next($array));
            

            if($contMa>$contMe){
                echo "La mayoría de números es mayor de 6".PHP_EOL;
            }
            else if($contMe>$contMa){
                echo "La mayoría de números es menor de 6".PHP_EOL;
            }
            else{
                echo "<br>La cantidad de números mayores y menores de 6 es la misma.".PHP_EOL;
            }
        
        

        ?>
    </div>
</body>
</html>