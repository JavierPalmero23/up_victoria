<!--vistas/lista_estudiante.php-->
<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>ESTUDIAMBRES</h2>
        
    </div>
    <a href="index.php?m=estudiante"><button>Nuevo Estudiante</button></a>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>MATRICULA</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>PROMEDIO</th>
                    <th>EDAD</th>
                    <th>FECHA NACIMIENTO</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): 
                    $currentDate = new DateTime();
                    $birthdate = new DateTime($data['fech_nac']);
                    $age = $birthdate->diff($currentDate)->y;
                ?>
                    <tr>
                        <th><?php echo $data['id_estudiante']; ?></th>
                        <th><?php echo $data['matricula']; ?></th>
                        <th><?php echo $data['nombres']; ?></th>
                        <th><?php echo $data['apellidos']; ?></th>
                        <th><?php echo $data['promedio']; ?></th>
                        <th><?php echo $age; ?></th>
                        <th><?php echo $data['fech_nac']; ?></th>
                        <th>
                            <a href="index.php?m=estudiante&id_estudiante=<?php echo $data['id_estudiante']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDelete&id_estudiante=<?php echo $data['id_estudiante']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>