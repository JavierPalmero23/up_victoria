<html>
    <head>
        <title>Alta de Alumno</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <?php include 'db.php'; ?>
        <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
    </head>
    <body> 
        <div class="container mt-5">
            <h2>Alta de Alumno</h2>
            <form action="crud.php" method="post">
                <div class="form-group">
                    <label for="matricula">Matricula</label>
                    <input type="text" class="form-control" name="matricula" required>
                </div>
                <div class="form-group">
                    <label for="nombre_alumno">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="edad_alumno">Edad</label>
                    <input type="text" class="form-control" name="edad" required>
                </div>
                <div class="form-group">
                    <label for="email_alumno">EMail</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="carrera">Carrera</label>
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
                <button type="submit" class="btn btn-primary" name="alta_alumno">Agregar Alumno</button>
            </form>
        </div>
    </body>
</html>
