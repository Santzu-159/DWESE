<?php
    session_start();
?>    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body class="bg-dark">
        <div class="container mt-5">
            <form name='registrar' action='regUsuarios.php' method='POST'>
                <table class="bg-white rounded" align='center'>
                    <tr>
                        <td>
                            <table cellspacing='5' cellpadding='5' align='center'>

                                <tr>
                                <td colspan='2' align='center' class='bg-info'>
                                        Registrate
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Usuario:</b>
                                    </td>
                                    <td>
                                        <input type='text' name='nombre' placeholder='Nombre' class='form-control' value='usuario' />
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Email:</b>
                                    </td>
                                    <td>
                                        <input type='email' name='email' placeholder='Email' class='form-control' value='email' />
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Contraseña:</b>
                                    </td>
                                    <td>
                                        <input type='password' name='password' class='form-control' value= 'password' />
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan='1' align='center'>
                                        <input type='submit' value='Enviar' class='btn btn-success' name='btnEnviar' />
                                    </td>
                                    <td>
                                        <a href='login.php' style='text-decoration:none'>
                                            <input type='' value='Volver' class='btn btn-info' name='volver' />
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_SESSION['error'])){ //mostramos los errores si se da el caso
            
                    echo "<div class='container mt-5'>".PHP_EOL;
                    echo "<h2 class='text-center text-danger'>".$_SESSION['error']."</h2>".PHP_EOL;
                    echo "</div>".PHP_EOL;
                    unset($_SESSION['error']);
                }
            ?>
        </div>
    </body>
</html>