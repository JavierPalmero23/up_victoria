<html>
    <head>
        <title>Alta de Carreras</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <a href="index.php" class="boton"><button type="button" class="btn btn-outline-primary">Inicio</button></a>
    </head>
    <body> 
        <div class="container mt-5">
            <h2>Alta de Carreras</h2>
            <form action="crud.php" method="post">
                <div class="form-group">
                    <label for="nombre_carrera">Nombre Carrera</label>
                    <input type="text" class="form-control" name="nombre_carrera" required>
                </div>
                <button type="submit" class="btn btn-primary" name="alta_carrera">Agregar Carrera</button>
            </form>
        </div>
    </body>
</html>
