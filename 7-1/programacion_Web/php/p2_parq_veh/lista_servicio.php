<?php
    include 'db.php';
    $sql="SELECT * FROM servicio";
    $result=$conn->query($sql);
?>
<html lang="es">
    <head>
        <title>Listado de Servicios</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/servicio.css">
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.html" class="btn btn-primary">Menu</a>
        </nav>
    </head>
    <body>
        <div class="bg"></div>
        <div class="container m-5">
            <h2>Listado de Servicios</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Costo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=$result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id_servicio']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo '$'.$row['costo']; ?></td>
                        <td>
                        <a href="editar_servicio.php?id_servicio=<?php echo $row['id_servicio']; ?>" class="btn btn-warning">Editar</a>
                        <form action="crud.php" method="post">
                            <input type="hidden" name="id_servicio" value="<?php echo $row['id_servicio']; ?>">
                            <?php
                                    $sql2="SELECT COUNT(*) FROM entrada_servicio WHERE id_servicio=".$row['id_servicio']; //busca el servicio en la tabla de trabajos/servicios
                                    $result2=$conn->query($sql2);
                                    if ($result2->num_rows > 0) {   
                                        $count = $result2->fetch_row()[0];      //pasa el resultado a un conteo
                                        if ($count >= 1) {
                                            echo '<a class="btn btn-secondary">En Uso</a>';  //si si esta
                                        } else {
                                            echo '<button type="submit" class="btn btn-danger" name="baja_servicio">Eliminar</button>';     //si no esta
                                        }
                                    }
                                ?>
                        </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="alta_servicio.php" class="btn btn-success">Agregar Servicio</a>
        </div>
    </body>
</html>