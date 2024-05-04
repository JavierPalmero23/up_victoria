<?php
    include 'db.php';
    if(isset($_GET['id_materia'])){
        $id_materia = $_GET['id_materia'];
        $sql = "SELECT * FROM materia WHERE id_materia=$id_materia";
        $result = $conn->query($sql);
        $materia = $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Materia</h2>
        <form action="crud.php" method="post">
            <input type="hidden" name="id_materia" value="<?php echo $materia['id_materia']; ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $materia['nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $materia['descripcion']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="actualizar_materia">Actualizar Materia</button>
        </form>
    </div>
</body>
</html>
