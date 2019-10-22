<!DOCTYPE html>
<html lang="es">

<head>
    <title>Seis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
        if(isset($_POST['btnEnviar'])){
            //procesaremos los datos
            echo "<br><br>".PHP_EOL;
            if(isset($_POST['aficiones'])){
                $aficiones=$_POST['aficiones'];
                echo "<p class='text-center'>Tus aficiones son:</p><br>".PHP_EOL;
                echo "<p class='text-center'>";
                //devuelve un array numerico así que puedo usar el for
                for($i=0;$i<count($aficiones);$i++){
                    echo $aficiones[$i];
                }
                echo "</p>".PHP_EOL;
                echo "<br>".PHP_EOL;
        } else{
            echo "<p class=' text-center'>Por favor, selecciona una afición.</p>".PHP_EOL;
        }
        if(isset($_POST['rangoEdad'])){
            $rangoEdad=$_POST['rangoEdad'];
            echo "<p class='text-center'>Tu rango de edad es:</p><br>".PHP_EOL;
            echo "<p class='text-center'>";
            //devuelve un array numerico así que puedo usar el for
            for($i=0;$i<count($rangoEdad);$i++){
                echo $rangoEdad[$i];
                //formato de la salida
                if($i==count($rangoEdad)-1){
                    echo ".";
                }else if($i==count($rangoEdad)-2){
                    echo " y ";
                }else{
                    echo ", ";
                }
            }
            echo "</p>".PHP_EOL;
            echo "<br>".PHP_EOL;
    } else{
        echo "<p class='text-center'>No seleccionado tu rango de edad.</p>".PHP_EOL;
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
            <table cellpadding='5' cellspacing='5'>
                <tr>
                    <td colspan='10'>
                        Selecciona tus aficiones:
                    </td>
                </tr>
                <tr>
                    <?php
                    $aficiones=["Deporte","Escuchar Musica","Cantar","Bailar","Dibujar","Jugar a Videojuegos","Escribir","Leer","Viajar","Tocar Instrumentos"];
                    for($i=0;$i<count($aficiones);$i++){
                        echo "<td>".PHP_EOL;
                        echo "<input type='checkbox' name='aficiones[]' value='".$aficiones[$i]."'>".$aficiones[$i].PHP_EOL;
                        echo "</td>".PHP_EOL;
                    }
                ?>
                </tr>
                <tr>
                    <td colspan='10'>
                        Selecciona tu rango de edad:
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="rangoEdad[]" multiple>
                            <option value="0-18">0-18</option>
                            <option value="18-65">18-65</option>
                            <option value="65-99">65-99</option>
                        </select>
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