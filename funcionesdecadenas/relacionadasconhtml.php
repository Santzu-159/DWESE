<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 1 -- htmlentities(cad1)</h4>
        <h6 class='text-center'>Trabaja en html (se comprueba en el código fuente de la página)</h6>
        <?php
        $cadena="¿el camión es rojo? No, niñooooo";
        echo "<br>";
        echo $cadena."<br>".PHP_EOL;
        echo htmlentities($cadena);

        /* Resultado cuando vemos el codigo fuente de la página:
        --------------------------------------------------------

        php normal--->  <br>¿el camión es rojo? No, niñooooo<br>

        con htmlentities ---> &iquest;el cami&oacute;n es rojo? No, ni&ntilde;ooooo 

        */

        echo "En html mostramos una imagen como <img serc='url imagen'>";

        echo "<br>";

    
        ?>
    </div>
</body>
</html>