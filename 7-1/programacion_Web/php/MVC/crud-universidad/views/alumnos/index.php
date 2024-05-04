<!-- views/alumnos/index.php -->

<div class="container mt-4">
    <h2>Listado de Alumnos</h2>

    <a href="./index.php?controller=AlumnosController&action=alta" class="btn btn-primary mb-3">Agregar Alumno</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Matrícula</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Carrera</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?php echo $alumno['id']; ?></td>
                <td><?php echo $alumno['matricula']; ?></td>
                <td><?php echo $alumno['nombre']; ?></td>
                <td><?php echo $alumno['edad']; ?></td>
                <td><?php echo $alumno['email']; ?></td>
                <td><?php echo $alumno['nombre_carrera']; ?></td>
                <td>
                    <a href="./index.php?controller=AlumnosController&action=editar&id=<?php echo $alumno['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="./index.php?controller=AlumnosController&action=eliminar&id=<?php echo $alumno['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>