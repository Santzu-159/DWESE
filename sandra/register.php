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
    <title>Registro</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){ //Si se pulsa el botón enviar....
            //acciones
            if($_POST['pass'] == $_POST['confirm']){ //comprobamos si las contraseñas coinciden
                
                // compruebamos que la imagen no supere el tamaño máximo permitido
                // si el código de error es 2, significa que supera el tamaño máximo
                if($_FILES['imagen']['error']==2){
                    // si la imágen pesa más de lo permitido...
                    //guardamos un mensaje de error en Session['error']
                    $_SESSION['error'] ="El archivo excede el tamaño permitido";
                    // redirige a la misma página
                    header('Location:register.php');
                    // términamos la ejecución del código
                    die();
                }

                // comprobamos si se ha subido el archivo
                if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
                    // array con los tipos permitidos
                    $array=[
                        'image/jpeg',
                        'image/png',
                        'image/tiff',
                        'image/bmp',
                        'image/gif',
                        'image/x-icon',
                        'image/svg+xml'
                    ];
                    // comprobamos si el tipo del archivo subido está en el array de tipos permitidos
                    if(!in_array($_FILES['imagen']['type'],$array)){
                        // si el tipo no es correcto...
                        //guardamos un mensaje de error en Session['error']
                        $_SESSION['error'] ="El archivo debe ser de tipo imágen.";
                        // redirige a la misma página
                        header('Location:register.php');
                        // términamos la ejecución del código
                        die();
                    }

                    // si se ha subido una imágen y cumple los requisitos
                    $nombreImagen=$_FILES['imagen']['name']; //guardamos el nombre de la imagen
                    // time() permite que cada nombre de imagen sea único
                    $urlImagen='./fotos/'.time().$nombreImagen; //ruta de la imagen con nuevo nombre

                    // subimos el archivo
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $urlImagen);
                }else{
                    // si no se ha subido un archivo...
                    //guardamos un mensaje de error en Session['error']
                    $_SESSION['error'] ="Es obligatorio subir una imágen.";
                    // redirige a la misma página
                    header('Location:register.php');
                    // términamos la ejecución del código
                    die();
                }
                
                // recogemos la información del formulario
                $usuario = trim($_POST['user']);
                $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); //hasheamos la contraseña por seguridad

                // intentamos abrir el fichero usuarios.txt para lectura y escritura, si no existe lo crea
                $fh = fopen("usuarios.txt", 'c+') or die("Se produjo un error al crear el archivo");
                //si el proceso falla, da un error y acaba.

                // leemos el fichero para asegurarme de que no este ya registrado el usuario
                while($linea = fgets($fh))
                {
                    // recogemos el usuario de la línea actual
                    $user = explode(";",$linea);
                    // comprobamos que no sea el mismo
                    if(trim($user[0])==$usuario){
                        // si el usuario ya estaba registrado...
                        $_SESSION['error']="El usuario ya está registrado";
                        header('Location:register.php');
                        //cirramos el archivo antes de finalizar la ejecución
                        fclose($fh);
                        // términamos la ejecución del código
                        die();
                    }
                }
  

                //esto es lo que introduciremos en el archivo usuarios.txt
                $texto = <<<_END
                $usuario;$pass;$urlImagen;\n
                _END;

                //Escribirmos en el fichero
                fwrite($fh, $texto) or die("No se pudo escribir en el archivo"); 

                fclose($fh); //cerramos el fichero
                // si todo ha ido bien, redirigimos al login
                header('Location:login.php');

            }else{
                // si las contraseñas no coinciden
                $_SESSION['error']="Las contraseñas no coinciden";
                header('Location:register.php');
            }

        }else{
    ?>
    <h1 align='center'>Registro</h1>
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
    <div class='container mt-5'>
    <!-- enctype="multipart/form-data" permite subir archivos -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" class="form-control" id="user" aria-describedby="emailHelp" name='user'>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="pass" name='pass'>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="confirm" name='confirm'>
            </div>
            <!-- accept="image/*" hace que solo aparezcan archivos de tipo imagen al buscar -->
            <div class="form-group">
                <label for="imagen" class="col-form-label">Imagen</label>
                <input type="file" class="form-control p-1" name="imagen" id="imagen" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
            <!--ponemos un tamaño máximo al fichero-->
            <input type='hidden' name='MAX_FILE_SIZE' value='2000'/>
        </form>
    </div>        
    <?php
        } //fin del else
    ?>
</body>
</html>