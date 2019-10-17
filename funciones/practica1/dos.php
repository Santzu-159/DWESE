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
        Sabemos que la división entera de un número m, por otro n en realidad es calcular la cantidad de<br>
        veces que a m le podemos restar n, es decir es un resta sucesiva. Implementaremos una función que<br>
        me devuelva el resultadoado de la división entera de un dividendo m por un divisor n usando las restas<br>
        sucesivas. Comprobaremos que los números son enteros<br>
        </p>
        
        <?php

            $m=25;
            $n=5;
           // $contador=1;

                $resultado=division($m,$n);

                echo "$m : $n = $resultado";

                
                function division(int $m, int $n,$contador=1){

                    if(is_int($m) && is_int($n)){
                        //Si numero2 es más grande que numero1, invierto los valores para evitar problemas
                        if($m<$n){

                            $auxiliar=$m;
                            $m=$n;
                            $n=$auxiliar;
                        }
                        $resultado=$m-$n;
                        $contador++;

                        if(($resultado-$n)>0){
                            return division($resultado,$n,$contador);
                        }
                    }else{

                        return "Las variables deben de ser numeros.";
                    }
                    return $contador;
                }
                
        ?>
    </div>
</body>
</html>