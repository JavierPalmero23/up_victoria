<!--vistas/estudiante.php-->
<div class="container">
    <div class="jumbotron">
        <h2>Formulario de Registro</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if(empty($data['id_estudiante'])): ?>
            <form action="index.php?m=get_datosE" method="post">
            <?php else: ?>
            <form action="index.php?m=get_datosE&id_estudiante=<?php echo $data['id_estudiante'];?>" method="post">
            <?php endif; ?>
                <?php if(!empty($data['id_estudiante'])): ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_id">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_id" value="<?php echo $data['id_estudiante']; ?>" readonly>
                    </div>
                </div>
                <?php endif; ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_cedula">MATRICULA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_cedula" value="<?php echo isset($data['matricula']) ? $data['matricula'] : ''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_nombre">NOMBRES:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_nombre" value="<?php echo isset($data['nombres']) ? $data['nombres'] : ''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_apellidos">APELLIDOS:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_apellidos" value="<?php echo isset($data['apellidos']) ? $data['apellidos'] : ''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_promedio">PROMEDIO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_promedio" value="<?php echo isset($data['promedio']) ? $data['promedio'] : ''; ?>">
                    </div>
                </div>
                <?php
                    // Get the current date
                    $currentDate = new DateTime();
                    // Convert the birthdate from the database to a DateTime object
                    $birthdate = isset($data['fech_nac']) ? new DateTime($data['fech_nac']) : null;

                    // Calculate the difference between the current date and the birthdate
                    $age = ($birthdate !== null) ? $birthdate->diff($currentDate)->y : '';

                    // Display the age in the input field
                ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_fecha">FECHA DE NACIMIENTO:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="txt_fecha" value="<?php echo isset($data['fech_nac']) ? $data['fech_nac'] : ''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-offset-3">
                        <?php if(empty($data['id_estudiante'])): ?>
                            <input type="submit" class="btn btn-primary form-control" name="" value="Registrar">
                        <?php else: ?>
                            <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
