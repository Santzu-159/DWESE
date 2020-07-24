<!-- Iniciamos una sessión o restauramos la que teniamos -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){ //Si se pulsa el botón enviar....
            //acciones

            //recogemos la información del formulario
            $usuario = trim($_POST['user']);
            $pass = trim($_POST['pass']);

            //comprobamos si el fichero existe
            // de lo contrario claramente nadie se ha registrado aún
            if(file_exists('uxuarios.txt')){

                //intentamos abrir el archivo en modo lectura
                $fh = fopen("usuarios.txt", 'r') or die("Se produjo un error al crear el archivo");
                //si el proceso falla, da un error y acaba.

                //leemos el fichero
                while($linea = fgets($fh))
                {
                    //buscamos el usuario en la línea leida
                    $user = explode(";",$linea);
                    //compruebamos si es el mismo que el que ha introducido el usuario
                    if(trim($user[0])==$usuario){
                        // compruebamos si coinciden las contraseñas
                        // la introducida con la registrada
                        // password_verify comprueba que la contraseña coincida con un hash
                        if(password_verify($pass,trim($user[1]))){
                            // antes de redirigir a index...

                            // mandamos por $_SESSION el usuario y su imagen
                            $_SESSION['usuario']=$usuario;
                            $_SESSION['imagen']=$user[2];

                            // compruebamos si quieren que le recuerden
                            if(isset($_POST['remember'])){
                                // creamos las cookies
                                setcookie("usuario",$usuario,time()+24*3600);
                                setcookie("password",$pass,time()+24*3600);
                            }
                            // redirigimos al index
                            header('Location:index.php');
                            //cierramos el archivo antes de finalizar la ejecución
                            fclose($fh);
                            // términa la ejecución del código
                            die();
                        }else{
                            // si encuentramos el usuario pero la contraseña no coincide...
                        //guardamos un mensaje de error en Session['error']
                            $_SESSION['error']='La contraseña es incorrecta';
                        // redirigimos a la misma página
                            header('Location:login.php');
                            //cierramos el archivo antes de finalizar la ejecución
                            fclose($fh);
                            // términa la ejecución del código
                            die();
                        }
                    }
                }

                    // si terminamos de leer el archivo y no encuentra el usuario...
                    // cierromos el archivo
                    fclose($fh);
                    // guardomos mensaje de error en $_SESSION['error']
                    $_SESSION['error']='El usuario no existe';
                    // redirigimos a la misma página
                    header('Location:login.php');

            }else{
                // si el fichero no existe
                $_SESSION['error']='Usuario o contraseña incorrectos';
                header('Location:login.php');
            }

        }else{
    ?>
<div class="container mt-3">
    <?php
    // en caso de que haya algú nerror en $_SESSION lo mostramos
        if(isset($_SESSION['error'])){
            ?>
            <div class='container bg-warning'>
                <h3 class='text-center'><?php echo $_SESSION['error'] ?></h3>
            </div>
            <?php
            unset($_SESSION['error']); //eliminamos el mensaje de error para que no se quede guardado
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
        <div class="form-group">
            <label for="user">Usuario</label>
            <!-- si existe la cookie usuario, le ponemos el valor -->
            <input type="text" class="form-control" name="user" value="<?php if(isset($_COOKIE['usuario'])) echo $_COOKIE['usuario']; ?>">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <!-- si existe la cookie password, le ponemos el valor -->
            <input type="password" class="form-control" name="pass" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="remember">
            <label class="form-check-label" for="remember">Recuerdame</label>
            <!-- botón para borrar las cookies -->
            <a href='reset.php' class='btn btn-warning float-right'>Olvidame</a>
        </div>        
        <input type="submit" class="btn btn-primary" name='enviar' value='Enviar'>
    </form>
    
        <div>
        <!-- enlace hacia el formulario de registro -->
            <span>¿No estas registrado? ¡Hazlo aquí!  ---> </span><a href='register.php' class="btn btn-info">Registrate</a>
        </div>
    </div>
     <?php
        } //fin del else
    ?>
</body>
</html>
