<?php

$conexion = mysqli_connect("localhost", "root", "", "loginavanzado");

if ($conexion){
    echo "conectado";
}else{
        echo "no conectado";
}

?>
