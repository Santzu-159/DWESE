<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dos</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 2</h4>
        <p class='text-center'>
        Crea un array con una lista de 5 alumnos de la clase. Muestra primero la lista de<br>
        los 3 primeros alumnos del array y luego los dos últimos de la lista usando las<br>
        funciones array_slice y array_splice.<br>

        </p>
        
        <?php
            
            $alumnos=["Enrique","Miguel Angel","Eduardo","Ruben","Juan Francisco"];

            echo "<b>Array_slice:</b><br> Mostramos los tres primeros alumnos: <br>".PHP_EOL;
            print_r(array_slice($alumnos,0,3)); //array - posicion donde se empieza - cantidad de elemntos a monstrar 

            echo "<br><br><b>Array_splice:</b><br> Mostramos los dos ultimos alumnos: <br>".PHP_EOL;
            print_r(array_splice($alumnos,3));

        ?>
    </div>
</body>
</html>