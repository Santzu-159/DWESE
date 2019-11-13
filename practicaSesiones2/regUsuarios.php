<?php

session_start();

    $usuNom=strtolower(trim($_POST['nombre'])); //convertimos la cadena en minusculas y quitamos los espacios para asegurarnos
    $usuPass=hash('sha256',trim($_POST['password'])); //quitamos los posibles espacios y codificamos la contraseña
    $usuMail=trim($_POST['email']);

    $file="usuarios.txt";
    $fp = fopen($file,"a+");
    
    if(!$fp){
        echo "<h2 class='text-center' 'text-danger> No se ha podido abrir el archivo.</h2>";
    }

    while(!feof($fp)){ //feof --> sigue ejecutandose hasta que no haya un salto de linea
        
        $texto=explode("?",fgets($fp)); //leemos la linea actual y separamos los datos con ? y lo guardamos en $texto
        //Si el usuario y el email ya existen, no lleva de nuevo al formulario de registro
        if($texto[0]==$usuNom){

            $_SESSION['Error']="El usuario ya existe.";
            fclose($fp);
            header("Location:registrar.php");
            die();

        }

        if($texto[1]==$usuMail){
            $_SESSION['Error']="El email ya existe.";
            fclose($fp);
            header("Location:registrar.php");
            die();
        }
   
    }
    fwrite($fp, $usuNom."?".$usuMail."?".$usuPass.PHP_EOL);

    fclose($fp);

    header("Location:login.php");