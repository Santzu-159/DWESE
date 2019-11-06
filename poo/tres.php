<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tres</title>
</head>
<body style='background-color:cadetblue'>
    <div class='container mt-3'>

        <?php

        require('class/Personas.php');
        require('class/Empleados.php');

        $persona1=new Personas('Lucas Perez',34,'lucas@correo.es');
        $persona2=$persona1; 
        $persona2->setNombre('Kiko Perez');

        echo "-------------------------------------------";
        echo "<br>";
        echo "<h3><b>Copia por referencia: </b></h3>";
        echo "-------------------------------------------";
        echo "<br>";
        echo $persona1->getNombre();
        echo "<br>";
        echo $persona2->getNombre();
        echo "<br>";

        //$persona1 y $persona2 apuntan a la misma posicion de memoria por tanto son el "mismo objeto"
        //por eso si modificamos uno, el otro tambien se modifica y tienen ambos el mismo valor.

        //para hacer una copia que podamos modificar sin miedo a modificar el resto:

        $persona3= clone $persona1;
        $persona3->setNombre("Persona 3");
        
        echo "<br>";
        echo "-------------------------------------------";
        echo "<br>";
        echo "<h3><b>Copia por Clonado: </b></h3>";
        echo "-------------------------------------------";
        echo "<br>";
        echo $persona1->getNombre();
        echo "<br>";
        echo $persona2->getNombre();
        echo "<br>";
        echo $persona3->getNombre();
        echo "<br>";
        echo Personas::$cant;
        echo "<br>";
        //-----------------------------------------------------------------
    /*  echo $persona3->getNombre();
        echo "<br>";
        echo $persona3->edad;//Nos da error, por que es privado (si no tenemos el get y el set)
        //Entonces hacemos uso de métodos mágicos para poder acceder a los datos en tiempo de ejecución

        /*

        *---------------*
        |Metodos Magicos|   ------  **Ver en Personas**
        *---------------*

        __construct
        __set
        __get
        __toString

        
        
        echo "<br>";
        echo $persona3->telefono; //utilizamos metodo magico get
        echo "<br>";
        echo "El mail de persona3 es: ".$persona3->mail;

        //--------------------------------------------------------
        echo "<br>";
        echo "<hr>";
        $persona3->edad=123; //usamos metodo magico set
        echo $persona3->edad;
        echo "<br>";
        echo "<b>Datos Persona1 (toString): </b>".$persona1;

    */      //--------------------------------------------------------
          echo "<br>";
          echo "<hr>";
          $empleado = new Empleados("Pedro Gomez",45,"mail@mail.com","Jefe",1234.45);
          echo "<br>";
          echo $empleado;
          echo "<br>";
          echo "Cantidad de personas creadas <b>--></b> ".Personas::$cant;
          echo "<br>";

          $empleado->setNombre('Pedrito Gomez');
          echo "<br>";
          echo $empleado->getNombre();

          //-----------------------------------

          //No funciona por que es protected

          /*$empleado->nombre='Juan Sebastian';
          echo "<br>";
          echo $empleado->nombre;*/

          $empleado->mail='elmail@cambiado.com';
          echo "<br>";
          echo $empleado->mail;

          //---------------------------------------------
          echo "<br>";
          $empleado ->setNombre('Perico');
          echo $empleado;
          echo "<br>";
          $empleado->setEdad('28');
          echo $empleado;
          echo "<br>";
          //-----------------------

          if($empleado -> isJefe()){
              echo "El ".$empleado->getNombre()." es jefe";
          }

          $persona34=new Personas();
        
        ?>
    </div>
    
</body>
</html>