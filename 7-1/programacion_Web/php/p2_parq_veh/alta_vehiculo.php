<html>
    <head>
        <title>Alta de Vehiculo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/vehiculo.css">
        <?php include 'db.php'; ?>
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.html" class="btn btn-primary">Menu</a>
            <a href="lista_vehiculo.php" class="btn btn-secondary"> Lista </a>
        </nav>	
    </head>

    <body> 
        <div class="bg"></div>
        <div class="container mt-5">
            <h2>Alta de Vehiculo</h2>
            <form action="crud.php" method="post">
                <div class="form-group">
                    <label for="num_serie">Numero de Serie</label>
                    <input type="number" class="form-control" name="num_serie" min="0" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" name="marca" required>
                </div>
                <div class="form-group">
                    <label for="submarca">Submarca</label>
                    <input type="text" class="form-control" name="submarca" required>
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="number" class="form-control" name="modelo" min="0" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" required>
                        <option value="Motocicleta">Motocicleta</option>
                        <option value="Cupe">Cupe</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Deportivo">Deportivo</option>
                        <option value="SUV">SUV</option>
                        <option value="Camioneta">Camioneta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" name="color" required>
                </div>
                <div class="form-group">
                    <label for="capacidad">Capacidad</label>
                    <input type="number" class="form-control" name="capacidad" required>
                </div>
                <div class="form-group">
                    <label for="procedencia">Procedencia</label>
                    <select class="form-control" name="procedencia" required>
                        <option value="Mexico">México</option>
                        <option value="EUA">EUA</option>
                        <option value="Extranjero">Extranjero</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="alta_vehiculo">Agregar Vehiculo</button>
            </form>
        </div>
    </body>
</html>
