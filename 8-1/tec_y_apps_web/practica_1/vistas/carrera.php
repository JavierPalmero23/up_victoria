<div class="container">
    <div class="jumbotron">
        <h2>Formulario de Carrera</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?m=get_datosC" method="post">
                <?php if(!empty($data['id_carrera'])): ?>
                    <input type="hidden" name="id_carrera" value="<?php echo $data['id_carrera']; ?>">
                <?php endif; ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_nombre">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_nombre" value="<?php echo isset($data['nombre']) ? $data['nombre'] : ''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_acronimo">Acrónimo:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_acronimo" value="<?php echo isset($data['acronimo']) ? $data['acronimo'] : ''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-offset-3">
                        <?php if(empty($data['id_carrera'])): ?>
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
