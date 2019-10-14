<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Doce</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 12</h4>
        <p class='text-center'>
            Idem anterior pero encontrar el mínimo.<br>


        </p>
        
        <?php
            $numeros=[1,2,3,4,5,80,1205,8,13,-7];
            $menorNum=PHP_INT_MAX;//lo inicializamos al valor mas alto (antes lo inicialice a 0 y era ese el valor que me salia ya que era el mas bajo)
        
            for($i=0;$i<count($numeros);$i++){

                if($menorNum>$numeros[$i]){

                    $menorNum=$numeros[$i];
                }
            }
            echo "El array es: ";
            print_r($numeros);
            echo " y el número ".$menorNum." es el menor de todos.";
            
        

        ?>
    </div>
</body>
</html>