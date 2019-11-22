<?php
    session_start();

    spl_autoload_register(function($clase){
        require "./class/".$clase.".php";
    });

    function error($txt){
        $_SESSION['error']=$txt;
        header("Location:index.php");
        die();
    }
 
    $conexion = new Conexion();
    $llave=$conexion->getConector();



        $nomUsu=strtolower(trim($_POST['usernameR']));
        $passUsu=trim($_POST['password_R']);
        $confPass=trim($_POST['confirm-password']);

        if($passUsu!=$confPass){
            error("Las contraseñas no coinciden");
        }

        $pass1=hash("SHA256",$passUsu);
        $usuario= new Usuarios($llave, $nomUsu, $pass1);
        
        if($usuario->existeUser($nomUsu)){
            error("Ya existe un usuario con ese nombre.");
        }

        $usuario->setNombre($nombre);
        $usuario->setPass($pass1);
        $usuario->create();
    
        $_SESSION['mensaje']="Usuario creado correctamente.";
        header("Location:index.php");