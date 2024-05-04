<?php
session_start();

// Verificar ya ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no, redirigir al inicio de sesión
    header("Location: /login.php");
    exit();
}
?>
<!--cabecera-->
<?php include '../views/templates/header.php'; ?>
<h1>Index</h1>
<p>Bienvenido, <?php echo $_SESSION['email']; ?>!</p>
<!-- pie de pagina-->
<?php include '../views/templates/footer.php'; ?>
