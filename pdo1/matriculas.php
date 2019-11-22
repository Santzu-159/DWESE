<!DOCTYPE html>
<?php
session_start();
//hacemos el autoload de las clases
spl_autoload_register(function ($nombre) {
    require "./class/" . $nombre . ".php";
});
$conexion=new Conexion();
$llave=$conexion->getConector();

$matricula=new Matriculas($llave);

$totalRegistros=$matricula->getTotal();
$paginacion=4; //cuantos registros vamos a mostrar en cada pagina
if($totalRegistros%$paginacion == 0){//si el modulo es 0 (resto)

    $totalPaginas = intdiv($totalRegistros,$paginacion); //el total de las paginas es la division entera

}else{

    $totalPaginas = intdiv($totalRegistros, $paginacion)+1; //el total de las paginas es la division +1
}

if(!isset($_GET['pag'])){
    $inicio=0;
}else{
    $inicio=$paginacion*($_GET['pag'])-1; //los registros que queremos mostrar * el numero de páginas -1
}
$filas=$matricula->read($inicio,$paginacion);//total de paginas


?>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style='background-color:salmon'>
    <h3 class='text-center mt-4'>Crud Matriculas</h3>
    <div class="container mt-3">
        <a href="cmatricula.php" class='btn btn-success mb-3'>Nueva Matricula</a>
        <?php
            if(isset($_SESSION['mensaje'])){
                echo "<p class='mt-3 mb-3 text-primary'>{$_SESSION['mensaje']}</p>";
                unset($_SESSION['mensaje']);
            } 
        ?>
        <table class="table table-striped table-dark">
            <thead>
                <tr style='text-align:center; font-weight:bold;'>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Modulo</th>
                    <th scope="col">Nota Final</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($filas as $fila){
                        echo "<tr style='text-align:center'>".PHP_EOL;
                        echo "<th scope='row'>{$fila->apeAl}</th>";
                        echo "<td>{$fila->nomAl}</td>";
                        echo "<td>{$fila->nomMod}</td>";
                        echo "<td>{$fila->notaFinal}</td>";
                        echo "<td>";
                        echo "<form name='borrar' action='bmatricula.php' method='POST' style='display:inline'>";
                        echo "<input type='hidden' name='al' value='{$fila->al}'>";
                        echo "<input type='hidden' name='mod' value='{$fila->modulo}'>";
                        echo "<a href='mmatricula.php?al={$fila->al}&mod={$fila->modulo}' class='btn btn-info'>Editar</a>";
                        echo "&nbsp;<input type='submit' value='Borrar' class='btn btn-danger'>";
                        echo "</td>";
                        echo "</form>";
                        echo "</tr>";
                    }
                    $llave=null;
                ?>
            </tbody>
        </table>
        <!-- PAGINACION -->
        <div class="container mt-4">
             <b>Página:&nbsp;</b>

             <?php       
             for($i=1; $i<=$totalPaginas; $i++){

                 if($i!=$totalPaginas){
                     echo "<a href='matriculas.php?pag=$i' style='text-decoration:none'>&nbsp;&nbsp;$i&nbsp;&nbsp;|</a>";
                 }else{
                    echo "<a href='matriculas.php?pag=$i' style='text-decoration:none'>&nbsp;&nbsp;$i&nbsp;&nbsp;</a>";
                 }
             }
            ?>
        </div>
    </div>
</body>

</html>