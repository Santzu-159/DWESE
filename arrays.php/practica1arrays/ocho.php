<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Diez</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 10</h4>
        <p class='text-center'>
        Mostrar por pantalla el siguiente fragmento html con una sentencia PHP:<br>
        <xmp><a href= "/arbol/prueba.php" class="prueba" onmouseOver="status='hola';
        return trae;">pruebade\enlace</a></xmp>
        </p>

        <?php
            echo "Resultado: <br>";
            echo htmlspecialchars("<a href= \"/arbol/prueba.php\" class=\"prueba\" onmouseOver=\"status='hola';
            return trae;\">pruebade\enlace</a>");


        
        ?>
    </div>
</body>
</html>