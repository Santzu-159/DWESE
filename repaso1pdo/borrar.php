<?php

    if (!isset($_POST['id'])) {
        header('Location:index.php');
        die();
    }

    session_start();
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });
    $id=$_POST['id'];
    $objeto= new Conexion();
    $llave=$objeto->getConector();
    $coche=new Coches($llave);
    $coche->setId($id);
    $coche->delete();
    $llave=null;
    $_SESSION['mensaje']="El coche ha sido borrado correctamente";
    header('Location:index.php');    