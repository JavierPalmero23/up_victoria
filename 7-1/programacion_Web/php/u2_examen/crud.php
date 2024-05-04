<?php
    include'bd.php';
// LIBRO
    if (isset($_POST['libro'])) {
        $nombre = $_POST['nombre'];
        $hojas = $_POST['hojas'];
        $tema = $_POST['tema'];
        $autor = $_POST['autor'];
        $id_editorial = $_POST['id_editorial'];
        $sql = "INSERT INTO libro (nombre, hojas, tema, autor, id_editorial) VALUES ('$nombre', '$hojas', '$tema', '$autor', '$id_editorial') "; 
        $result = $conn->query($sql);
        header('location: listado.php');
    }

// EDITORIAL
    if (isset($_POST['editorial'])) {
        $nombre = $_POST['nombre'];
        $sql = "INSERT INTO editorial (nombre) VALUES ('$nombre') "; 
        $result = $conn->query($sql);
        header('location: listado.php');
    }
?>