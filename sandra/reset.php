<?php
// comprobamos si existe la cookie usuario
if(isset($_COOKIE['usuario'])){
    // borramos las cookies
    setcookie("usuario","",-1);
    setcookie("password","",-1);
}

// redirigimos a login.php
header('Location:login.php');