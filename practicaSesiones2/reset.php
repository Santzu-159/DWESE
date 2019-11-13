<?php
if(isset($_COOKIE['nomCookie'])){
        setcookie("nomCookie","a",-1);
    
}

if(isset($_COOKIE['contrasenia'])){
    setcookie("contrasenia","a",-1);

}

header('Location:login.php');