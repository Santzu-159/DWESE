<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cinco</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 5</h4>
        <p class='text-center'>
            Dado el siguiente array:
                $paises = array (
                'alemania',
                'brasil',
                'italia',
                'chile',
                'uruguay',
                'australia'
                );
            Se pide lo siguiente
                1.Eliminar los elementos ‘alemania’, ‘italia’ y ‘australia’
                2.Insertar los elementos ‘argentina’ y ‘bolivia’
                3.Ordenar por orden alfabético el array
                4.Mostrar el resultado por pantalla con print_r
                Este es muy fácil si tenemos presentes las funciones de la clase teórica. Primero
                se hace la definición que está ya hecha en el enunciado. Luego se eliminan con
                la función unset aquellos elementos que se piden. A continuación, se agregan
                los dos que se piden, se ordenan con sort y finalmente se muestra por pantalla
                con print_r
        </p>
        
        <?php
            
            $paises = array (
                'alemania',
                'brasil',
                'italia',
                'chile',
                'uruguay',
                'australia'
               );


            echo "Array original: <br>";
            print_r($paises);

            echo "<br>Eliminamos Alemania, Italia y Australia: <br>";
            unset($paises[0],$paises[2],$paises[5]);
            print_r($paises);
            
            echo "<br>Insertamos Argentina y Bolivia: <br>";
            array_push($paises,"argentina","bolivia");
            print_r($paises);

            echo "<br>Ordenamos Alfabéticamente el array: <br>";
            sort($paises);
            print_r($paises);




        ?>
    </div>
</body>
</html>