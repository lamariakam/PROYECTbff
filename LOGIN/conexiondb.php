<?php

    $conexion = mysqli_connect("127.0.0.1:500"  , "root" , "Mcamila0529" , "usuarios");

    if ($conexion){
        echo 'CONEXIÓN EXITOSA ' ;

    }else {
        echo 'ERROR EN LA CONEXIÓN' ;
    }
?>