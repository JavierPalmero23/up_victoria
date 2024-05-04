<!-- views/carrera/alta.php -->

<div class="container mt-4">
    <h2>Alta de Carrera</h2>

    <form method="post" action="./index.php?controller=CarreraController&action=alta">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>