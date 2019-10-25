<?php

    setcookie('contador',"",-1); //cualquier valor negativo hace que la cookie se borre 
    setcookie('uVisita',"",-1);
    header('Location:pagina.php');

