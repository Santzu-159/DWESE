<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nueve</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 9</h4>
        <p class='text-center'>
        
            Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu mismo los<br>
            valores, poniendo índices alfanuméricos a cada valor. Junta ambos arrays en uno solo llamado<br>
            “lenguajes” y muéstralo por pantalla en una tabla.<br>
        </p>
        
        <?php
            $lenguajes_cliente =[
                "HTML" => "Html",
                "JS" => "Java Script",
                "JA" => "Java",
                "VBS" => "Visual Basic",
                "FLS" => "Flash",
                "CSS" => "Css"
            ];

            $lenguajes_servidor =[
                "CGI" => "Cgi",
                "PRL" => "Perl",
                "ASP" => "Asp Net",
                "PHP" => "Php",
                "JSP" => "JavaServer"
            ];
           
            $lenguajes = array_merge($lenguajes_cliente,$lenguajes_servidor);

            echo "Array \$lenguajes_cliente<br>";
            print_r($lenguajes_cliente);

            echo "<br>Array \$lenguajes_servidor<br>";
            print_r($lenguajes_servidor);

            echo "<br>Array conjunto<br>";
           
            echo "<table align='center' border=1px>".PHP_EOL;
            for($f=0;$f<count($lenguajes);$f++){ //filas

                echo "<tr>".PHP_EOL;

                    echo "<td>";
                    array($lenguajes);
                    echo $lenguajes[$f]; // No me funciona pero tampoco entiendo por que, lo he probado tambien con print pero se continua dando error.
                    echo "</td>".PHP_EOL;
                
                echo "</tr>".PHP_EOL;
            }
            echo "</table>".PHP_EOL;

        ?>
    </div>
</body>
</html>