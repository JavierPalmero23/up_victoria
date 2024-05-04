<?php
    include 'db.php'; // Asegúrate de que este archivo contenga la conexión a tu base de datos
    $sql = "SELECT id_alumno, nombre FROM alumnos";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Materias Asignadas al Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
</head>
<body>
    <div class="container mt-5">
        <h2>Materias Asignadas al Alumno</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Materias</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php 
                        $sql_materias = "SELECT * FROM alumno_materia WHERE id_alumno = " . $row['id_alumno'];
                        $result_materias = $conn->query($sql_materias);
                        while($row2 = $result_materias->fetch_assoc()):
                            $sql_materias_nombres = "SELECT nombre FROM materia WHERE id_materia = " . $row2['id_materia'];
                            $result_materias_nombres = $conn->query($sql_materias_nombres);
                            $row_materia_nombre = $result_materias_nombres->fetch_assoc();
                            echo $row_materia_nombre['nombre'] . "<br>";
                        endwhile;
                    ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
            <a href="asignar_alumno_materia.php" class="btn btn-success">Asignar Materia a Alumno</a>
    </div>
</body>
</html>
