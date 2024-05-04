<?php
    include 'db.php';
    if(isset($_GET['id_carrera'])){
        $id_carrera = $_GET['id_carrera'];
        $sql = "SELECT * FROM carrera WHERE id_carrera=$id_carrera";
        $result = $conn->query($sql);
        $carrera = $result->fetch_assoc();
    }
?>
<html>
    <head>
        <title>Editar Carrera</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
    </head>
    <body>
        <div class="container mt-5">
            <h2>Editar Carrera</h2>
            <form action="crud.php" method="post">
                <input type="hidden" name="id_carrera" value="<?php echo $carrera['id_carrera']; ?>">
                <div class="form-group">
                    <label for="nombre_carrera">Nombre Carrera</label>
                    <input type="text" class="form-control" name="nombre_carrera" value="<?php echo $carrera['nombre']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary" name="actualizar_carrera">Actualizar Carrera</button>
            </form>
        </div>
    </body>
</html>
