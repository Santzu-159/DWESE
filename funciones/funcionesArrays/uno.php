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
            Diseñaremos una función que le pasaremos un num de números y me devolverá un num con el
             mayor y el menor. Controlaremos que nos llegue un num y que los valores sean numéricos.
        </p>
        <?php
                $num=[1,20,800,45,67,31,5,29];

            echo mayMen($num);

            function mayMen($numeros){
                if(is_array($numeros)){
                    $mayor=PHP_INT_MIN;
                    $menor=PHP_INT_MAX;
                    do{
                        $valor=current($numeros);
                        if(is_numeric($valor)){
                            if($valor>$mayor){
                                $mayor=$valor;
                            }
                            if($valor<$menor){
                                $menor=$valor;
                            }
                        }else{
                            return "Error. Solo se pueden de introducir números.".PHP_EOL;
                        }
                    }while(next($numeros));

                    return "$mayor es el número mayor y $menor es el número menor.".PHP_EOL;
                }else{
                    return "Introduce un número por favor.".PHP_EOL;;
                }
            }
    
    ?>
    </div>
</body>
</html>