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

        $nomUsu=strtolower(trim($_POST['username']));
        $passUsu=trim($_POST['password']);
        $pass1=hash("SHA256",$passUsu);
        $usuario= new Usuarios($llave, $nomUsu, $pass1);

        if($usuario->isOK()!=-1){
            if(isset($_POST['remember'])){
                setcookie('user',$nomUsu,time()+365*24*60*60);
                setcookie('pass',$passUsu,time()+365*24*60*60);
            }
            $_SESSION['nombre']=$nomUsu;
            $_SESSION['perfil']=$usuario->isOk();
            header("Location:portal.php");
            die();
        }else{
            error("Usuario o pass incorrectos");
        }
    