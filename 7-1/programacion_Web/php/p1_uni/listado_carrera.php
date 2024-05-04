<?php
include 'db.php';
$sql="SELECT * FROM carrera";
$result=$conn->query($sql);
?>
<html lang="es">
    <head>
        <title>Listado de Carreras</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
    </head>
    <body>
        <div class="container m-5">
            <h2>Listado de Carreras</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Carrera</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo isset($row['id_carrera']) ? $row['id_carrera'] : ''; ?></td>
                        <td><?php echo isset($row['nombre']) ? $row['nombre'] : ''; ?></td>
                        <td> 
                            <a href="editar_carrera.php?id_carrera=<?php echo isset($row['id_carrera']) ? $row['id_carrera'] : ''; ?>" class="btn btn-primary">Editar</a>
                            <form action="crud.php" method="post">
                                <input type="hidden" name="id_carrera" value="<?php echo $row['id_carrera']; ?>">
                                <button type="submit" class="btn btn-danger" name="eliminar_carrera">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="alta_carrera.php" class="btn btn-success">Agregar Carrera</a>
        </div>
    </body>
</html>
