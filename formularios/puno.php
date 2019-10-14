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

            <div class="container">
                <h3 class="text-center">Procesando el formulario</h3>
                <?php
                    //Recogemos los datos del formulario
                   // $mail = $_POST['email']; //<-- el nombre que tenga el input

                   $mail = $_REQUEST['email'];
                    echo "<br> El correo es: <b>".$mail."</b>";

                    $pass = $_POST['pass'];
                    echo "<br> La contraseña es: <b>".$pass."</b>";

                    $prov = $_POST['prov'];
                    echo "<br> La provincia es: <b>".$prov."</b>";

                    $checkbox1 = $_POST['checkbox1'];

                    if(isset($_POST['checkbox1'])){
                        echo "<br>Has marcado Opción1<br>";
                    }
                    if(isset($_POST['checkbox2'])){
                        echo "<br>Has marcado Opción2<br>";
                    }
                    echo "<br>El correo es: <br>$mail<br>".PHP_EOL;
                    echo "<br>El password es: <br>$pass<br>".PHP_EOL;
                    echo "<br>La provincia es: <br>$prov<br>".PHP_EOL;

                ?>
            
            </div>

    </body>
</html>


<!--

    Recoger datos:
    --------------

    GET => $_GET['']

    POST => $_POST['']

    PARA LOS DOS => $_REQUEST[''] -- Recoge todo, cookies, info, todo y sirve tanto para get como para post

    -->