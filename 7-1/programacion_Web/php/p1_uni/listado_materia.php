<?php

use XTS\Admin\Modules\Options\Controls\Select;

include 'db.php';

$sql = "SELECT * FROM materia";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de Materias</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
</head>
<body>
    <div class="container">
        <h1>Listado de Materias</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Carreras</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id_materia']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php 
                        $sql_carrera = "SELECT id_carrera FROM materias_carreras WHERE id_materia = " . $row['id_materia'];
                        $result_carrera = $conn->query($sql_carrera);if ($result_carrera->num_rows > 0) {
                            // Itera sobre cada fila devuelta por la consulta
                            while($row_carrera = $result_carrera->fetch_assoc()) {
                                // Consulta el nombre de la carrera basado en el ID
                                $sql_nombre_carrera = "SELECT nombre FROM carrera WHERE id_carrera = " . $row_carrera['id_carrera'];
                                $result_nombre_carrera = $conn->query($sql_nombre_carrera);
                                $row_nombre_carrera = $result_nombre_carrera->fetch_assoc();
                                echo $row_carrera['id_carrera'] . " - " . $row_nombre_carrera['nombre'] . "<br>";
                            }
                        } else {
                            echo "No se encontraron carreras asignadas.";
                        }
                        ?>
                    </td>
                    <td>
                        <a href="editar_materia.php?id_materia=<?php echo $row['id_materia']; ?>" class="btn btn-primary">Editar</a>
                        <form action="crud.php" method="post">
                                <input type="hidden" name="id_materia" value="<?php echo $row['id_materia']; ?>">
                                <button type="submit" class="btn btn-danger" name="eliminar_materia">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="alta_materia.php" class="btn btn-success">Agregar Materia</a>
        <a href="asignar_materia.php" class="btn btn-secondary">Asignar Materia</a>
    </div>
</body>
</html>
