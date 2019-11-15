<?php
    if(!isset($_POST['id'])){
        header("Location:modulos.php");
        die();
    
    }
    session_start();
    //hacemos el autoload de las clases
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });

    $conex=new Conexion();
    $llave=$conex->getConector();
    $id=$_POST['id'];
    $modulo=new Modulos($llave);

    $modulo->setIdMod($id);

    $modulo->delete();
    $llave=null;
    $_SESSION['mensaje']="Modulo borrado correctamente.";
    header("Location:modulos.php");
    die();