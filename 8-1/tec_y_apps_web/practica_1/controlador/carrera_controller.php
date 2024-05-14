<?php 
require_once('modelo/carrera_model.php');

class carrera_controller{
    private $model;

    function __construct(){
        $this->model = new carrera_model();
    }

    function index(){
        $query = $this->model->get();
        include_once('vistas/header.php');
        include_once('vistas/lista_carrera.php');
        include_once('vistas/footer.php');
    }

    function carrera(){
        $data = null;
        if(isset($_REQUEST['id_carrera'])){
            $data = $this->model->get_id($_REQUEST['id_carrera']);    
        }
        $query = $this->model->get();
        include_once('vistas/header.php');
        include_once('vistas/carrera.php');
        include_once('vistas/footer.php');
    }

    function get_datosC(){
        $data['nombre'] = $_REQUEST['txt_nombre'];
        $data['acronimo'] = $_REQUEST['txt_acronimo'];

        if ($_REQUEST['id_carrera'] == "") {
            $this->model->create($data);
        } else {
            $id = $_REQUEST['id_carrera'];
            $this->model->update($data, $id);
        }
        
        header("Location: index.php?m=carrera");
    }

    function confirmarDelete(){
        if ($_REQUEST['id_carrera'] != 0) {
            $data = $this->model->get_id($_REQUEST['id_carrera']);
        }

        if ($_REQUEST['id_carrera'] == 0) {
            $id = $_REQUEST['id_carrera'];
            $this->model->delete($id);
            header("Location: index.php?m=carrera");
        }

        include_once('vistas/header.php');
        include_once('vistas/confirm.php');
        include_once('vistas/footer.php');
    }
}
?>
