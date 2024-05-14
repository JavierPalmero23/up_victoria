<!--index.php-->

<?php
require_once('bd/conexion.php');

// Incluir controladores
require_once('controlador/estudiante_controller.php');
require_once('controlador/carrera_controller.php'); // Nuevo controlador para carreras

// Instanciar controladores
$estudiante_controller = new estudiante_controller();
$carrera_controller = new carrera_controller();

// Determinar el método a ejecutar según la solicitud
if (!empty($_REQUEST['m'])) {
    $metodo = $_REQUEST['m'];
    // Enviar la solicitud al controlador correspondiente
    switch ($metodo) {
        case 'estudiante':
            $estudiante_controller->index();
            break;
        case 'carrera': // Agregar un nuevo caso para las carreras
            $carrera_controller->index();
            break;
        default:
            // Si no se especifica un método válido, mostrar la página principal de estudiantes por defecto
            $estudiante_controller->index();
            break;
    }
} else {
    // Si no se especifica un método en la solicitud, mostrar la página principal de estudiantes por defecto
    $estudiante_controller->index();
}
?>
