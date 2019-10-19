<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Uno</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 1</h4>
        <p class='text-center'>
        Diseñaremos una función que le pasaremos un array de números y me devolverá un array con el<br>
        mayor y el menor. Controlaremos que nos llegue un array y que los valores sean numéricos.<br>

        </p>
        
        <?php
            $numeros=[2,54,8,200,40,15,75,807,69,10];

            echo calculo($numeros);
        
            function calculo($numeros){
                
                if(is_array($numeros)){ //controlamos que nos llega un array

                    $mayor = PHP_INT_MIN;
                    $menor = PHP_INT_MAX;

                    do{//recorremos el array

                        $valores = current($numeros);
                        
                        if(is_numeric($valores)){ //controlamos que sean numeros

                            if($valores > $mayor){ // si el valor actual es mayor que el valor mayor

                                $mayor = $valores; //el valor mayor será el actual

                            }else if($valores < $menor){ //si el valor actual es menor que el valor menor

                                $menor = $valores;//el valor menor sera el actual
                            }
                        }else{
                            return " Error. Se han encontrado valores no numéricos.".PHP_EOL;

                        }

                    }while(next($numeros));

                    return "<b>Valor mayor: </b>".$mayor;
                    return "<b>Valor menor: </b>".$menor;

                }else{

                    return "Error. El valor que nos has pasado no es un array.";
                }

            } //fin funciom
        ?>
    </div>
</body>
</html>