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
             
                $palabras=[
                        "palabra1"=>$_POST['palabra1'],
                        "palabra2"=>$_POST['palabra2'],
                        "palabra3"=>$_POST['palabra3'],
                        "palabra4"=>$_POST['palabra4']
                ];

                asort($palabras);
                echo "<b>Palabras Ordenadas</b><br>";
                do{
                    echo "<br>".current($palabras)."<br>";
                }while (next($palabras));

                echo "<p class ='text-center mt-5'>";
                echo "<a href='ordenar.php' class='btn btn-primary'>Volver</a>";
                echo "</p>";

            }else{

            //No hemos dado al boton de enviar

        ?>

        <div class='container mt-5'>
            <form name='name' action='ordenar.php' method='POST'>
                <input type='text' placeholder='' name='palabra1' required>
                <br>
                <input type='text' placeholder='' name='palabra2' required>
                <br>
                <input type='text' placeholder='' name='palabra3' required>
                <br>
                <input type='text' placeholder='' name='palabra4' required>
                <br>
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