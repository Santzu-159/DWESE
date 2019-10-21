<?php
    session_start(); //Indicamos que vamos a trabajar con sesiones 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style='background-color:aqua'>
    <div class="container mt-5">
        <?php
            if(isset($_POST['btnEnviar'])){
                //procesamos el formulario
                $usuVaildo="admin";
                $passValida="admin1234";

                $nom=$_POST['nombre'];
                $pass=$_POST['password'];

                if($nom == $usuVaildo && $pass == $passValida){
                    //login correcto
                    $_SESSION['usuario']=$nom;
                    header("Location:portal.php"); //entramos directamente a la pag portal

                }else{
                    //login incorrecto
                    $_SESSION['error']="Error. El nombre de usuario y/o la contraseña son incorrectos.";
                    header("Location:index.php");
                }
       
            }else{
                //pintamos el formulario

        ?>    
        <form name='login' action='index.php' method='POST'>
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
                                    <input type='text' name='nombre' placeholder='Nombre' required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Password:</b>
                                </td>
                                <td>
                                    <input type='password' name='password' class='form-control' required />
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2' align='center'>
                                    <input type='submit' value='Login' class='btn btn-info' name='btnEnviar' />
                                    <input type='reset' value='Limpiar' class='btn btn-warning' />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
                <?php
                
                    if(isset($_SESSION["error"])){
                        echo "<div class= 'container mt-5' >";
                        echo "<p class='text-center'  text-danger'>".$_SESSION['error']."</p>";
                        echo " </div>";
                        unset($_SESSION['error']); //reseteamos
                           
                    }
                ?>
    </div>

    <?php } ?> <!-- cerramos else -->
</body>

</html>