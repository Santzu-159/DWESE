<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tres</title>
</head>
<body>

    <?php
        if(isset($_POST['btnEnviar'])){
            //procesamos los datos
            echo "<br><br>".PHP_EOL;
            
            if(isset($_POST['sex'])){
                $sexo=$_POST['sex'];
                echo "<p class='text-center'>Sexo: $sexo</p><br>".PHP_EOL;
            } else{
                echo "<p class='text-danger text-center'>Por favor, selecciona el sexo.</p>".PHP_EOL;
            }

            if(isset($_POST['aficiones'])){

                $aficion=$_POST['aficiones'];
                echo "<p class='text-center'>Aficiones: </p><br>".PHP_EOL;
                echo "<p class='text-center'>";
                
                for($i=0;$i<count($aficion);$i++){ //hacemos uso de un for para recorrer el array de las aficiones

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
            echo "<p class='text-danger text-center'>Por favor, selecciona una afición.</p>".PHP_EOL;
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

    <div class= "container mt-5">  
        <form name='name' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>
        <p>Indique su sexo y aficiones:</p><br>
        <div class="form-group">
            <div class="form-check">
                <p>Sexo:</p>
                <input type="radio" name="sex" value='hombre'/> Hombre  
                <input type="radio" name="sex" value='mujer'/> Mujer<br>
                
            </div>

            <div class="form-check">
            <br><p>Aficiones:</p>
                <input type="checkbox" name="aficiones[]" value='cine'/> Cine  
                <input type="checkbox" name="aficiones[]" value='literatura'/> Literatura 
                <input type="checkbox" name="aficiones[]" value='musica'/> Música            
            </div>
        </div>

        <div class="form-group">
        <br><input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
            <input type='reset' value='Borrar' class='btn btn-primary'>
        </div>    
        
        </form>
    </div>    
        <?php   } ?>
    
</body>
</html>