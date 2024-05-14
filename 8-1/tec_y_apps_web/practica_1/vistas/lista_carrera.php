<!--vistas/lista_carrera.php-->
<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>CARRERAS</h2>
        
    </div>
    <a href="index.php?m=carrera"><button>Nuevo Carrera</button></a>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>ACRONIMO</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id_carrera']; ?></th>
                        <th><?php echo $data['nombre']; ?></th>
                        <th><?php echo $data['acronimo']; ?></th>
                        <th>
                            <a href="index.php?m=carrera&id_carrera=<?php echo $data['id_carrera']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDelete&id_carrera=<?php echo $data['id_carrera']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>