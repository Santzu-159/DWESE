<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Seis</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 6</h4>
        <p class='text-center'>

            Mostrar la salida del código siguiente: (La idea es que lo hagas sin escribir el código)<br>
            echo 'El valor actual de la variable $contar es: ' . contar() .;<br>
            echo 'El valor actual de la variable $contar es: ' . contar() .;<br>
            echo 'El valor actual de la variable $contar es: ' . contar() .;<br>
            echo 'El valor actual de la variable $contar es: ' . contar() .;<br>
            echo 'El valor actual de la variable $contar es: ' . contar1() .;<br>
            echo 'El valor actual de la variable $contar es: ' . contar1() .;<br>
            echo 'El valor actual de la variable $contar es: ' . contar1() .;<br>
            echo 'El valor actual de la variable $contar es: ' . contar1() .;<br><br>

            function contar(){<br>
                static $contar;<br>
                $contar++;<br>
                return $contar;<br>
            }<br>
            function contar1(){<br>
                $contar;<br>
                $contar++;<br>
                return $contar;<br>
            }<br><br>
         </p>

        <?php
            echo "Explicación: <br><br>";
            
            echo "El problema reside en que cuando llamamos a la funcion contar1(), como la variable \$contar1 no es estática, <br>la estamos declarando una y otra vez,
            tantas veces como llamamos a la funcion y por eso se 'reinicia'<br>";

            echo "Sin embargo la variable \$contar al ser estática, la podemos llamar desde cualquier parte de nuestro código y por eso mismo, no se reinicia<br>
            y va modificando su valor inicial.";


            
   
         ?>
    </div>
</body>
</html>