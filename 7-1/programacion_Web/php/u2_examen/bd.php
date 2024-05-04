<?php
    $server='localhost';
    $db='p_examen_u2';
    $usr='root';
    $pass='';
    $conn=mysqli_connect($server,$usr,$pass,$db);
    if(!$conn){
        echo('No se pudo conectar a la BD');
    }
?>