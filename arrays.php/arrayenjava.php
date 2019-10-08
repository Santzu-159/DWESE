<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class='container mt-5'>
        <p class='text-center'>Arrays en Php</p>

        <?php   //los podemos utilizar como en java.

        //Notacion antigua.
    
        $vector = array("uno","dos","tres");

        //Notacion nueva

        $vector1=[
            "Barcelona",
            "Madrid",
            "Almería",
            "Pamplona",
        ];

        //Podemos recorrerlos como en java
        //count me da los elementos de un array

        for($i =0; $i<count($vector);$i++){
            echo "\$vector1[$i]= ".$vector[$i]."<br>";

        }

        echo "El numero de elementos de vector 1 es: ".count($vector1);
        echo "<br>\$vector1[2]= ".$vector1[2];


        ?>
    </div>



        <!--Arrays bidimensionales-->

    <div class='container mt-5'>
        <p class='text-center'>Arrays en Php</p>

        <?php 
        $capitales=[
            ["Madrid", "Barcelona", "Sevilla", "Tarragona", "Soria"],
            ["Badajoz", "Caceres", "Almería", "Valencia"],
            ["Granada", "Cadiz", "Jaen", "Murcia"]

        ];
        //Mostramos las capitales
        echo "<br> La dimension de  º&capitales= ".count($capitales);
        echo "<br> La dimension de la primera fila es: ".count($capitales[0]);

        for ($f=0; $f>count($capitales); $f++){
            for ($c=0; $c>count($capitales); $c++){
                echo "capitales[$f][$c] = ".capitales[$f][$c]." ";
            
            }
        }



        ?>
    </div> 


</body>
</html>