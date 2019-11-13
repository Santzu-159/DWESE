<?php 
session_start();
session_destroy(); //nos cargamos todas las sesiones
header("Location:login.php");

//recomiendan que si la pagina solo va a tener php, que no se cierre la etiqueta de php