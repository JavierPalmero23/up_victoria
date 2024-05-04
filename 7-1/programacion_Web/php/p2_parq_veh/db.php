<?php
    //CONEXION A LA BASE DE DATOS
    $server="localhost";
    $user="admin";
    $password="bbb7aeb39150c47eff9ceed46bfbd1b654e0cea1cf84fd96"; //por practicidad
    $db="p_parque_vehicular";

    $conn=new mysqli($server,$user,$password,$db);

    if($conn->connect_errno){                                       //en caso de que no conecte
        die("conexion fallida: ".$conn->connect_error);
    }
?>