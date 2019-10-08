<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <?php
        //Algunas funciones interesantes de array_search
        //array_values me devuelve los valores de un array
        //Ejemplo

        $comunidades = [
            "Andalucia" => ["Almeria", "Cadiz", "Jaen", "Malaga", "Sevilla"],
            "Extremadura" => ["Badajoz", "Caceres"]

        ];
        $datos = [
            "uno" => "El primer dato",
            "dos" => "Zal segundo",
            "tres" => "Otro dato mas"
        ];
        echo "<p class='text-center'>array_keys y array_values</p>";
        echo "El array \$datos<br>";
        print_r($datos);
        echo "<br>Usando array_keys<br>";
        print_r(array_keys($datos));
        echo "<br>Usando array_values<br>";
        print_r(array_values($datos));
        //-----------------------------------
        echo "<br>-----------------------------------------------<br>";
        echo "El array \$comunidades<br>";
        print_r($comunidades);
        echo "<br>Usando array_keys<br>";
        print_r(array_keys($comunidades));
        echo "<br>Usando array_values<br>";
        print_r(array_values($comunidades));
        //Ordenacion de arrays
        $aux = $datos;
        echo "<br>-----Ordenacion SORT------</br>";
        echo "<br>Antes de sort</br>";
        print_r($aux);
        echo "<br>Después de sort</br>";
        sort($aux);
        print_r($aux);
        //vamos a un indexado
        $provs = [
            "Almeria", "Malaga", "Zaragoza", "Barcelona"
        ];
        $provs1 = $provs;
        echo "<br>Antes de sort</br>";
        print_r($provs);
        echo "<br>Después de sort</br>";
        rsort($provs);
        print_r($provs);
        //veremos el ksort()
        echo "<br><br>----------------------------------------<br><br>";
        $datos = [
            "uno" => "El primer dato",
            "dos" => "Zal segundo",
            "tres" => "Otro dato mas"
        ];
        $aux = $datos;
        echo "<br>\$datos antes de ksort<br>";
        print_r($datos);
        echo "<br>\$datos después de ksort<br>";
        ksort($datos);
        print_r($datos);
        //
        $vector[] = "Hola";
        $vector[15] = "Adios";
        $vector[3] = "Saludos";
        $vector[] = "Mas y mas";
        $vector[7] = "El dato";
        echo "<br>-------------<br>";
        print_r($vector);
        echo "<br>";
        krsort($vector);
        print_r($vector);
        //----------------------------------asort y arsort
        $datos = [
            "uno" => "El primer dato",
            "dos" => "Zal segundo",
            "tres" => "Otro dato mas"
        ];
        echo "<br><br>\$datos antes de asort<br>";
        print_r($datos);
        echo "<br><br>\$datos dspues de asort<br>";
        asort($datos);
        print_r($datos);
        echo "<br>";
        //----------------------------ARRAY PAD
        //compleamos a izd o der un array para qu tenga una dimension
        $ciudades = [
            "Almeria", "Valencia"
        ];
        echo "<br>\$ciudades=";
        print_r($ciudades);
        $res = array_pad($ciudades, -5, "Sin Nombre");
        echo "<br>Aumentando \$ciudades a 5 elementos<br>";
        print_r($res);
        //------------------------------------splice
        echo "<br>----------------array_splice()-----------<br>";
        $ciudades = [
            "Almeria", "Valencia", "Sevilla", "Murcia"
        ];
        echo "Vector original \$ciudades<br>";
        print_r($ciudades);
        echo "<br>array_splice(\$ciudades, 2)<br>";

        $vector = array_splice($ciudades, 2);
        print_r($vector);

        //-
        echo "<br>array_splice(\$ciudades, 1, -1)<br>";

        $vector = array_splice($ciudades, 1, -1);
        print_r($vector);
        //-
        echo "<br>array_splice(\$ciudades, 1, -1, array('uno', 'dos'))<br>";
        array_splice($ciudades, 1, .1, array('uno', 'dos'));
        print_r($vector);


        //--------------------
        $dado = [
            "uno", <link href="css/style.css" rel="stylesheet">
            "dos", <link href="css/style.css" rel="stylesheet">
            "tres" <link href="css/style.css" rel="stylesheet">,
            "cuatro",
            "cinco",
            "seis"
        ];
        echo "<br>";
        print_r($dado);
        shuffle($dado);
        echo "<br>";
        print_r($dado);
        shuffle($dado);
        echo "<br>";
        print_r($dado);
        //--------------------------------------------------
        echo "<br>-----------------------<br>";
        $nombre="Juan";
        $edad=23;
        $mail="juan@gmail.com";
        $datos=compact('nombre', 'edad', 'mail');
        print_r($datos);


        ?>
    </div>

</body>

</html>