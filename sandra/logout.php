<!-- Iniciamos una sessión o restauramos la que teniamos -->
<?php
    session_start();

    //Si intentan entrar sin iniciar sesión...
    if(!isset($_SESSION['usuario'])){
        //redirigimos al login
        header('Location:login.php');
        // acaba la ejecución
        die();
    }else{
        // si ha entrado con una sesión, es que quiere cerrar la sesión
        // borramos los $_SESSION['usuario'] y $_SESSION['imagen']
        unset($_SESSION['usuario']);
        unset($_SESSION['imagen']);
        session_abort(); //cerramos la sesion
        // redirigimos al login
        header('Location:login.php');
    }