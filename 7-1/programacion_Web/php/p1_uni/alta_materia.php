<?php
include 'db.php';

if(isset($_POST['crear_materia'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $sql = "INSERT INTO materias (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
    $result = $conn->query($sql);
    // Redirigir o mostrar mensaje de éxito/error
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
</head>
<body>
    <div class="container mt-5">
        <h2>Alta de Materia</h2>
        <form action="crud.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="alta_materia">Crear Materia</button>
        </form>
    </div>
</body>
</html>
