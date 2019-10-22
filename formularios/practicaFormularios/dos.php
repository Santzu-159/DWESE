<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dos</title>
</head>
<body>

    <?php
        if(isset($_POST['btnEnviar'])){
            //procesamos los datos
            echo "<br><br>".PHP_EOL;
            $edad=$_POST['edad'];
            if($edad==""){
                echo "Por favor, introduce tu edad.".PHP_EOL;
            }else{
                echo "<b>edad:</b> $edad<br><br>".PHP_EOL;
            }
            $peso=$_POST['peso'];
            if($peso==""){
                echo "Por favor, introduce tu peso.".PHP_EOL;
            }else{
                echo "<b>peso:</b> $peso<br><br>".PHP_EOL;
            }
    ?>     

            <!--Volver-->
        <p class='text-center mt-5'>
            <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
        </p>
    <?php
            
        }else{
            //Pinto el formulario
   
            
    ?>

    <div class= "container mt-5">  
        <form name='name' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="edad">Edad: </label>
                    <input type="number" name="edad" min="5" max="130" value=''>

                </div>
                
                <div class="form-group col-md-6">
                    <label for="peso">Peso: </label>
                    <input type="number" name="peso" min="10" max="150" value='' step=".01">
                </div>

            </div>

            <div class="form-group">
                <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
                <input type='reset' value='Borrar' class='btn btn-primary'>
            </div>    
         
        </form>
    </div>    
        <?php   } ?>
    
</body>
</html>