<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style = 'background-color:bisque'>
    <div class='container mt-3'>
        <?php
            require('clases/Coches.php');
            //instanciamos un coche
            $miCoche = new Coches();
            $miCoche1 = new Coches();
            
            echo "Hemos instanciado: ".Coches::$cont." coches.";
            echo "<br>";
            echo "Hemos instanciado: ".$miCoche::$cont." coches.";
            echo "<br>";
            echo "Hemos instanciado: ".$miCoche1::$cont." coches.";
            echo"<br>";

            //veamos el id de cada coche
                //(objetos instanciados de la clase Coches)
            echo"<br>";
            echo "El id de \$miCoche es: ".$miCoche->getId();
            echo"<br>";
            echo "El id de \$miCoche1 es: ".$miCoche1->getId();


            //resto de atributos de coche

            //accedemos a los publicos directamente:
            $miCoche->matricula='123-JJB';
            $miCoche->color='Rojo';

            //los privados:
            $miCoche->setModelo('Ibiza');
            $miCoche->setMarca('Seat');

            //llamamos al metodo mostrar coche para saber las caracteristicas del coche
            $miCoche->mostrarCoche();

//-----------------------------------------------------------------------------
            $miCoche2=new Coches('1233-KKB');
            echo "<br>El ide de \$miCoche2 es: ".$miCoche2->getId()." <br>";
            echo "La matricula de \$micoche2 es: ";
            echo $miCoche2->matricula;
            echo "<br>";
            echo "Hay un total de: ".Coches::$cont." coches.";
        ?>
    </div>
     
</body>
</html>