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
    <?php
        //Comprobamos si hemos dado al boton submit o no
        if(isset($_POST['btnEnviar'])){

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


        }else{

            //pintamos el formulario
            //!!!!!!!!!! este else cierra el final antes de cerrar el body
        


    ?>
        <div class= "container mt-5">  
            <form name='f1'action='fdos.php' method='POST'>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" placeholder="Password" name='pass'>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>

                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name='prov'>
                        <option selected>Almeria</option>
                        <option>Granada</option>
                        <option>Cadiz</option>
                        <option>Sevilla</option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="checkbox1" value="opcion"><!-- si añadimos value, envia lo que le pongamos como argumento -->
                    <label class="form-check-label" for="gridCheck">
                        Opcion 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>

                    <input class="form-check-input" type="checkbox" id="gridCheck" name="checkbox2" value="">
                    <label class="form-check-label" for="gridCheck">
                        Opcion 2
                    </label>
                    </div>
                </div>

                <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                <input type="submit" value ="Enviar" class = "btn btn-primary" name ="btnEnviar">
            </form>

        </div>
        <?php
            }
        ?>     
    </body>
</html>