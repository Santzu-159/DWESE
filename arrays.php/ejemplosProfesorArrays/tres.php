<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php
        //como cortar arrays array_slice
        $array = ["uno", "dos", "tres", "cuatro", "cinco", "seis"];
        $res = array_slice($array, 3); //solo un parametro
        echo "<br>";
    print_r($res); //mostrara cuatro, cinco, seis
    echo "<br>";
    $res=array_slice($array, 2, 3); //dos param
    print_r($res); //mostrara tr, cua, cin
    echo "<br>";
    $res=array_slice($array, -5, 2);
    print_r($res);
    echo "<br>";
    //array chunk dividir arrays en varios
    $res=array_chunk($array ,2);
    print_r($res);
    echo "<br>";
    $res=array_chunk($array ,2, true); //preserva las key originales
    print_r($res);
    echo "<br>";

    //explode e implode--------------------------------
    //convierten string a array o array a string
    //explode string a array 
    $cad="El cielo esta enladrillado";
    echo "<br>$cad<br>";
    $array=explode(" ", $cad);
    print_r($array);
    echo "<br>";
    $cad="felipe::perez::felipe@correo.es::http://felipe.es";
    $array=explode("::", $cad);
    print_r($array);
    echo "<br>";
    list($nom, $apellidos, $mail, $url)=explode("::", $cad);
    echo "nom=$nom, ape=$apellidos, mail=$mail, url=$url"."<br>";
    //implode array a String
    $array=["portero", "delanteros", "centrales", "defensas", "suplentes"];
    $string=implode(";", $array);
    echo "<br>$string<br>";
    //añadir o quitar elementos de un array
    //Al final del mismo------------------------
    $array=["portero", "delanteros", "suplentes"];
    array_push($array, "Entrenadores"); //añade entrenadores al final
    print_r($array);
    echo "<br>";
    array_pop($array);
    print_r($array);
    echo "<br>";
    //al principio----------
    array_unshift($array, "Entrenadores");
    print_r($array);
    echo "<br>";
    array_shift($array);
    print_r($array);
    echo "<br>";
    //Juntar dos arrays array_merge ---------------------
    $array1=array(1, "dos", 3, 4, "cinco", 9);
    $array2=array(1, "hola", 3, "adios", 5, 6);
    $union=array_merge($array1, $array2);
    print_r($array1);
    echo "<br>";
    print_r($array2);
    echo "<br>";
    print_r($union);
    echo "<br>";
    //si unimos array asociativos
    $mat1=[
        "uno"=>"'valor 1 array 1'",
        "dos"=>"'valor 2 arra y 1'"
    ];
    $mat2=[
        "uno"=>"'valor 1 array 2'",
        "key 2"=>"'valor 2 array 2'",
        "key 3"=>"'valor 3 array 3'"
    ];
    $res=array_merge($mat1, $mat2);
    print_r($res);
    echo "<br>";
    $mat1=[
        "'valor1 de mat1'", 
        "dos", 
        5=>"'valor 5'"
    ];
    $mat2=[
        1=>"'valor1 de array2'",
         "'Valor 2 array 2'", 
        5=>"'valor 5 array 2'"
    ];
    echo "<br>Mat1<br>";
    print_r($mat1);
    echo "<br>Mat2<br>";
    print_r($mat2);
    $union=array_merge($mat1, $mat2);
    echo "<br>La union<br>";
    print_r($union);
    echo "<br>"

    
        ?>
    </div>
</body>

</html>