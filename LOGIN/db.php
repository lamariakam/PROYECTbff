<?php

  $conexion = mysqli_connect ("" , "root" , "" , "") ;

     if($conexion){
          echo "CONEXION EXITOSA";

    }else{
        echo "NO SE HA PODIDO CONECTAR" ;
    }

?>