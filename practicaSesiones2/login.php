<?php //eliminar cookies
    session_start();
    if(isset($_COOKIE['nomCookie'])){
        $user = $_COOKIE['nomCookie'];
    }else{
        $user ="";
    }

    if(isset($_COOKIE['contrasenia'])){
        $contr = $_COOKIE['contrasenia'];
    }else{
        $contr ="";
    }

    function buscarUsu($usuNom,$usuPass){

        $file="usuarios.txt";
        $fp = fopen($file,"r");

        while(!feof($fp)){ //feof --> sigue ejecutandose hasta que no haya un salto de linea
        
            $texto=explode("?",fgets($fp)); //leemos la linea actual y separamos los datos con ? y lo guardamos en $texto
            $aux=hash("sha256",$usuPass);
            if($texto[0]==$usuNom && trim($texto[2])==$aux){
                fclose($fp);
                return true;
            }
    
        }
        fclose($fp);
        return false;
    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Login</title>
    </head>

    <body class="bg-dark">
        <?php
            if(isset($_POST['btnEnviar'])){

                $usuNom=strtolower(trim($_POST['nombre'])); //convertimos la cadena en minusculas y quitamos los espacios para asegurarnos
                $usuPass=trim($_POST['password']); //quitamos los posibles espacios

                if(buscarUsu($usuNom,$usuPass)){

                    if(isset($_POST['recordar'])){

                        setcookie('nomCookie',$usuNom, time()+365*24*60*60);
                        setcookie('contrasenia',$usuPass, time()+365*24*60*60);
                    }

                    $_SESSION['usuario']=$usuNom;

                    header('Location:perfil.php');
                    die();
                }else{
                    $_SESSION['error']="Los datos son incorrectos.";
                    header('Location:login.php');
                } 

            }else{
    
            
        ?>
            <div class="container mt-5">
            <form name='login' action='login.php' method='POST'>
                <table class="bg-white rounded" align='center'>
                    <tr>
                        <td>
                            <table cellspacing='5' cellpadding='5' align='center'>
                                <tr>
                                    <td colspan='2' align='center' class='bg-info'>
                                        <h4><b>Login</b></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Nombre:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='nombre' placeholder='Nombre' class='form-control' value= '<?php echo $user ?>' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Password:</b>
                                    </td>
                                    <td>
                                        <input type='password' name='password' class='form-control' value= '<?php echo $contr ?>' required />
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="checkbox" name ="recordar"/> Recordar datos
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='2' align='center'>
                                        <input type='submit' value='Login' class='btn btn-secondary' name='btnEnviar' />

                                        <a href='registrar.php' style='text-decoration:none'>
                                            <input type='' value='Registrar' class='btn btn-danger' name='btnRegistro' />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='2' align='center'>
                                        <input type='reset' value='Borrar Campos' class='btn btn-warning' />

                                        <a href='reset.php' style='text-decoration:none'>
                                            <input type='button'  class='btn btn-success' value='Borrar Cookies'>&nbsp;&nbsp;
                                        </a>
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_SESSION['error'])){
            
                    echo "<div class='container mt-5'>".PHP_EOL;
                    echo "<h2 class='text-center text-danger'>".$_SESSION['error']."</h2>".PHP_EOL;
                    echo "</div>".PHP_EOL;
                    unset($_SESSION['error']);
                }
            ?>
                </div>
            <?php } ?>
        </body>   
    </html>