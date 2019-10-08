<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ocho</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 8</h4>
        <p class='text-center'>
        Dada la frase “Esta cadena tiene muchas letras” muestra:<br>
        - La posición de la primera ocurrencia de la letra ‘a’.<br>
        - La posición de la primera ocurrencia de la letra ‘m’.<br>
        - La posición de la primera ocurrencia de la palabra “tiene”.<br>
        - La primera ocurrencia desde el final de la letra ‘a’.<br>
        - La frase desde la aparición de la palabra “cadena” hasta el final.<br>
        - La cadena desde el carácter 12 hasta el final.<br>
        - La cadena devolviendo 6 caracteres desde el carácter 18.<br>
        - La cadena devolviendo los 6 últimos caracteres.<br>
        - La cadena desde la posición 26, contando desde atrás, 6 caracteres.<br>
        - La cadena empezando en el carácter 4 y terminando en el 7 desde atrás.<br>
        -----------------------------------------------------------------------------<br>
        </p>

        <?php
        $frase= "Esta cadena tiene muchas letras";
        echo "La primera ocurrencia de 'a' es ".strpos($frase,"a")."<br>";
        echo "La primera ocurrencia de 'm' es ".strpos($frase,"m")."<br>";
        echo "La primera ocurrencia de 'tiene' es ".strpos($frase,"tiene")."<br>";
        echo "La primera ocurrencia desde el final de 'a' es ".strrpos($frase,"a")."<br>";
        echo "La frase desde la aparición de la palabra “cadena” hasta el final es :".substr($frase,strpos($frase,"cadena"))."<br>";

        echo "Partes de la cadena";

        echo substr($frase,12)."<br>";
        echo substr($frase,18,6)."<br>";
        echo substr($frase,-6)."<br>";
        echo substr($frase,-26,6)."<br>";
        echo substr($frase,4,-7)."<br>";
        
        ?>
    </div>
</body>
</html>