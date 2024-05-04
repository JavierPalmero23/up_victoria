<?php
include 'db.php'; // Asegúrate de que este archivo contenga la conexión a tu base de datos
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
</head>
<body>
    <div class="container mt-5">
        <h2>Asignar Materia a Carreras</h2>
        <form action="crud.php" method="post">
            <div class="mb-3">
                <label for="id_materia" class="form-label">ID de Materia</label>
                <select class="form-control" name="id_materia" required>
                    <?php
                        $sql_carrera="SELECT * FROM materia";
                        $result_carrera=$conn->query($sql_carrera);
                        while($row_carrera=$result_carrera->fetch_assoc()):
                    ?>
                    <option value="<?php echo $row_carrera['id_materia']; ?>">
                        <?php echo $row_carrera['nombre']; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_carrera" class="form-label">ID de Carrera</label>
                <select class="form-control" name="id_carrera" required>
                    <?php
                        $sql_carrera="SELECT * FROM carrera";
                        $result_carrera=$conn->query($sql_carrera);
                        while($row_carrera=$result_carrera->fetch_assoc()):
                    ?>
                    <option value="<?php echo $row_carrera['id_carrera']; ?>">
                        <?php echo $row_carrera['nombre']; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="asignar_materia">Asignar Materia</button>
        </form>
    </div>
</body>
</html>
