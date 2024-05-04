<?php
    include 'db.php';
    $alumno = array();
    if(isset($_GET['id_alumno'])){
        $id = $_GET['id_alumno'];
        $sql = "SELECT * FROM alumnos WHERE id_alumno=$id";
        $result = $conn->query($sql);
        $alumno = $result->fetch_assoc();
    }
?>

<html>
    <head>
        <title>Editar Alumno</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
    </head>
    <body>
        <div class="container mt-5">
            <h2>Editar Alumno</h2>
            <form action="crud.php" method="post">
                <input type="hidden" name="id_alumno" value="<?php echo $alumno['id_alumno']; ?>">
                <div class="form-group">
                    <label for="matricula">Matricula</label>
                    <input type="text" class="form-control" name="matricula" value="<?php echo $alumno['matricula']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nombre_alumno">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $alumno['nombre']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="edad_alumno">Edad</label>
                    <input type="text" class="form-control" name="edad" value="<?php echo $alumno['edad']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email_alumno">EMail</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $alumno['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="carrera">Carrera</label>
                    <select class="form-control" name="id_carrera" required>
                        <?php
                            $sql_carrera="SELECT * FROM carrera";
                            $result_carrera=$conn->query($sql_carrera);
                            while($row_carrera=$result_carrera->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row_carrera['id_carrera']; ?>" <?php if($row_carrera['id_carrera'] == $alumno['id_carrera']) echo 'selected'; ?>>
                            <?php echo $row_carrera['nombre']; ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="cambio_alumno">Actualizar Alumno</button>
            </form>
        </div>
    </body>
</html>
