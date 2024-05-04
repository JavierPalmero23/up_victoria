<html>
    <head>
        <title>Alta de Servicio</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/servicio.css">
        <?php include 'db.php'; ?>
        <nav class="navbar navbar-dark bg-dark">       
            <a href="index.html" class="btn btn-primary">Menu</a>
            <a href="lista_servicio.php" class="btn btn-secondary"> Lista </a>
        </nav>
    </head>

    <body> 
        <div class="bg"></div>
        <div class="container mt-5">
            <h2>Alta de Servicio</h2>
            <form action="crud.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="costo">Costo</label>
                    <input type="number" class="form-control" name="costo" step="0.01" value="0" min="0" required>
                </div>
                <button type="submit" class="btn btn-primary" name="alta_servicio">Agregar Servicio</button>
            </form>
        </div>
    </body>
</html>
