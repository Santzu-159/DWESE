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
        Dada la frase “Bienvenidos al a aventura de aprender PHP en 30 horas” utilizar funciones de<br>
        cadena para:<br>
        - Mostrar la parte central de la frase<br>
        - Averiguar la posición de la palabra PHP<br>
        - Reemplazar la palabra “aventura” por la cadena “<’b>misión<’b>”.<br>
        --------------------------------------------------------------------------------------------------<br>
        </p>

        <?php

        $frase = "Bienvenidos al a aventura de aprender PHP en 30 horas";
       
        echo "El caracter central de la frase es: ".$frase[(int)(strlen($frase)/2)]."<br>";
        echo  "La palabra PHP se encuentra en la posicion: ".strpos($frase,"PHP")."<br>";
        echo substr_replace($frase,"<'b>mision&lt;/b>",strpos($frase,"aventura"),strlen('aventura'))."<br>";

        
        ?>
    </div>
</body>
</html>