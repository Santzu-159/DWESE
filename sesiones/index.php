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

            $usuarios=[
                "admin"=> "passadmin",
                "usuario"=>"passusu",
                "juan" => "passjuan",
                "pedro" => "passpedro",
                "antonia" => "passantonia"
            ];

            $nomUsu=trim($_POST['nombre']);
            $passUsu=trim($_POST['password']);

            if(isset($usuarios[$nomUsu]) && $usuarios[$nomUsu]==$passUsu){
                
                $_SESSION['usuario']=$nomUsu;
                header('Location:portal.php');
            }else{
                
                $_SESSION['error']="El nombre de usuario o la contraseña son Incorrectos!!";
                header('Location:index.php');
            }
        }else{
        
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
                                    <a href='#' class='btn btn-success'>Coockies</a>
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