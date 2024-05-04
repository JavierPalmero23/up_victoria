<?php
    //conexion bd
    $servername="localhost";
    $username="admin";
    $password="bbb7aeb39150c47eff9ceed46bfbd1b654e0cea1cf84fd96";
    $dbname="p_universidad";

    //crear conexion
    $conn= new mysqli($servername,$username,$password,$dbname);

    //verificar conexion
    if($conn->connect_errno){
        die("conexion fallida: ".$conn->connect_error);
    }
?>