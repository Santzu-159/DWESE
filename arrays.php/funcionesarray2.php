<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class='container mt-5'>
        <p class='text-center'>Arrays en Php</p>

        <?php 

            //----------------------------FUNCIONES RECURSIVAS
            echo "FUNCION RECURSIVA<br>";
            echo "Factorial de 6<br>";
            //Caso recursivo

            function factorial($n){
                //caso de salida

                if($n==0) return 1;
                return $n*factorial($n-1);
            }

            echo "6!= ".factorial(6)."<br>";

            
            echo "<br> Funcion recursiva de suma <br>";
            $mat=[
                1,
                12,
                3,
                8,
                12,
                [2,3,[6,7]]
            ];

            function sumar($mat){

               $suma =0;
               foreach ($mat as $k => $v){
                   if(is_array($v)){
                        $mat2 = $mat[$k];
                        $suma = $suma + sumar($mat2);

                   }else{
                       $suma += $v;
                   }
               }

               return $suma;
            }
            echo "La suma es: ".sumar($mat)."<br>";

            echo "<br>--------------------------------------------------------------<br>";

            // -------------------------FUNCIONES ANONIMAS

            //Es una funcion anonima por que no tiene nombre (se guarda en una variable)

            echo "<br>FUNCION ANONIMA<br>";
            $saludoAnonimo=function($nom){

                echo "<p>Hola <b>$nom</b></p><br>";
            };

            $saludoAnonimo('Juan');
            



        ?>
        </div>

</body>
</html>