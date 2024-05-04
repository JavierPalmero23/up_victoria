<!-- views/carrera/editar.php -->

<div class="container mt-4">
    <h2>Editar Carrera</h2>

    <form method="post" action="./index.php?controller=CarreraController&action=editar">
        <input type="hidden" name="id" value="<?php echo $carrera['id_carrera']; ?>">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $carrera['nombre']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
