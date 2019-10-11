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
        
        En el siguiente código añade la definición de una función llamada calculaCantidad() que calcule los<br>
        intereses que obtendría al depositar su dinero en un banco durante un cierto tiempo<br>
        CF=C0⋅(1+( i⋅n)) Cf=Capital Final ,C0=Capital Inicial , i=intereses ,n=años<br>
        
        /* Añadir la función aquí */<br>
        $interes=5;<br>
        echo "<p><b>El interés actual es $interes%.</b></p>" ;<br>
        echo " <p>Si usted deposita 100 &euro; hoy, sus ahorros crecerán a" ;<br>
        echo calculaCantidad(5 , 100,$interes) ;<br>
        echo "&euro; en 5 años.</p>" ;<br>
        echo " <p>Si usted deposita 1.500&euro; hoy, sus ahorros crecerán a";<br>
        echo calculaCantidad(20 , 1500, $interes) ;<br>
        echo "&euro; después de 20 años.</p>" ;<br>
        ?><br>
        Muestra la cantidad solamente con dos decimales, para ello puede usar printf.<br>
        </p>
        
        <?php
            
            $cont=0;
            for($i=2;$cont<10;$cont++){     
                $array[$cont]=$i;
                $i=$i+2;
             }

             do{
                 echo current($array)."<br>".PHP_EOL;
             }while(next($array))

        
        ?>
    </div>
</body>
</html>