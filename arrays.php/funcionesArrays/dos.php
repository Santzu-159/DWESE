<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contadorent="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contadorent="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dos</title>
</head>
<body>
    <div class= "contadorainer m-5" align ="center">
        <h4 class='text-center'>Ejercicio 2</h4>
        <p class='text-center'>
        Sabemos que la división entera de un número m, por otro n en realidad es calcular la cantidad de
        veces que a m le podemos restar n, es decir es un resta sucesiva. Implementaremos una función que
        me devuelva el resultadoado de la división entera de un dividendo m por un divisor n usando las restas
        sucesivas. Comprobaremos que los números son enteros
        </p>

        <?php

            $num1 = 300;
            $num2 = 60;
           // $contador =1;
            $resultado = diviResta($num1,$num2);

            echo "$num1 : $num2 = $resultado";

            function diviResta(int $num1, int $num2, int $contador = 1){

                if(is_int($num1) && is_int($num2)){
                    
                    if($num1 < $num2){
                        
                        $auxiliar = $num1;

                        $num1 = $num2;

                        $num2 = $auxiliar;
                    }
                    $resultado = $num1-$num2;
                    $contador++;

                    if(($resultado - $num2) > 0){

                        return diviResta($resultado,$num2,$contador);
                    }
                }else{
                    return 0;
                }
                return $contador;
            }
            
        ?>
        
    </div>
</body>
</html>