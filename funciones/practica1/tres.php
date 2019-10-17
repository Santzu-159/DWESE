<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tres</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 3</h4>
        <p class='text-center'>
        Crearemos una función que pasado un número entre 1 y 12 me de el mes correspondiente y si le<br>
        paso ademas un numero entre 1 y 7 el día de la semana. La función guardará un array con los meses<br>
        y otro con los días de la semana. Ejemplo funcion(1,2) devuelve Enero y Martes, función(12,5)<br>
        devuelve Diciembre y Viernes. Error si no ajusto los índices entre 1 y 12 y entre 1 y 7<br>

        </p>
        
        <?php
            $mes=2;
            $sem=5;

            echo fecha($mes,$sem);

            function fecha($mes, $semana=-1){   
                $meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
                $semana= ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
                
                if($mes>=1 || $mes <= 12){

                    if( $sem==-1 ){
                        return  $meses[$mes-1];


                    }else if($sem >=1 || $sem <=7){

                        return $meses[$mes-1]."<br>".$semana[$sem-1];
                    }
                }

            }    

        ?>
    </div>
</body>
</html>