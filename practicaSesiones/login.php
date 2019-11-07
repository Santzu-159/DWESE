<?php
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

    <body style ='background-color:aqua'>
        <?php
            if(isset($_POST['btnEnviar'])){

                $usuarios=[
                    "admin" => [ 
                        "tipo"=>"administrador",
                        "contrasenia"=>"admin"
                    ],

                    "avanzado" =>[
                        "tipo"=>"avanzado",
                        "contrasenia"=>"1234"
                    ],

                    "normal" =>[
                        "tipo"=>"normal",
                        "contrasenia"=>"asdf"
                    ]

                ];

                $usuNom=strtolower(trim($_POST['nombre'])); //convertimos la cadena en minusculas y quitamos los espacios para asegurarnos
                $usuPass=trim($_POST['password']); //quitamos los posibles espacios

                if(isset($usuarios[$usuNom]) && $usuarios[$usuNom]["contrasenia"]==$usuPass){

                    if(isset($_POST['recordar'])){

                        setcookie('nomCookie',$usuNom, time()+365*24*60*60);
                        setcookie('contrasenia',$usuPass, time()+365*24*60*60);
                    }

                    $_SESSION["usuario"] = [

                        "nombre" => $usuNom,
                        "tipo" => $usuarios[$usuNom]['tipo']

                    ];

                    header('Location:menu.php');
                }else{
                    $_SESSION['error']="El nombre de usuario o la contraseña son Incorrectos!!";
                    header('Location:login.php');
                }
            }else{
    
            
        ?>
            <div class="container mt-5">
            <form name='login' action='login.php' method='POST'>
                <table border='3' bordercolor='red' cellspacing='5' align='center'>
                    <tr>
                        <td>
                            <table cellspacing='5' cellpadding='5' align='center'>
                                <tr>
                                    <td colspan='2' bgcolor='silver' align='center'>
                                        Login
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
                                        <input type="checkbox" name ="recordar"/> Recordar usuario y contraseña
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='2' align='center'>
                                        <input type='submit' value='Login' class='btn btn-info' name='btnEnviar' />

                                        <input type='reset' value='Limpiar' class='btn btn-warning' />

                                        <a href='reset.php' style='text-decoration:none'>
                                            <input type='button' value='Resetcookies' style=' '>&nbsp;&nbsp;</a>
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