<!-- views/carrera/index.php -->

<div class="container mt-4">
    <h2>Listado de Carreras</h2>

    <a href="./index.php?controller=CarreraController&action=alta" class="btn btn-primary mb-3">Agregar Carrera</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($carreras as $carrera): ?>
            <tr>
                <td><?php echo $carrera['id_carrera']; ?></td>
                <td><?php echo $carrera['nombre']; ?></td>
                <td>
                    <a href="./index.php?controller=CarreraController&action=editar&id=<?php echo $carrera['id_carrera']; ?>" class="btn btn-warning">Editar</a>
                    <a href="./index.php?controller=CarreraController&action=eliminar&id=<?php echo $carrera['id_carrera']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
