<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            if(isset($_POST['btnEnviar'])){

                //hemos pulsado enviar así que procesamos los datos del formulario (mostrarlos en pantalla en este caso)
                echo "Tu nombre es: ".$_POST['nombre'];
                echo "<br>Tu mail es: ".$_POST['email'];
                echo "<br>Tu fecha de nacimiento es: ".$_POST['fecha'];

                echo "<p class ='text-center mt-5'>";
                echo "<a href='ftres.php' class='btn btn-primary'>Volver</a>";
                echo "</p>";
            }else{

            //No hemos dado al boton de enviar

        ?>

        <div class='container mt-5'>
            <form name='name' action='ftres.php' method='POST'>
                <input type='text' placeholder='Tu Nombre' name='nombre' required>
                <br>
                <input type='text' placeholder='Tu e-mail' name='email' required>
                <br>
                Fecha Nacimiento:&nbsp;&nbsp;&nbsp;<input type='date' name='fecha'>
                <p class='text-center mt-10'>
                    <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-primary'>
                    <input type='reset' value='Limpiar' class='btn btn-primary'>
                </p>
            </form>
        </div>
        <?php
            }
        ?>    
    </body>
</html>