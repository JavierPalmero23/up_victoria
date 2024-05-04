<html>
    <head>
        <title>Alta de Servicios en Vehiculos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/serv-veh.css">
        <?php include 'db.php'; ?>
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.html" class="btn btn-primary">Menu</a>
            <a href="lista_serv_veh.php" class="btn btn-secondary"> Lista </a>
        </nav>
    </head>

    <body> 
        <div class="bg"></div>
        <div class="container mt-5">
            <h2>Alta de Servicios en Vehiculos</h2>
            <form action="crud.php" method="post">
                <div class="form-group">
                    <label for="fecha_ingreso">Fecha de Ingreso</label>
                    <input type="date" class="form-control" name="fecha_ingreso" required>
                </div>
                <div class="form-group">
                    <label for="id_servicio">Servicio</label>
                    <select class="form-control" name="id_servicio" required>
                        <?php
                            $sql="SELECT * FROM servicio";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row['id_servicio']; ?>">
                            <?php echo $row['nombre']; ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="number" class="form-control" name="total" step="0.01" min="0" value="0" required>
                </div>
                <div class="form-group">
                    <label for="id_vehiculo">Vehiculo</label>
                    <select class="form-control" name="id_vehiculo" required>
                        <?php
                            $sql="SELECT * FROM vehiculo";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row['id_vehiculo']; ?>">
                            <?php echo $row['num_serie']; ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="alta_serv_veh">Agregar Servicios en Vehiculos</button>
            </form>
        </div>
    </body>
</html>
