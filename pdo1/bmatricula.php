<?php
    if(!isset($_POST['al']) || !isset($_POST['modulo'])){
        header("Location:matriculas.php");
        die();
    
    }
    session_start();
    //hacemos el autoload de las clases
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });

    $conex=new Conexion();
    $llave=$conex->getConector();
    $al=$_POST['al'];
    $mod=$_POST['modulo'];

    $matricula = new Matriculas($llave);
    $matricula->setAl($al);
    $matricula->setModulo($mod);
    $matricula->delete();
    $_SESSION['mensaje']="<h3>El Alumno se ha dado de baja correctamente del modulo.</h3>";
    header("Location:matriculas.php");