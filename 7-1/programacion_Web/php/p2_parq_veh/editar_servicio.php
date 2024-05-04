<?php
    include 'db.php';
    $vehiculo = array();
    if(isset($_GET['id_servicio'])){
        $id_servicio = $_GET['id_servicio'];
        $sql = "SELECT * FROM servicio WHERE id_servicio=$id_servicio";
        $result = $conn->query($sql);
        $servicio = $result->fetch_assoc();
    }
?>

<html>
    <head>
        <title>Cambio Servicio</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/servicio.css">
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.html" class="btn btn-primary">Menu</a>
            <a href="lista_servicio.php" class="btn btn-secondary"> Lista </a>
        </nav>
    </head>
    <body>
        <div class="bg"></div>
        <div class="container mt-5">
            <h2>Cambio de Servicio</h2>
            <form action="crud.php" method="post">
                <input type="hidden" name="id_servicio" value="<?php echo $servicio['id_servicio']; ?>">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $servicio['nombre']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="costo">Costo</label>
                    <input type="number" class="form-control" name="costo" step="0.01" min="0" value="<?php echo $servicio['costo']; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary" name="cambio_servicio">Actualizar Servicio</button>
            </form>
        </div>
    </body>
</html>
