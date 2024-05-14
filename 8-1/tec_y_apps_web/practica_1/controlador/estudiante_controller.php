<!--controlador/estudiante_controller.php-->
<?php 
    require_once('modelo/estudiante_model.php');

    class estudiante_controller{

        private $model_e;
        private $model_p;

        function __construct(){
            $this->model_e=new estudiante_model();
        }

        function index(){
            $query =$this->model_e->get();

            include_once('vistas/header.php');
            include_once('vistas/lista_estudiante.php');
            include_once('vistas/footer.php');
        }
        function estudiante(){
            $data=NULL;
            if(isset($_REQUEST['id_estudiante'])){
                $data=$this->model_e->get_id($_REQUEST['id_estudiante']);    
            }
            $query=$this->model_e->get();
            include_once('vistas/header.php');
            include_once('vistas/estudiante.php');
            include_once('vistas/footer.php');
        }

        function get_datosE(){
            if(isset($_REQUEST['id_estudiante'])) {
                $id_estudiante = $_REQUEST['id_estudiante'];
            } else {
                $id_estudiante = null;
            }
            $data['id_estudiante'] = $id_estudiante;
            $data['matricula']=$_REQUEST['txt_cedula'];
            $data['nombres']=$_REQUEST['txt_nombre'];
            $data['apellidos']=$_REQUEST['txt_apellidos'];
            $data['promedio']=$_REQUEST['txt_promedio'];
            $data['fech_nac']=$_REQUEST['txt_fecha'];

            if ($_REQUEST['id_estudiante']=="") {
                $this->model_e->create($data);
            }
            
            if($_REQUEST['id_estudiante']!=""){
                $date=$_REQUEST['id_estudiante'];
                $this->model_e->update($data,$date);
            }
            
            header("Location:index.php");

        }

        function confirmarDelete() {
            // Verificar si se envió un ID de estudiante en la solicitud
            if (isset($_REQUEST['id_estudiante'])) {
                $id_estudiante = $_REQUEST['id_estudiante'];
        
                // Verificar si el ID del estudiante es válido (diferente de 0)
                if ($id_estudiante != 0) {
                    // Eliminar el estudiante utilizando el modelo
                    $this->model_e->delete($id_estudiante);
        
                    // Redirigir a la página principal después de eliminar
                    header("Location: index.php");
                    exit();
                } else {
                    // Si el ID del estudiante es 0, no se especificó ningún estudiante, redirigir a la página principal
                    header("Location: index.php");
                    exit();
                }
            } else {
                // Si no se envió un ID de estudiante en la solicitud, redirigir a la página principal
                header("Location: index.php");
                exit();
            }
        }
        
        


    }
?>