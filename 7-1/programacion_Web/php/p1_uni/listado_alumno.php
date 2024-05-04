<?php
    include 'db.php';
    $sql="SELECT * FROM alumnos";
    $result=$conn->query($sql);
?>
<html lang="es">
    <head>
        <title>Listado de Alumnos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
    </head>
    <body>
        <div class="container m-5">
            <h2>Listado de Alumnos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Alumno</th>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Carrera</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=$result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id_alumno']; ?></td>
                        <td><?php echo $row['matricula']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['edad']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <?php
                                $sql_carrera = "SELECT nombre FROM carrera WHERE id_carrera = " . $row['id_carrera'];
                                $result_carrera = $conn->query($sql_carrera);
                                $row_carrera = $result_carrera->fetch_assoc();
                                echo $row_carrera['nombre'];
                            ?>
                        </td>
                        <td>
                            <a href="editar_alumno.php?id_alumno=<?php echo $row['id_alumno']; ?>" class="btn btn-primary">Editar</a>
                            <form action="crud.php" method="post">
                                <input type="hidden" name="id_alumno" value="<?php echo $row['id_alumno']; ?>">
                                <button type="submit" class="btn btn-danger" name="eliminar_alumno">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="alta_alumno.php" class="btn btn-success">Agregar Alumno</a>
        </div>
    </body>
</html>
