<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dos</title>
</head>
<body style='background-color:bisque'>
    <div class='container mt-3'>
        <?php

        require('clases/Personas.php');
        $persona1=new Personas();
        $persona2=new Personas('Pedro Lopez');
        echo "Hay un total de: ".$persona1->getCantidad()." personas.";
        echo "<br>";
        echo "El nombre de \$persona2 es: ".$persona2->getNombre();
        echo "<br>";

        $persona2->nick='APuertas';
        $persona2->setNombre('Armando Puertas Segura');
        $persona2->setEdad('45');
        $persona2->setMail();//como no se le pasa un mail, coge el mail por defecto que hemos asigando.
        echo "El mail de persona 2 es: ".$persona2->getMail();
        echo "<br><br>";
        echo "<p align='center'><u>Los datos de \$persona2 son: </u></p>";
        $persona2->mostrarPersona(); 

        ?>
    </div>
    
</body>
</html>