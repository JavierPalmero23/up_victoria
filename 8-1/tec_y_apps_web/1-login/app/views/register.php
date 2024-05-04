<?php include_once '../controller/AuthController.php'; ?>

<?php include '../views/templates/header.php'; ?>
<h1>Registrarse</h1>
<form action="../controller/AuthController.php" method="post">
    <input type="text" name="nombres" placeholder="Nombres" required><br>
    <input type="text" name="apellidos" placeholder="Apellidos" required><br>
    <input type="email" name="email" placeholder="Correo electrónico" required><br>
    <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento" required><br>
    <select name="sexo" required>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
        <option value="O">Otro</option>
    </select><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <input type="submit" name="register" value="Registrarse">
</form>
<?php include '../views/templates/footer.php'; ?>
