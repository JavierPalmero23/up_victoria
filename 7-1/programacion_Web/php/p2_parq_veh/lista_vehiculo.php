<?php
    include 'db.php';
    $sql="SELECT * FROM vehiculo";
    $result=$conn->query($sql);
?>
<html lang="es">
    <head>
        <title>Listado de Vehiculos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/vehiculo.css">
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.html" class="btn btn-primary">Menu</a>
        </nav>
    </head>
    <body>
        <div class="bg"></div>
        <div class="container m-5">
            <h2>Listado de Vehiculos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Numero de Serie</th>
                        <th>Marca</th>
                        <th>Submarca</th>
                        <th>Modelo</th>
                        <th>Tipo</th>
                        <th>Color</th>
                        <th>Capacidad</th>
                        <th>Procedencia</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=$result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['num_serie']; ?></td>
                        <td><?php echo $row['marca']; ?></td>
                        <td><?php echo $row['submarca']; ?></td>
                        <td><?php echo $row['modelo']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>
                        <td><?php echo $row['color']; ?></td>
                        <td><?php echo $row['capacidad']; ?></td>
                        <td><?php echo $row['procedencia']; ?></td>
                        <td>
                        <a href="editar_vehiculo.php?id_vehiculo=<?php echo $row['id_vehiculo']; ?>" class="btn btn-warning">Editar</a>
                            <form action="crud.php" method="post">
                                <input type="hidden" name="id_vehiculo" value="<?php echo $row['id_vehiculo']; ?>">
                                <?php
                                    $sql2="SELECT COUNT(*) FROM entrada_servicio WHERE id_vehiculo=".$row['id_vehiculo']; //busca el vehiculo en la tabla de trabajos/servicios
                                    $result2=$conn->query($sql2);
                                    if ($result2->num_rows > 0) {   
                                        $count = $result2->fetch_row()[0];      //pasa el resultado a un conteo
                                        if ($count >= 1) {
                                            echo '<a class="btn btn-secondary">En Servicio</a>';  //si si esta
                                        } else {
                                            echo '<button type="submit" class="btn btn-danger" name="baja_vehiculo">Eliminar</button>';     //si no esta
                                        }
                                    }
                                ?>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="alta_vehiculo.php" class="btn btn-success">Agregar Vehiculo</a>
        </div>
    </body>
</html>
                