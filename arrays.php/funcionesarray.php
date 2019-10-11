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

        <?php 

            //------------ Explode e Implode --------------------
            // Convierten string a array o array a string
            echo "Explode e Implode (convierten strings a arrays y viceversa)";
            echo "<br>-------------------------------------------------------------<br>";
            $cad ="El cielo esta enladrillado";
            echo "<br>$cad<br>";
            $array = explode(" ",$cad);
            print_r($array);
            echo "<br>";

            //explode

            echo "<br>";
            echo "<b>Explode<br></b>";
            $cad="felipe::perez::felipe@correo.com::http://felipe.com";
            $array=explode("::",$cad);
            print_r($array);
            echo "<br>";
            list($nom,$apellidos,$mail,$url)=explode("::",$cad); //normalmente se usa list con explode casi siempre
            echo "nom=$nom, ape=$apellidos, mail=$mail, url=$url"."<br>";

            //implode

            echo "<br>";
            echo "<b>Implode<br></b>";
            $array=["portero","delantero","centrales","defensas","suplentes"];
            $string=implode("::",$array);
            echo "$string<br>";

            //añadir o quitar elementos de un array
            //al final del mismo ------------------------------

            $array=["portero","delantero","suplentes"];
            array_push($array,"Entrenadores"); //añade entrenadores al final
            print_r($array);
            echo "<br>";

            array_pop($array);
            print_r($array);
            echo "<br>";

            //--al princpio
            array_unshift($array,"Entrenadores");
            print_r($array);
            echo "<br>";

            array_shift($array);
            print_r($array);
            echo "<br>";

            //------------ Juntar dos arrays (array_merge)
            echo "<br><b>Juntar dos arrays (array_merge)</b><br>";
            $array1=[1,"dos",3,4,"cinco"];
            $array2 =[1,"hola",3,"adios",5,6];
            $union=array_merge($array1,$array2);

            echo "<br>\$array1---------<br>";
            print_r($array1);
            echo "<br>";

            echo "\$array2-------------<br>";
            print_r($array2);
            echo "<br>";

            echo "\$union--------------<br>";
            print_r($union);
            echo "<br>";

            //---------------------  si unimos array asociativos

            echo "<br><b>Uniendo arrays asociativos</b><br>";

            $mat1=[
                "uno" => "valor 1 array 1",
                "dos" => "valor 2 array 2"
            ];

            $mat2=[
                "key 1" => "valor 1 array 2",
                "key 2" => "valor 2 array 2",
                "key 3" => "valor 3 array 3"
            ];

            $res=array_merge($mat1,$mat2); //al tener dos claves iguales machaca la primera con la segunda
            print_r($res);
            echo "<br>";

            // Arrays indexados
            echo "<br><b>Uniendo arrays indexados</b><br>";
            $mat1=[
                1 => "valor 1 mat 1",
                "dos",
                5 => "valor 5"
            ];

            $mat2=[
                1 => "valor 1 de array 2",
                "valor 2 de array 2",
                5 => "valor 5 de array 2"
            ];
            
            $union= array_merge($mat1,$mat2);
            echo "<br> Mat 1 <br>";
            print_r($mat1);
            echo "<br> Mat 2 <br>";
            print_r($mat2);
            echo "<br> Union <br>";
            print_r($union);

            echo "<br>";
            echo "Unset";
            unset($mat1[1]); //eliminar elementos del array
            print_r($mat1);

        ?>
    </div>
    
</body>
</html>