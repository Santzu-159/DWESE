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
        $vector=[
            "uno",
            "dos"
        ];

        $vector[]="hola";
        $vector[23]="Adios";
        $vector[]="Saludo";

        /*Este método no lo debemos de usar, ya que dependiendo del array causa error.
        Solo se debe de usar en casos puntuales.


        echo "<br> El num de elementos de vecyor será: ".count($vector);
          for($i=0; $i<count($vector);$i++){
            echo "\vector[$i]=".$vector[$i]."<br>";
        }
        */

        //-------------------------------------------------------------------------------------------

        //Esto ya si nos sirve
        
        $vector[3]="Nuevo Valor";
        $vector[]="Otro más";
        echo "<br> Resultado de var_dump<br>".PHP_EOL;
        var_dump($vector);
        echo "<br> Resultado de print_r<br>".PHP_EOL;
        print_r($vector);


        //Algunos metodos utiles:
        //current, key, reset, next, prev, end

        echo "<br>#--- Valores a los que estamos apuntando al principio: ";
        echo "current(\$vector)=".current($vector)."<br>";
        echo "key(\$vector)=".key($vector)."<br>";

        next($vector);
        echo "<br>#--- Valores a los que estamos apuntando despues de usar next: ";
        echo "current(\$vector)=".current($vector)."<br>";
        echo "key(\$vector)=".key($vector); 

        next($vector);
        echo "<br>#--- Valores a los que estamos apuntando despues de usar next otra vez: ";
        echo "current(\$vector)=".current($vector)."<br>";
        echo "key(\$vector)=".key($vector); 

        reset($vector);
        echo "<br>#--- Valores a los que estamos apuntando despues de usar reset: ";
        echo "current(\$vector)=".current($vector)."<br>";
        echo "key(\$vector)=".key($vector); 

        //current --> da el valor de la posicion en la que estamos.
        //key --> nos da el índice/posicion en la que estamos.
        //next --> hace que el puntero cambie a la siguiente posicion
        //prev   --> mueve el puntero a la posicion previa
        //end --> mueve el puntero a la ultima posicion
        //reset --> mueve el puntero al inicio del array (primera posicion)

        do{
            echo "\$vector[".key($vector)."]=".current($vector)."<br>";
            echo "<br>";
        }while(next($vector));

        reset($vector); //si metemos el reset dentro del do/while se hace un bucle infinito

        do{ //misma funcion que el d/while de arriba
            $i=key($vector);
            echo "\$vector[$i]=".$vector[$i];
            echo "<br>";
        }while(next($vector));

        end($vector);//nos vamos al final del vector

        do{ //recorrer el vector al reves
            $i=key($vector);
            echo "\$vector[$i]=".$vector[$i];
            echo "<br>";
        }while(prev($vector));


        //-----------------Arrays asociativos  clave =>valor

        //los indices no tienen por que ser numeros: 

        echo "<br>";
        $misCapitales =[ 
            "Extremadura"=>"dos",
            "Andalucia"=>"Siete",
            "Valencia"=>"tres",
            "Aragon"=>"no me acuerdo, o quizas si"
        ];
        print_r($misCapitales);
        echo "<br>";
        echo $misCapitales["Andalucia"];
        echo "<br>";
        echo $misCapitales["Aragon"];
        echo "<br>";
        echo $misCapitales[]="Esta no tiene nombre"; //si no le ponemos clave, php le asigna una numerica
        print_r($misCapitales);
        echo "<br>";
        echo $misCapitales[0];
        echo "<br>";
        $misCapitales[]="Ni esta";
        print_r($misCapitales);
        echo "<br>";
        $misCapitales["Madrid"]="Solo una";
        print_r($misCapitales);

        do{
            $i=key($misCapitales);
            echo "\$miscapitales[$i]=".$misCapitales[$i];
            echo "<br>";
        }while(next($misCapitales));

        $comunidades=[
            "Andalucia" => ["Almería", "Granada", "Jaén", "Sevilla", "Malaga","Córdoba", "Huelva"],
            "Extremadura" => ["Cáceres","Badajoz"],
            "Valencia" => ["Alicante","Castellón","Valencia"],
            "Murcia" => ["Murcia", "Cartagena"]
        ]; 

        $datos=[
            "uno" => "El primer dato",
            "dos" => "El segundo",
            "tres" => "otro dato mas"
        ];
        echo "<p class='text-center'>array_keys y array_values de datos</p>";
        echo "El array \$datos <br>";
        print_r($datos);
        echo "usando array_keys<br>";
        print_r(array_keys($datos));
        echo "usando array_values<br>";
        print_r(array_values($datos));

        echo "<br>-----------------------------------------------------------------------------------------------";

        echo "<p class='text-center'>array_keys y array_values de comunidades</p>";
        echo "El array \$comunidades <br>";
        print_r($comunidades);
        echo "usando array_keys<br>";
        print_r(array_keys($comunidades));
        echo "usando array_values<br>";
        print_r(array_values($comunidades));
        ?>
    </div>
    
    <!-- -------------------------- METODOS DE ORDENACION ----------------------------------------------- -->
    
    <div>
        <?php
            echo "<br>";
            $aux =$datos; //Guardamos el array datos en una variable auxiliar para no perder informacion
            echo "<br>--------------- ORDENACION SORT -------------------------<br>";
            echo "<br>Antes de sort<br>";
            print_r($datos);
            echo "<br>Despues de sort<br>";
            sort($aux);
            print_r($aux);

            //con un array indexado

            $provs=[
                "Almeria","Malaga","Zaragoza", "barcelona"

            ];
            $provs1=$provs;
            echo "<br>Antes de sort<br>";
            print_r($provs);
            echo "<br>Despues de sort<br>";
            sort($provs);
            print_r($provs);

            echo "<br>";
            //Con rsort se ordena de forma descendente.

            echo "<br>Ejemplo con rsort:<br>";
            rsort($provs);
            print_r($provs);

            echo "<br>";
            //Con ksort se ordena la claves pero junto con sus valores (no los separa).

            echo "<br>Ejemplo con ksort:<br>";
            ksort($datos);
            print_r($datos);

            echo "<br>";

            $vector[]="hola";
            $vector[15]="adios";
            $vector[3]="saludos";
            $vector[]="mas y mas";
            $vector[7]="el dato";

            ksort($vector);
            print_r($vector);

            // --------------------------- asrot y arsort ------------------------------

            //ordena los calores manteniendo los indices como estaban

            $datos=[
                "uno" => "El primer dato",
                "dos" => "El segundo",
                "tres" => "otro dato mas"
            ];

            echo"<br>\$datos antes de asort <br>";
            print_r($datos);
            echo"<br>\$datos despues de asort <br>";
            asort($datos);
            print_r($datos);


           // <!-- -------------------------- FUNCIONES DE MANUPULACION ----------------------------------------------- -->

           echo "<br><br>--------------- FUNCIONES DE MANUPULACION  -------------------------<br>";
            
            $ciudades=[
                    "Almeria","Valencia"
            ];
            echo "<br> \$ciudades= ";
            print_r($ciudades);
            $res=array_pad($ciudades,5,"Sin nombre"); //si ponemos el signo neg. lo pone al principio, si no, rellena hasta el final
            echo "<br> Aumentando \$ciudades a 5 elementos derecha (al final)<br>";
            print_r($res);


            // ------------------------ uso del splice--------------------
            //sustituye los elementos del vector por el vector de remplazo, diciendole posicion y cantidad

            $ciudades=[
                "Almeria","Valencia","Sevilla","Huelva"
            ];
            $datos=[
                "Granada", "Malaga"
            ];
            echo "<br>---------------------- <br>";

            echo "\$ciudades:<br>";
            print_r($ciudades);
            echo "<br>---------------------- <br>";
            echo "\$datos:<br>";
            print_r($datos);
            echo "<br>---------------------- <br>";


            $vector = array_splice($ciudades,0,2,$datos);
            echo "<br>----------------------------------------------<br>";
            echo "Salida del splite:<br>";
            print_r($vector);

            //------------ Simulación de tirada de dados  con shuffle--------------------
            //desordenamos el array
        

            echo "<br> SIMULACION DE TIRADA DE DADOS CON SHUFFLE<br>";


            $dado=[
                "uno",
                "dos",
                "tres",
                "cuatro",
                "cinco",
                "seis"
            ];
            
            echo "<br> antes de shuffle: <br>";
            print_r($dado);
            shuffle($dado);
            echo "<br> despues de shuffle: <br>";
            print_r($dado);

            //------------------------------------------------------------------------
            echo "<br>----------------------------------------------<br>";
            $nombre="Joselito";
            $edad=22;
            $mail= "holi@holi.com";
            $datos = compact('nombre','edad','mail'); //se usa mucho
            print_r($datos);

            //-----------------------------------------------------------------------
            echo "<br>--Como cortar arrays (array_slice)--<br>";
            $array=[
                "uno",
                "dos",
                "tres",
                "cuatro",
                "cinco",
                "seis"
            ];
            $res=array_slice($array,3); //solo un parametro
            echo "<br>";
            print_r($res); //mostrara cuatro, cinco
            echo "<br>";
            $res=array_slice($array,2,3); // dos parametros
            print_r($res); //mostrara tres, cuatro, cinco
            echo "<br>";
            $res=array_slice($array,-5,2); // dos parametros
            print_r($res); //mostrara dos, tres

            //------array chunk dividir arrays en varios----
            echo "<br>------------------ array_chunk ---------------<br>";
            $res =array_chunk($array,4);//el 4 el tamaño de los nuevos arrays
            print_r($res);
            echo "<br>";
            $res =array_chunk($array,4,true);//mantiene los indices del array
            print_r($res);
            echo "<br>";
        ?>
    </div>
</body>
</html>