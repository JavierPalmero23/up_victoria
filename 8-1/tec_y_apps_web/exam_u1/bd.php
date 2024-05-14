<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="taw_e_u1";
    $conn = new mysqli($server, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
?>