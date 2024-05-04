<!-- views/alumnos/alta.php -->

<div class="container mt-4">
    <h2>Alta de Alumno</h2>

    <form method="post" action="./index.php?controller=AlumnosController&action=alta">
        <div class="form-group">
            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_carrera">Carrera:</label>
            <input type="text" name="id_carrera" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
