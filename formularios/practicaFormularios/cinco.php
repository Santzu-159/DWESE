<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body>
    

    <?php
        if(isset($_POST['btnEnviar'])){
            //procesaremos los datos
            echo "<br><br>".PHP_EOL;

            $nombre=$_POST['nombre'];
            if($nombre==""){
                echo "<p class='text-center'>Por favor, introduce tu nombre.</p>".PHP_EOL;
            }else{
                echo "<p class='text-center'>Nombre: $nombre</p>".PHP_EOL;
            }

            $apellidos=$_POST['apellidos'];
            if($apellidos==""){
                echo "<p class='text-center'>Por favor, introduce tus apellidos.</p>".PHP_EOL;
            }else{
                echo "<p class='text-center'>Apellidos: $apellidos</p>".PHP_EOL;
            }

            $edad=$_POST['edad'];
            if($edad=='not_select'){
                echo "<p class='text-center'>Por favor, introduce tu edad.</p>".PHP_EOL;
            }else{
                echo "<p class='text-center'>Edad: $edad</p>".PHP_EOL;
            }

            $peso=$_POST['peso'];
            if($peso==""){
                echo "<p class='text-center'>Por favor, introduce tu peso.</p>".PHP_EOL;
            }else{
                echo "<p class='text-center'>Peso: $peso</p>".PHP_EOL;
            }

            if(isset($_POST['sexo'])){
                $sexo=$_POST['sexo'];
                echo "<p class='text-center'>Eres: $sexo</p><br>".PHP_EOL;
            } else{
                echo "<p class='text-center'>Por favor, selecciona tu sexo.</p>".PHP_EOL;
            }

            if(isset($_POST['eCivil'])){

                $estadoCivil=$_POST['eCivil'];
                echo "<p class='text-center'>Estado civil: $estadoCivil</p><br>".PHP_EOL;
            } else{
                echo "<p class='text-center'>Por favor, selecciona tu estado civil.</p>".PHP_EOL;
            }

            if(isset($_POST['aficiones'])){

                $aficion=$_POST['aficiones'];
                echo "<p class='text-center'>Tus aficiones son :</p><br>".PHP_EOL;
                echo "<p class='text-center'>";

                
                for($i=0;$i<count($aficion);$i++){
                    echo $aficion[$i];
                    //formato de la salida
                    if($i==count($aficion)-1){
                        echo ".";
                    }else if($i==count($aficion)-2){
                        echo " y ";
                    }
                }
                echo "</p>".PHP_EOL;
                echo "<br>".PHP_EOL;
        } else{
            echo "<p class='text-center'>Por favor, selecciona al menos una afición.</p>".PHP_EOL;
        }
            ?>
    <!--Botón Volver-->
    <p class='text-center mt-5'>
        <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
    </p>
    <?php
            
        }else{
            //Pinto el formulario
    ?>

    <div class='container mt-5'>
        
        <form name='name' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>
            <table>
                <tr>
                    <td>
                        Escriba los datos siguientes:
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Nombre:</b>
                    </td>
                    <td colspan="2">
                        <b>Apellidos:</b>
                    </td>
                    <td colspan="3">
                        <b>Edad:</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type='text' name='nombre'>
                    </td>
                    <td colspan="2">
                        <input type='text' name='apellidos'>
                    </td>
                    <td colspan="3">
                        <select name="edad" required>
                            <option value="not_select">...</option>
                            <?php
                            for($i=18;$i<=99;$i++){
                                echo "<option value='$i'>$i</option>".PHP_EOL;
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Peso:</b>
                    </td>
                    <td colspan="2">
                        <b>Sexo:</b>
                    </td>
                    <td colspan="3">
                        <b>Estado Civil:</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="peso" min="10" max="150" value='' step=".05"> kg
                    </td>
                    <td>
                        <input type="radio" name="sexo" value='hombre'> Hombre
                    </td>
                    <td>
                        <input type="radio" name="sexo" value='mujer'> Mujer
                    </td>
                    <td>
                        <input type="radio" name="eCivil" value='soltero'> Soltero/a
                    </td>
                    <td>
                        <input type="radio" name="eCivil" value='casado'> Casado/a
                    </td>
                    <td>
                        <input type="radio" name="eCivil" value='otro'> Otro/a
                    </td>
                </tr>
                <tr>
                    <td >
                        <b>Aficiones:</b>
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='cine'> Cine
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='literatura'> Literatura
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='tebeos'> Tebeos
                    </td>
                </tr>

                <tr>
                    <td><p></p></td>    
                    <td>
                        <input type="checkbox" name="aficiones[]" value='deporte'> Deporte
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='música'> Música
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='televisión'> Televisión
                    </td>
                </tr>
                <tr>
                    <td id='btns' colspan='4'>
                        <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
                        <input type='reset' value='Borrar' class='btn btn-primary'>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php } ?>
</body>

</html>