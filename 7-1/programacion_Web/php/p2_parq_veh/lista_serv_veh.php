<?php
    include 'db.php';
    $sql="SELECT * FROM entrada_servicio";
    $result=$conn->query($sql);
?>
<html lang="es">
    <head>
        <title>Listado de Servicios en Vehiculos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/serv-veh.css">
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.html" class="btn btn-primary">Menu</a>
        </nav>
    </head>
    <body>
        <div class="bg"></div>
        <div class="container m-5">
            <h2>Listado de Servicios en Vehiculos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha de Ingreso</th>
                        <th>Servicio</th>
                        <th>Total</th>
                        <th>Vehiculo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=$result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['fecha_ingreso']; ?></td>
                        <td>
                        <?php
                                $sql="SELECT * FROM servicio WHERE id_servicio=".$row['id_servicio'];//subconsulta para los servicios
                                $result2=$conn->query($sql);
                                if ($result2->num_rows > 0) {//si existen registrso
                                    $row2=$result2->fetch_assoc();
                                    echo $row2['nombre']; 
                                } else {
                                    echo "Sin Servicios";
                                }
                            ?>
                    </td>
                        <td><?php echo '$'.$row['total']; ?></td>
                        <td>
                            <?php
                                $sql="SELECT * FROM vehiculo WHERE id_vehiculo=".$row['id_vehiculo'];//subconsulta para los vehiculos
                                $result2=$conn->query($sql);
                                if ($result2->num_rows > 0) {//si existen registros
                                    $row2=$result2->fetch_assoc();
                                    echo $row2['num_serie'];
                                } else {
                                    echo "Sin Vehiculos";
                                }
                            ?>
                        </td>
                        <td>
                        <a href="editar_serv_veh.php?id_entrada_servicio=<?php echo $row['id_entrada_servicio']; ?>" class="btn btn-warning">Editar</a>
                        <form action="crud.php" method="post">
                            <input type="hidden" name="id_entrada_servicio" value="<?php echo $row['id_entrada_servicio']; ?>">
                            <button type="submit" class="btn btn-danger" name="baja_serv_veh">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="alta_serv_veh.php" class="btn btn-success">Agregar Servicio</a>
        </div>
    </body>
</html>