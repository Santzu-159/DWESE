<?php
if(isset($_COOKIE['nomCookie'])){
        setcookie("nomCookie","",-1);
    
}

if(isset($_COOKIE['contrasenia'])){
    setcookie("contrasenia","",-1);

}

header('Location:login.php');