<!-- Iniciamos una sessión o restauramos la que teniamos -->
<?php
    session_start();

    //Si intentan entrar sin iniciar sesión...
    if(!isset($_SESSION['usuario'])){
        //redirigimos al login
        header('Location:login.php');
        // acaba la ejecución
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class='container mt-3'>
        <div class="card" style="width: 18rem;">
        <!-- imagen del usuario -->
            <img class="card-img-top" src="<?php echo $_SESSION['imagen']; ?>" alt="Card image cap">
            <div class="card-body text-center">
            <!-- nombre del usuario -->
                <h5 class="card-title"><?php echo $_SESSION['usuario']; ?></h5>
                <!-- botón para cerrar sesión -->
                <a href="logout.php" class="btn btn-primary">Cerrar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>