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
            $_SESSION['username']=$nomUsu;
            $_SESSION['perfil']=$usuario->isOk();
            echo "Validación correcta.";
            die();
        }else{
            error("Usuario o pass incorrectos");
        }

        if($nomUsu=="usuario" && $passUsu=="usuario"){
            if(isset($_POST['remember'])){
                        setcookie('user',$nomUsu,time()+365*24*60*60);
                        setcookie('pass',$passUsu,time()+365*24*60*60);
                    }
            $_SESSION['user']=$nomUsu;

            echo "Has iniciado con éxito";
            
        }else{
            $_SESSION['error']="El nombre de usuario o la contraseña son Incorrectos!!";
            header('Location:index.php');
        }

    