<?php
    if(!isset($_POST['id'])){
        header("Location:coches.php");
        die();
    }

    session_start();
    spl_autoload_register(function($clase){
        require ("./class/$clase.php");
        });

    $conexion = new Conexion();
    $conector = $conexion->getConector();

    $id= $_POST['id'];

    $coche = new Coches($conector);
    $coche->setId($id);
    $coche->delete();

    $conexion = null;

    $_SESSION['mensaje']="El coche se ha borrado con éxito.";
    header("Location:coches.php");
    die();