<?php include_once '../controller/AuthController.php'; ?>

<?php include '../views/templates/header.php'; ?>
<h1>Iniciar sesión</h1>
<form action="../controller/AuthController.php" method="post">
    <input type="email" name="email" placeholder="Correo electrónico" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <input type="submit" name="login" value="Iniciar sesión">
</form>
<?php include '../views/templates/footer.php'; ?>
