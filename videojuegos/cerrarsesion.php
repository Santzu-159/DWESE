<?php   
    session_start();
    if(!(isset($_POST['ftoken']) && isset($_SESSION['stoken'])) || $_POST['ftoken']!=$_SESSION['stoken']){
        //header("Location:index.php");
        die("ATAQUE CSRF DETECTADO.");
        die();
    }
    session_destroy();
    header("Location:index.php");
    die();
