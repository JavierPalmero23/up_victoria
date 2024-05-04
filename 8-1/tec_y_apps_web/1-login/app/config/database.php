<?php
session_start();

// Verificar ya ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no, redirigir al inicio de sesión
    header("Location: /login.php");
    exit();
}
?>

<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "taw_p_01";

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
?>
