<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nueve</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 9</h4>
        <p class='text-center'>

            Dado el siguiente array: $nombres = array
            (‘roberto’,’juan’,’marta’,’moria’,’martin’,’jorge’,’miriam’,’nahuel’,’mirta’).
            Realizar un programa en PHP que lo recorra y genere un nuevo array con
            aquellos nombres que comiencen con la letra m. Definir qué bucle conviene
            usar y luego mostrar el array por pantalla sin usar var_dump ni print_r. Los
            nombres deben aparecer separados por coma


        </p>
        
        <?php
            $nombres = array('roberto','juan','marta','moria','martin','jorge','miriam','nahuel','mirta');
            
            $m=[];

            do{
                $current = current($nombres);
                if($current[0]=="m"){
                    $m[]=$current;
                }

            }while(next($nombres));

            do{
                echo current($m).", ";
            }while(next($m));

        ?>
    </div>
</body>
</html>