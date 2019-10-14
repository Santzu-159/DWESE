<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Seis</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 6</h4>
        <p class='text-center'>
        Crea un array con los países de la Unión Europea y sus capitales. Muestra por<br>
        cada uno de ellos la frase: “La capital de <<\país>> es <<\capital>>”. Luego<br>
        ordena la lista por el nombre del país y luego por el nombre de la capital.<br>
        </p>
        
        <?php
            
            $eeuu=[
                "Dinamarca"=>"Copenhague",
                "Alemania"=>"Berlín",
                "Andorra"=>"Andorra la Vieja",
                "Armenia"=>"Ereván",
                "Austria"=>"Viena",
                "Azerbaiyán"=>"Bakú",
                "Belgica"=>"Bruselas",
                "Bielorrusia"=>"Minsk",
                "Bosnia-Herzegovina"=>"Saravejo",
                "Bulgaria"=>"Sofía",
                "Chipre"=>"Nicosia",
                "Ciudad del Vaticano"=>"Ciudad del Vaticano",
                "Croacia"=>"Zagreb",
                "Francia"=>"París",
                "Albania"=>"Tirana",
                "Eslovaquia"=>"Bratislava",
                "España"=>"Madrid",
                "Estonia"=>"Tallin",
                "Federación Rusa"=>"Moscú",
                "Finlandia"=>"Helsinki",
                "Georgia"=>"Tiflis",
                "Grecia"=>"Atenas",
                "Hungría"=>"Budapest",
                "Irlanda"=>"Dublín",
                "Islandia"=>"Reikiavik",
                "Italia"=>"Roma",
                "Kazajistán"=>"Astana",
                "Letonia"=>"Riga",
                "Liechtenstein"=>"Vaduz",
                "Lituania"=>"Vilna",
                "Luxemburgo"=>"Luxemburgo",
                "Macedonia del Norte"=>"Skopie",
                "Malta"=>"La Valeta",
                "Moldova"=>"Chisináu",
                "Mónaco"=>"Mónaco",
                "Montenegro"=>"Podgorica",
                "Noruega"=>"Oslo",
                "Países Bajos"=>"Ámsterdam",
                "Polonia"=>"Varsovia",
                "Portugal"=>"Lisboa",
                "Reino Unido"=>"Londres",
                "República Checa"=>"Praga",
                "Rumania"=>"Bucarest",
                "San Marino"=>"San Marino",
                "Serbia"=>"Belgrado",
                "Suecia"=>"Estocolmo",
                "Suiza"=>"Berna",
                "Ucrania"=>"Kiev"
            ];

            

            foreach($eeuu as $pais=>$capital)	{
                echo "La capital de ".$pais." es ".$capital."<br>".PHP_EOL;
               
            }
            echo "-------------------------------------------------------------<br>";
            ksort($eeuu);
            foreach($eeuu as $pais=>$capital)	{
                echo "La capital de ".$pais." es ".$capital."<br>".PHP_EOL;
            }
            echo "-------------------------------------------------------------<br>";
            asort($eeuu);
            foreach($eeuu as $pais=>$capital)	{
                echo "La capital de ".$pais." es ".$capital."<br>".PHP_EOL;
            }


        ?>
    </div>
</body>
</html>