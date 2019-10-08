<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <?php
        define("PI","3.1415");
        define("USUARIO","Sandra");
    ?>
</head>
<body>
    <div class ="container, mt-5">
        <h4 class ='text-center'>Constantes</h4>
    </div>
    <?php
        //*------------------ Constantes -------------------*
        echo PI;
        $radio = 3;
        echo "<br>";
        $perimetro = (2*PI*$radio);
        echo "El perimetro de una circunferencia de radio: $radio es: ".$perimetro;
        echo "<br>";
        echo "El usuario es: ".USUARIO;

        //*------------------ Variables de variables -------------------*

        $nombre ="contador";
        $$nombre =0;
        echo "<br> El valor de \$contador es: ".$contador;

        echo "<br>"; 
        $palabra = "Hola";
        var_dump($palabra);
        echo "<br>"; 
        var_dump(PI);


    ?>
</body>
</html>