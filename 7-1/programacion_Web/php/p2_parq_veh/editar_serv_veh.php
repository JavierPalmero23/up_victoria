<?php
    include 'db.php';
    $serv_veh = array();
    if(isset($_GET['id_entrada_servicio'])){
        $id_entrada_servicio = $_GET['id_entrada_servicio'];
        $sql = "SELECT * FROM entrada_servicio WHERE id_entrada_servicio=$id_entrada_servicio";
        $result = $conn->query($sql);
        $serv_veh = $result->fetch_assoc();
    }
?>

<html>
    <head>
        <title>Cambio Vehiculo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/serv-veh.css">
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.html" class="btn btn-primary">Menu</a>
            <a href="lista_servicio.php" class="btn btn-secondary"> Lista </a>
        </nav>
    </head>
    <body>
        <div class="bg"></div>
        <div class="container mt-5">
            <h2>Cambio de Vehiculo</h2>
            <form action="crud.php" method="post">
                <input type="hidden" name="id_entrada_servicio" value="<?php echo $serv_veh['id_entrada_servicio']; ?>">
                <div class="form-group">
                    <label for="fecha_ingreso">Fecha de Ingreso</label>
                    <input type="date" class="form-control" name="fecha_ingreso" value="<?php echo $serv_veh['fecha_ingreso']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="id_servicio">Servicio</label>
                    <select class="form-control" name="id_servicio" value="<?php echo $serv_veh['id_servicio']; ?>" required>
                        <?php
                            $sql="SELECT * FROM servicio";
                            $result2=$conn->query($sql);
                            while($row2=$result2->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row2['id_servicio']; ?>" <?php echo ($serv_veh['id_servicio'] == $row2['id_servicio']) ? 'selected' : ''; ?>>
                            <?php echo $row2['nombre']; ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="number" class="form-control" name="total" step="0.01" min="0" value="<?php echo $serv_veh['total']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="id_vehiculo">Vehiculo</label>
                    <select class="form-control" name="id_vehiculo" required>
                        <?php
                            $sql="SELECT * FROM vehiculo";  //subconsulta para obtener el nombre
                            $result2=$conn->query($sql);
                            while($row2=$result2->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row2['id_vehiculo']; ?>" <?php echo ($serv_veh['id_vehiculo'] == $row2['id_vehiculo']) ? 'selected' : ''; ?>>
                            <?php echo $row2['num_serie']; ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary" name="cambio_serv_veh">Actualizar Trabajo</button>
            </form>
        </div>
    </body>
</html>
