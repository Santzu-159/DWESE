<!DOCTYPE html>
<html lang="es">
    <head>
        <title>arrays</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">
    <p class='text-center'>Arrays en Php
    </p>
    <?php
    //podemos utilizarlos como en java
    //Notacion Antigua
    $vector=array("uno", "dos", "tres");
    //notacuion nueva
    $vector1=[
        "Barcelona", 
        "Madrid",
        "Almeria",
        "Pamplona"
    ];
    //podemos recorrerlos como en java
    //count me da los elementos de un array
    for($i=0; $i<count($vector); $i++){
        echo "\$vector[$i]=".$vector[$i]."<br>";
    }
    echo "El numero de elementos de vector1 es ".count($vector1);
    echo "<br>\$vector1[2]=".$vector1[2];
    //Mas de una dimension----------------------------
    $capitales=[
        ["Madrid", "Barcelona", "Sevilla", "Tarragona", "Soria"],
        ["Badajoz", "Caceres", "Almeria", "Valencia"],
        ["Granada", "Cadiz", "Jaen", "Murcia"]
    ];
    echo "<br>La dimension de \$capitales=".count($capitales);
    echo "<br>LA dimension de la primera fila es".count($capitales[0]);
    ///Mostramos $capitales
    echo "<br>";
    for($f=0; $f<count($capitales); $f++){
        echo "<br>";
        for($c=0; $c<count($capitales[$f]); $c++){
            echo "capitales[$f][$c] = ".$capitales[$f][$c]. " ";
        }
    }
    //A partir de aqui empiza la fiesta
    $vector=[
        "uno", 
        "dos"
    ];
    $vector[]="hola";
    $vector[23]="Adios";
    $vector[]="Saludo";
    echo "<br>El num de elementos de vector será: ".count($vector);
    //esto YA no nos sirve
    for($i=0; $i<count($vector); $i++){
        echo "\$vector[$i]=".$vector[$i]."<br>";
    }
    //------------
    echo "<br> Resultado de var_dump</br>";
    var_dump($vector);
    echo "<br>Resultado de print_r<br>";
    print_r($vector);
    $vector[3]="Nuevo Valor";
    echo "<br> Resultado de var_dump</br>";
    var_dump($vector);
    echo "<br>Resultado de print_r<br>";
    print_r($vector);
    $vector[]="Otro más";
    echo "<br>Resultado de print_r<br>";
    print_r($vector);
    //--------------------
    //algunos metodos utiles
    //current, key, reset, next, prev, end;
    echo "<br>#---Valores del vector al principio---#<br>";
    echo "current(\$vector)=".current($vector)."<br>";
    echo "key(\$vector)=".key($vector)."<br>";  
    next($vector);
    echo "<br>#---Valores del vector despues del next---#<br>";
    echo "current(\$vector)=".current($vector)."<br>";
    echo "key(\$vector)=".key($vector)."<br>"; 
    next($vector);
    echo "<br>#---Valores del vector despues del next---#<br>";
    echo "current(\$vector)=".current($vector)."<br>";
    echo "key(\$vector)=".key($vector)."<br>"; 
    next($vector);
    echo "<br>#---Valores del vector despues del next---#<br>";
    echo "current(\$vector)=".current($vector)."<br>";
    echo "key(\$vector)=".key($vector)."<br>"; 
    reset($vector);
    echo "<br>#---Valores del vector despues del reset---#<br>";
    echo "current(\$vector)=".current($vector)."<br>";
    echo "key(\$vector)=".key($vector)."<br>"; 
    //-------------------------
    reset($vector);
    do{
        echo "\$vector[".key($vector). "]=".current($vector). "<br>";
        echo "<br>";

    }while(next($vector));
    reset($vector);
    //---------------------------------
    echo "<br>------------------------------------<br>";
    do{
        $i=key($vector);
        echo "\$vector[$i]=".$vector[$i];
        echo "<br>";
    }while(next($vector));
    //recorramos el vector al reves ---------------------
    end($vector); //Nos posicionamos al final
    echo "<br>-----------Vector al revesssssssss---------<br>";
    do{
        $i=key($vector);
        echo "\$vector[$i]=".$vector[$i];
        echo "<br>";
    }while(prev($vector));
    //-------------------------------------
    echo "<br>";
    //Arrays asociativos clave=>valor
    $misCapitales=[
        "Extremadura"=>"dos",
        "Andalucia"=>"Siete",
        "Valencia"=>"tres",
        "Aragon"=>"No me acuerdo, o quizas si"
    ];
    print_r($misCapitales);
    echo "<br>";
    echo $misCapitales["Andalucia"];
    echo "<br>";
    echo $misCapitales["Aragon"];
    $misCapitales[]="Esta no tinene ni nombre";
    echo "<br>";
    print_r($misCapitales);
    echo "<br>";
    echo $misCapitales[0];
    $misCapitales[]="Ni esta";
    echo "<br>";
    print_r($misCapitales);
    $misCapitales["0"]="Esta va entre comillas";
    echo "<br>";
    print_r($misCapitales);
    $misCapitales[23]="Esta es la 23";
    $misCapitales[]="Cual ser esta?";
    echo "<br>";
    print_r($misCapitales);
    $misCapitales["Madrid"]="Solo Una";
    echo "<br>";
    print_r($misCapitales);
    echo "<br>";  
    do{
        $i=key($misCapitales);
        echo "\$misCapitales[$i]=".$misCapitales[$i];
        echo "<br>";
    }while(next($misCapitales));

    $array1=[
        "Clave 1"=>"Valor de la clave 1",
        "Clave 2"=>"Valor de la clave 2",
        "Clave 3"=>"Valor de la clave 3",
         5=>"Valor de la clave 4",
        "Clave 5"=>"Valor de la clave 5"
    ];
    //recorreremos el array con foreach()
    echo "<br>----------------------<br>";
    foreach($array1 as $key=>$value){
        echo "\$array1[$key]=".$value. "<br>";
    }
    //lo mismo que
    echo "<br>----------------------<br>";
    foreach($array1 as $k=>$v){
        echo "\$array1[$k]=".$v. "<br>";
    }
    //-------------------------------------------------------
    $comunidades=[
        "Andalucia"=>["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Malaga", "Sevilla"],
        "Extremadura"=>["Badajoz", "Caceres"],
        "Aragon"=>["Zaragoza", "Huesca", "Teruel"],
        "Murcia"=>["Murcia"],
        "Valencia"=>["Alicante", "Castellon", "Valencia"]
    ];
    //----------------------------------------------------------------
    foreach($comunidades as $k1=>$v1){
        echo "Comunidad: <b>".$k1."</b> Sus Provincias son:<br>";
        foreach($v1 as $k2=>$v2){
            echo "$k2.- $v2<br>";
        }
    }
    //En una tabla
    echo "<br>".PHP_EOL;
    foreach($comunidades as $k1=>$v1){
        echo "<table border=1 align=center cellpadding='5' cellspacing='4'>".PHP_EOL;
        echo "<tr align='center' style='background-color:gray;'>".PHP_EOL;
        echo "<td colspan='".count($v1)."'>".$k1."</td>".PHP_EOL;
        echo "</tr>".PHP_EOL;
        echo "<tr align=center>";
        foreach($v1 as $k2=>$v2){
            echo "<td>".$v2."</td>";
        }
        echo "</tr>";
        echo "</table>";
        echo "<br>".PHP_EOL;
    }
    //-------------------list
    $vector=["valor1", "valor2"];
    list($var1, $var2)=$vector;
    echo $var1."<br>";
    echo $var2."<br>";//
    //el list se suele utilizar con each()
    echo "<br>-----------------------list each------------------<br>";
    $vector1=[
        "Soy el primer valor",
        "Soy una clave"=>"Soy el valor de la clave"
    ];
    list($a, $b)=each($vector1);
    //-------------
    var_dump($a);
    echo "<br>";
    var_dump($b);
    ///----------------------------
    /* echo "<br>";
    list($a, $b)=$vector1;
    var_dump($a);
    echo "<br>";
    var_dump($b); */
//----------------
echo "<br>-------------";
    list($a, $b)=each($vector1);
    var_dump($a);
    echo "<br>";
    var_dump($b);

    $vector=["valor1", "valor2", "valor3"];
    list($uno, $dos, $tres)=$vector;
    echo "<br>";
    echo "$uno, $dos, $tres";
    $prueba23=[
        "kuno"=>"vuno",
        "kdos"=>"vdos"
    ];
    list($a, $b)=each($prueba23);
    echo "<br>$a, $b";
    list($a, $b)=each($prueba23);
    echo "<br>$a, $b";
    //Multiplicar dos matrices---------------------------------------
    $mat1=[
        [0,1,2,3],
        [1,4,3,1]
    ];
    $mat2=[
        [4,0,3],
        [1,0,1],
        [2,1,4],
        [3,2,2]
    ];
    
    

    ?>
    </div>
    </body>
</html>