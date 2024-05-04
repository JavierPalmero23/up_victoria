<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Materia a Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
</head>
<body>
    <div class="container mt-5">
        <h2>Asignar Materia a Alumno</h2>
        <form action="crud.php" method="post">
            <div class="mb-3">
                <label for="id_alumno" class="form-label">Alumno</label>
                <select class="form-control" name="id_alumno" required>
                    <?php
                        $sql_alumno="SELECT * FROM alumnos";
                        $result_alumno=$conn->query($sql_alumno);
                        while($row_alumno=$result_alumno->fetch_assoc()):
                    ?>
                    <option value="<?php echo $row_alumno['id_alumno']; ?>">
                        <?php echo $row_alumno['nombre']; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_materia" class="form-label">Materia</label>
                <select class="form-control" name="id_materia" required>
                    <?php
                        $sql_materia="SELECT * FROM materia";
                        $result_materia=$conn->query($sql_materia);
                        while($row_materia=$result_materia->fetch_assoc()):
                    ?>
                    <option value="<?php echo $row_materia['id_materia']; ?>">
                        <?php echo $row_materia['nombre']; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="asignar_alumno_materia">Asignar Materia</button>
        </form>
    </div>
</body>
</html>
