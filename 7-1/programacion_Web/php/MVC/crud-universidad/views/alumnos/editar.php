<!-- views/alumnos/editar.php -->

<div class="container mt-4">
    <h2>Editar Alumno</h2>

    <form method="post" action="./index.php?controller=AlumnosController&action=editar">
        <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
        <div class="form-group">
            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" class="form-control" value="<?php echo $alumno['matricula']; ?>" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $alumno['nombre']; ?>" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" class="form-control" value="<?php echo $alumno['edad']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="<?php echo $alumno['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="id_carrera">Carrera:</label>
            <input type="text" name="id_carrera" class="form-control" value="<?php echo $alumno['id_carrera']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
