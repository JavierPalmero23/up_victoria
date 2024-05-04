<?php
session_start();

// Verificar ya ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no, redirigir al inicio de sesión
    header("Location: ../views/login.php");
    exit();
}
?>