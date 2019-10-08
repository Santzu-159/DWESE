<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
     <!--*............................................ Ejercicio 10  Ecuación de segundo grado  .........................................*-->
        
     <div class='container mt-4' align='center'>
        <h3 class='text-center'>Ejercicio 10  Ecuación de segundo grado</h3>
        <?php

            $a=1;
            $b=30;
            $c=3;

            $x=0;
            $discriminante=pow($b,2)-4*$a*$c;

            if(!$a==0){
                if($discriminante < 0){
                    echo "La ecuación no tiene solución.";
                }
                if($discriminante == 0){
                    $solucion = -$b/(2*$a);
                    echo "La ecuación tiene una solución.";
                    echo "<br>La solución es: $solucion";

                }
                if ($discriminante > 0){
                    
                    $solucion= -$b+(sqrt($discriminante))/(2*$a);
                    echo "<br> Solución 1: ";
                    echo $solucion;

                    $solucion= -$b-(sqrt($discriminante))/(2*$a);
                    echo "<br> Solución 2: ";
                    echo $solucion;
                }
                
            }


            
        ?>
        </div>
</body>
</html>