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
        Crearemos una función que pasado un número entre 1 y 12 me de el mes correspondiente y si le
        paso ademas un numero entre 1 y 7 el día de la semana. La función guardará un array con los meses
        y otro con los días de la semana. Ejemplo funcion(1,2) devuelve Enero y Martes, función(12,5)
        devuelve Diciembre y Viernes. Error si no ajusto los índices entre 1 y 12 y entre 1 y 7

        </p>
        <?php

            $mes=2;
            $dia=4;

            echo fecha($mes,$dia);
            
            function fecha($mes,$dia=null){

                if($mes>0 && $mes<13){

                    $resultado="";

                    $meses=["Enero","Febrero","Marzo", "Abril","Mayo","Junio","Julio", "Agosto","Septiembre","Octubre","Noviembre", "Diciembre"];

                    $resultado.="Mes: ".$meses[$mes-1];

                    if($dia>0 && $dia<8){
                        $semana=[ "Lunes", "Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];

                        $resultado.="<br>Dia de la semana: ".$semana[$dia-1];
                    }
                    return $resultado;
                }
                
                return "Error. Por favor, introduzca datos válidos.".PHP_EOL;
                
            }
                
    
        ?>
    </div>
</body>
</html>