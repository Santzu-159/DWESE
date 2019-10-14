<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Trece</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 13</h4>
        <p class='text-center'>

            Hacer un programa que calcule todos los números primos entre 1 y 50 y los<br>
            muestre por pantalla. Un número primo es un número entero que sólo es<br>
            divisible por 1 y por sí mismo.<br>

        </p>
        
        <?php
            
            $desde = 1; // Desde el numero 
            $hasta = 50;// Hasta el numero

            echo "<b>Números primos del $desde al $hasta </b>"; 

            for ($i = $desde; $i <= $hasta; $i++) 
            { 
                $nDiv = 0; // Número de divisores 

                for ($j = 1; $j <= $i; $j++) // Desde 1 hasta el valor que tenga $i 
                { 
                    if($i%$j == 0) // $j es un divisor de $i 
                    { 
                        $nDiv = $nDiv + 1; // AAñadimos un divisor mas. 
                    } 
                } 

                if($nDiv == 2 or $i == 1)// Si tiene 2 divisores o es 1 --> Es primo 
                { 
                    print '<br>'; 
                    print $i; 
                } 
            } 
        

        ?>
    </div>
</body>
</html>