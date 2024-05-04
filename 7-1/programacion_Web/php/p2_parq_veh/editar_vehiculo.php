<?php
    include 'db.php';
    $vehiculo = array();
    if(isset($_GET['id_vehiculo'])){
        $id_vehiculo = $_GET['id_vehiculo'];
        $sql = "SELECT * FROM vehiculo WHERE id_vehiculo=$id_vehiculo";
        $result = $conn->query($sql);
        $vehiculo = $result->fetch_assoc();
    }
?>

<html>
    <head>
        <title>Cambio Vehiculo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/vehiculo.css">
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.html" class="btn btn-primary">Menu</a>
            <a href="lista_vehiculo.php" class="btn btn-secondary"> Lista </a>
        </nav>
    </head>
    <body>
        <div class="bg"></div>
        <div class="container mt-5">
            <h2>Cambio de Vehiculo</h2>
            <form action="crud.php" method="post">
                <input type="hidden" name="id_vehiculo" value="<?php echo $vehiculo['id_vehiculo']; ?>">
                <div class="form-group">
                    <label for="num_serie">Numero de Serie</label>
                    <input type="number" class="form-control" name="num_serie" value="<?php echo $vehiculo['num_serie']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" name="marca" value="<?php echo $vehiculo['marca']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="submarca">Submarca</label>
                    <input type="text" class="form-control" name="submarca" value="<?php echo $vehiculo['submarca']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" name="modelo" value="<?php echo $vehiculo['modelo']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" required>
                        <option value="Motocicleta" <?php echo ($vehiculo['tipo'] == 'Motocicleta') ? 'selected' : ''; ?>>Motocicleta</option>
                        <option value="Cupe" <?php echo ($vehiculo['tipo'] == 'Cupe') ? 'selected' : ''; ?>>Cupe</option>
                        <option value="Sedan" <?php echo ($vehiculo['tipo'] == 'Sedan') ? 'selected' : ''; ?>>Sedan</option>
                        <option value="Deportivo" <?php echo ($vehiculo['tipo'] == 'Deportivo') ? 'selected' : ''; ?>>Deportivo</option>
                        <option value="SUV" <?php echo ($vehiculo['tipo'] == 'SUV') ? 'selected' : ''; ?>>SUV</option>
                        <option value="Camioneta" <?php echo ($vehiculo['tipo'] == 'Camioneta') ? 'selected' : ''; ?>>Camioneta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" name="color" value="<?php echo $vehiculo['color']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="capacidad">Capacidad</label>
                    <input type="numeric" class="form-control" name="capacidad" value="<?php echo $vehiculo['capacidad']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="procedencia">Procedencia</label>
                    <select class="form-control" name="procedencia" required>
                        <option value="Mexico" <?php echo ($vehiculo['procedencia'] == 'Mexico') ? 'selected' : ''; ?>>México</option>
                        <option value="EUA" <?php echo ($vehiculo['procedencia'] == 'EUA') ? 'selected' : ''; ?>>EUA</option>
                        <option value="Extranjero" <?php echo ($vehiculo['procedencia'] == 'Extranjero') ? 'selected' : ''; ?>>Extranjero</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary" name="cambio_vehiculo">Actualizar Vehiculo</button>
            </form>
        </div>
    </body>
</html>
